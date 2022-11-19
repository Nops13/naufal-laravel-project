<?php

namespace App\Http\Controllers;

use App\Models\RegisterPeternak;
use Illuminate\Http\Request;

class RegisterPeternakController extends Controller
{
         public function index()
    {
        $register_peternaks = RegisterPeternak::all(); //mengembalikan collection
        return view('index');
    }

    public function create()
    {
        # code...
        return view('peternak.RegisterPeternak');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        RegisterPeternak::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['name']} berhasil");

        return redirect()->route('register.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(RegisterPeternak $RegisterPeternak)
    {
        # code...
        return view('peternak.detail-RegisterPeternak',['RegisterPeternak'=>$RegisterPeternak]);
    }

    public function edit(RegisterPeternak $RegisterPeternak)
    {
        # code...
        return view('peternak.edit-RegisterPeternak',['RegisterPeternak' => $RegisterPeternak]);
    }

    public function update(Request $request, RegisterPeternak $RegisterPeternak)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required|size:3|unique:register_peternaks,model,'.$RegisterPeternak->id,
            'merek' => 'required|min:2|max:50',
            'tempat_produksi' => 'required',
            'tanggal_produksi' => 'required',
            'garansi' => 'required',
            'daya' => 'required',
            'ukuran_PK' => 'required'
        ]);

        RegisterPeternak::where('id',$RegisterPeternak->id)->update($validateData);
        return redirect()->route('peternak.show',['RegisterPeternak'=>$RegisterPeternak])->with('pesan',"update RegisterPeternak {$validateData['merek']} berhasil");
    }

    public function delete(RegisterPeternak $RegisterPeternak)
    {
        # code...
        $RegisterPeternak->delete();

        return redirect()->route('peternak.index')->with('pesan', "Hapus data $RegisterPeternak->merek berhasil");
    }
}
