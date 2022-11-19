<?php

namespace App\Http\Controllers;

use App\Models\PembelianObat;
use Illuminate\Http\Request;

class PembelianObatController extends Controller
{

    public function index()
    {
        $pembelian_obats = PembelianObat::all(); //mengembalikan collection
        return view('owner.monitoringpembelianobat',['pembelian_obats' => $pembelian_obats]);
    }

    public function create()
    {
        # code...
        return view('peternak.InformasiObatBeli');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'jenis_obat' => 'required',
            'tanggal_pembelian' => 'required',
            'waktu_pembelian' => 'required',
            'jumlah_pembelian' => 'required'
        ]);

        PembelianObat::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['jenis_obat']} berhasil");

        return redirect()->route('PembelianObat.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(PembelianObat $PembelianObat)
    {
        # code...
        return view('peternak.detail-PembelianObat',['PembelianObat'=>$PembelianObat]);
    }

    public function edit(PembelianObat $PembelianObat)
    {
        # code...
        return view('peternak.edit-PembelianObat',['PembelianObat' => $PembelianObat]);
    }

    public function update(Request $request, PembelianObat $PembelianObat)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required|size:3|unique:pembelian_obats,model,'.$PembelianObat->id,
            'merek' => 'required|min:2|max:50',
            'tempat_produksi' => 'required',
            'tanggal_produksi' => 'required',
            'garansi' => 'required',
            'daya' => 'required',
            'ukuran_PK' => 'required'
        ]);

        PembelianObat::where('id',$PembelianObat->id)->update($validateData);
        return redirect()->route('peternak.show',['PembelianObat'=>$PembelianObat])->with('pesan',"update PembelianObat {$validateData['merek']} berhasil");
    }

    public function delete(PembelianObat $PembelianObat)
    {
        # code...
        $PembelianObat->delete();

        return redirect()->route('peternak.index')->with('pesan', "Hapus data $PembelianObat->merek berhasil");
    }
}
