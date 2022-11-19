<?php

namespace App\Http\Controllers;
use App\Models\Kerugian;
use Illuminate\Http\Request;

class KerugianController extends Controller
{
    public function index()
    {
        $kerugians = Kerugian::all(); //mengembalikan collection
        return view('owner.monitoringkerugian',['kerugians' => $kerugians]);
    }



    public function create()
    {
        # code...
        return view('kasir.Kerugian');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'tanggal_pengembalian' => 'required',
            'merek' => 'required',
            'type' => 'required',
            'nopolisi' => 'required',
            'kerusakan' => 'required',
            'ket'   => 'required'
        ]);

        Kerugian::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['tanggal_pengembalian']} berhasil");

        return redirect()->route('Kerugian.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(Kerugian $kerugians)
    {
        # code...
        return view('kasir.detail-Kerugian',['Kerugian   '=>$kerugians]);
    }

    public function edit(Kerugian $kerugians)
    {
        # code...
        return view('kasir.edit-Kerugian',['Kerugian' => $kerugians]);
    }

    public function update(Request $request, Kerugian $kerugians)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required',
            'merek' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_kembali' => 'required'

        ]);

        Kerugian::where('id',$kerugians->id)->update($validateData);
        return redirect()->route('kasir.show',['Kerugian'=>$kerugians])->with('pesan',"update Kerugian {$validateData['merek']} berhasil");
    }

    public function delete(Kerugian $Kerugian)
    {
        # code...
        $Kerugian->delete();


    }
}
