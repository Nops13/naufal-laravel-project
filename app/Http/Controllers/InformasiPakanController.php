<?php

namespace App\Http\Controllers;

use App\Models\InformasiPakan;
use Illuminate\Http\Request;

class InformasiPakanController extends Controller
{

     public function index()
    {
        $informasi_pakans = InformasiPakan::all(); //mengembalikan collection
        return view('owner.monitoringpemberianpakan',['informasi_pakans' => $informasi_pakans]);
    }

    public function create()
    {
        # code...
        return view('peternak.InformasiPakan');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'jenis_pakan' => 'required',
            'tanggal_pemberian'=> 'required',
            'waktu_pemberian'=> 'required',
            'jumlah_pemberian'=> 'required'
        ]);

        InformasiPakan::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['jenis_pakan']} berhasil");

        return redirect()->route('InformasiPakan.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(InformasiPakan $InformasiPakan)
    {
        # code...
        return view('peternak.detail-InformasiPakan',['InformasiPakan'=>$InformasiPakan]);
    }

    public function edit(InformasiPakan $InformasiPakan)
    {
        # code...
        return view('peternak.edit-InformasiPakan',['InformasiPakan' => $InformasiPakan]);
    }

    public function update(Request $request, InformasiPakan $InformasiPakan)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required|size:3|unique:informasi_pakans,model,'.$InformasiPakan->id,
            'merek' => 'required|min:2|max:50',
            'tempat_produksi' => 'required',
            'tanggal_produksi' => 'required',
            'garansi' => 'required',
            'daya' => 'required',
            'ukuran_PK' => 'required'
        ]);

        InformasiPakan::where('id',$InformasiPakan->id)->update($validateData);
        return redirect()->route('peternak.show',['InformasiPakan'=>$InformasiPakan])->with('pesan',"update InformasiPakan {$validateData['merek']} berhasil");
    }

    public function delete(InformasiPakan $InformasiPakan)
    {
        # code...
        $InformasiPakan->delete();

        return redirect()->route('peternak.index')->with('pesan', "Hapus data $InformasiPakan->merek berhasil");
    }
}
