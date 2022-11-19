<?php

namespace App\Http\Controllers;

use App\Models\AyamMasuk;
use Illuminate\Http\Request;

class AyamMasukController extends Controller
{

    public function index()
    {
        $ayam_masuks = AyamMasuk::all(); //mengembalikan collection
        return view('owner.monitoringayammasuk',['ayam_masuks' => $ayam_masuks]);
    }

    public function index2()
    {
        return view('index');
    }


    public function create()
    {
        # code...
        return view('peternak.inputayammasuk');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'tanggal_ayam_masuk' => 'required',
            'jumlah_ayam_masuk' => 'required'
        ]);

        AyamMasuk::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['tanggal_ayam_masuk']} berhasil");

        return redirect()->route('AyamMasuk.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(AyamMasuk $ayam_masuks)
    {
        # code...
        return view('owner.monitoringayammasuk',['AyamMasuk'=>$ayam_masuks]);
    }

    public function edit(AyamMasuk $AyamMasuk)
    {
        # code...
        return view('peternak.edit-AyamMasuk',['AyamMasuk' => $AyamMasuk]);
    }

    public function update(Request $request, AyamMasuk $AyamMasuk)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required|size:3|unique:ayam_masuks,model,'.$AyamMasuk->id,
            'merek' => 'required|min:2|max:50',
            'tempat_produksi' => 'required',
            'tanggal_produksi' => 'required',
            'garansi' => 'required',
            'daya' => 'required',
            'ukuran_PK' => 'required'
        ]);

        AyamMasuk::where('id',$AyamMasuk->id)->update($validateData);
        return redirect()->route('peternak.show',['AyamMasuk'=>$AyamMasuk])->with('pesan',"update AyamMasuk {$validateData['merek']} berhasil");
    }

    public function delete(AyamMasuk $AyamMasuk)
    {
        # code...
        $AyamMasuk->delete();

        return redirect()->route('peternak.index')->with('pesan', "Hapus data $AyamMasuk->merek berhasil");
    }
}
