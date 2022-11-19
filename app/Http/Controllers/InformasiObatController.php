<?php

namespace App\Http\Controllers;

use App\Models\InformasiObat;
use Illuminate\Http\Request;

class InformasiObatController extends Controller
{

     public function index()
    {
        $informasi_obats = InformasiObat::all(); //mengembalikan collection
        return view('owner.monitoringpemberianobat',['informasi_obats' => $informasi_obats]);
    }



    public function create()
    {
        # code...
        return view('peternak.InformasiObat');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'jenis_obat' => 'required',
            'tanggal_pemberian' => 'required',
            'waktu_pemberian' => 'required',
            'jumlah_pemberian' => 'required'
        ]);

        InformasiObat::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['jenis_obat']} berhasil");

        return redirect()->route('InformasiObat.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(InformasiObat $InformasiObat)
    {
        # code...
        return view('peternak.detail-InformasiObat',['InformasiObat'=>$InformasiObat]);
    }

    public function edit(InformasiObat $InformasiObat)
    {
        # code...
        return view('peternak.edit-InformasiObat',['InformasiObat' => $InformasiObat]);
    }

    public function update(Request $request, InformasiObat $InformasiObat)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required|size:3|unique:informasi_obats,model,'.$InformasiObat->id,
            'merek' => 'required|min:2|max:50',
            'tempat_produksi' => 'required',
            'tanggal_produksi' => 'required',
            'garansi' => 'required',
            'daya' => 'required',
            'ukuran_PK' => 'required'
        ]);

        InformasiObat::where('id',$InformasiObat->id)->update($validateData);
        return redirect()->route('peternak.show',['InformasiObat'=>$InformasiObat])->with('pesan',"update InformasiObat {$validateData['merek']} berhasil");
    }

    public function delete(InformasiObat $InformasiObat)
    {
        # code...
        $InformasiObat->delete();

        return redirect()->route('peternak.index')->with('pesan', "Hapus data $InformasiObat->merek berhasil");
    }
}
