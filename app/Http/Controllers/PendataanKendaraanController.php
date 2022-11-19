<?php

namespace App\Http\Controllers;

use App\Models\PendataanKendaraan;
use Illuminate\Http\Request;

class PendataanKendaraanController extends Controller
{
     public function index()
    {
        $pendataan_kendaraans = PendataanKendaraan::all(); //mengembalikan collection
        return view('owner.monitoringinventaris',['pendataan_kendaraans' => $pendataan_kendaraans]);
    }

    public function index2()
    {
        return view('index');
    }


    public function create()
    {
        # code...
        return view('owner.pendataankendaraan');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'merek' => 'required',
            'type' => 'required',
            'tahun_perakitan' => 'required',
            'bahan_bakar' => 'required',
            'nopolisi' => 'required'
        ]);

        PendataanKendaraan::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['merek']} berhasil");

        return redirect()->route('PendataanKendaraan.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(PendataanKendaraan $pendataan_kendaraans)
    {
        # code...
        return view('owner.monitoringayammasuk',['PendataanKendaraan'=>$pendataan_kendaraans]);
    }

    public function edit(PendataanKendaraan $PendataanKendaraan)
    {
        # code...
        return view('kasir.edit-PendataanKendaraan',['PendataanKendaraan' => $PendataanKendaraan]);
    }

    public function update(Request $request, PendataanKendaraan $PendataanKendaraan)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required|size:3|unique:pendataan_kendaraans,model,'.$PendataanKendaraan->id,
            'merek' => 'required|min:2|max:50',
            'tempat_produksi' => 'required',
            'tanggal_produksi' => 'required',
            'garansi' => 'required',
            'daya' => 'required',
            'ukuran_PK' => 'required'
        ]);

        PendataanKendaraan::where('id',$PendataanKendaraan->id)->update($validateData);
        return redirect()->route('kasir.show',['PendataanKendaraan'=>$PendataanKendaraan])->with('pesan',"update PendataanKendaraan {$validateData['merek']} berhasil");
    }

    public function delete(PendataanKendaraan $PendataanKendaraan)
    {
        # code...
        $PendataanKendaraan->delete();

        return redirect()->route('kasir.index')->with('pesan', "Hapus data $PendataanKendaraan->merek berhasil");
    }
}
