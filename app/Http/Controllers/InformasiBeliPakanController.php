<?php

namespace App\Http\Controllers;

use App\Models\InformasiBeliPakan;
use Illuminate\Http\Request;

class InformasiBeliPakanController extends Controller
{
         public function index()
    {
        $informasi_beli_pakans = InformasiBeliPakan::all(); //mengembalikan collection
        return view('owner.monitoringpembelianpakan',['informasi_beli_pakans' => $informasi_beli_pakans]);
    }

    public function create()
    {
        # code...
        return view('peternak.InformasiBeliPakan');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'jenis_pakan' => 'required',
            'tanggal_pembelian'=> 'required',
            'waktu_pembelian'=> 'required',
            'jumlah_pembelian'=> 'required'
        ]);

        InformasiBeliPakan::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['jenis_pakan']} berhasil");

        return redirect()->route('InformasiBeliPakan.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(InformasiBeliPakan $InformasiBeliPakan)
    {
        # code...
        return view('peternak.detail-InformasiBeliPakan',['InformasiBeliPakan'=>$InformasiBeliPakan]);
    }

    public function edit(InformasiBeliPakan $InformasiBeliPakan)
    {
        # code...
        return view('peternak.edit-InformasiBeliPakan',['InformasiBeliPakan' => $InformasiBeliPakan]);
    }

    public function update(Request $request, InformasiBeliPakan $InformasiBeliPakan)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required|size:3|unique:informasi_pakans,model,'.$InformasiBeliPakan->id,
            'merek' => 'required|min:2|max:50',
            'tempat_produksi' => 'required',
            'tanggal_produksi' => 'required',
            'garansi' => 'required',
            'daya' => 'required',
            'ukuran_PK' => 'required'
        ]);

        InformasiBeliPakan::where('id',$InformasiBeliPakan->id)->update($validateData);
        return redirect()->route('peternak.show',['InformasiBeliPakan'=>$InformasiBeliPakan])->with('pesan',"update InformasiBeliPakan {$validateData['merek']} berhasil");
    }

    public function delete(InformasiBeliPakan $InformasiBeliPakan)
    {
        # code...
        $InformasiBeliPakan->delete();

        return redirect()->route('peternak.index')->with('pesan', "Hapus data $InformasiBeliPakan->merek berhasil");
    }
}
