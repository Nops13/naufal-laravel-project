<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\TransaksiPenyewaan;
use Illuminate\Http\Request;

class TransaksiPenyewaanController extends Controller
{
    public function index()
    {
        $transaksi_penyewaans = TransaksiPenyewaan::all(); //mengembalikan collection
        return view('kasir.NotaTransaksi',['transaksi_penyewaans' => $transaksi_penyewaans]);
    }

    public function cetak()
    {

    	$transaksi_penyewaans = TransaksiPenyewaan::all();

    	$pdf = PDF::loadview('kasir.NotaTransaksiCetak',['transaksi_penyewaans'=>$transaksi_penyewaans]);
    	return $pdf->download('laporan-pegawai.pdf');
    }


    public function create()
    {
        # code...
        return view('kasir.TransaksiPenyewaan');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'tanggal_sewa' => 'required',
            'merek' => 'required',
            'type' => 'required',
            'nopolisi' => 'required',
            'uang_jaminan' => 'required'
        ]);

        TransaksiPenyewaan::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['tanggal_sewa']} berhasil");

        return redirect()->route('TransaksiPenyewaan.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(TransaksiPenyewaan $transaksi_penyewaan)
    {
        # code...
        return view('kasir.Nota',['transaksi_penyewaan'=>$transaksi_penyewaan]);
    }

    public function edit(TransaksiPenyewaan $transaksi_penyewaans)
    {
        # code...
        return view('kasir.edit-TransaksiPenyewaan',['TransaksiPenyewaan' => $transaksi_penyewaans]);
    }

    public function update(Request $request, TransaksiPenyewaan $transaksi_penyewaans)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required',
            'merek' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_kembali' => 'required'

        ]);

        TransaksiPenyewaan::where('id',$transaksi_penyewaans->id)->update($validateData);
        return redirect()->route('kasir.show',['TransaksiPenyewaan'=>$transaksi_penyewaans])->with('pesan',"update TransaksiPenyewaan {$validateData['merek']} berhasil");
    }

    public function delete(TransaksiPenyewaan $TransaksiPenyewaan)
    {
        # code...
        $TransaksiPenyewaan->delete();


    }
}

