<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
  public function index()
    {
        $pengembalians = Pengembalian::all(); //mengembalikan collection
        return view('kasir.Pengembalian',['Pengembalian' => $pengembalians]);
    }



    public function create()
    {
        # code...
        return view('kasir.Pengembalian');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'tanggal_pengembalian' => 'required',
            'bulan' => 'required',
            'merek' => 'required',
            'type' => 'required',
            'nopolisi' => 'required',
            'harga_sewa' => 'required'
        ]);

        Pengembalian::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['tanggal_pengembalian']} berhasil");

        return redirect()->route('Pengembalian.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(Pengembalian $pengembalians)
    {
        # code...
        return view('kasir.detail-Pengembalian',['Pengembalian   '=>$pengembalians]);
    }

    public function edit(Pengembalian $pengembalians)
    {
        # code...
        return view('kasir.edit-Pengembalian',['Pengembalian' => $pengembalians]);
    }

    public function update(Request $request, Pengembalian $pengembalians)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required',
            'merek' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_kembali' => 'required'

        ]);

        Pengembalian::where('id',$pengembalians->id)->update($validateData);
        return redirect()->route('kasir.show',['Pengembalian'=>$pengembalians])->with('pesan',"update Pengembalian {$validateData['merek']} berhasil");
    }

    public function delete(Pengembalian $Pengembalian)
    {
        # code...
        $Pengembalian->delete();


    }
}
