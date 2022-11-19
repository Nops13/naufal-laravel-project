<?php

namespace App\Http\Controllers;

use App\Models\MonitoringAyam;
use Illuminate\Http\Request;

class MonitoringAyamController extends Controller
{

     public function index()
    {
        $monitoring_ayams = MonitoringAyam::all(); //mengembalikan collection
        return view('owner.monitoringkualitasayam',['monitoring_ayams' => $monitoring_ayams]);
    }

    public function create()
    {
        # code...
        return view('peternak.MonitoringAyam');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'tanggal_ayam_masuk' => 'required',
            'rata_berat_ayam' => 'required',
            'ayam_sehat' => 'required',
            'ayam_sakit' => 'required',
            'keterangan'=> 'required'
        ]);

        MonitoringAyam::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['tanggal_ayam_masuk']} berhasil");

        return redirect()->route('MonitoringAyam.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(MonitoringAyam $MonitoringAyam)
    {
        # code...
        return view('peternak.detail-MonitoringAyam',['MonitoringAyam'=>$MonitoringAyam]);
    }

    public function edit(MonitoringAyam $MonitoringAyam)
    {
        # code...
        return view('peternak.edit-MonitoringAyam',['MonitoringAyam' => $MonitoringAyam]);
    }

    public function update(Request $request, MonitoringAyam $MonitoringAyam)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required|size:3|unique:informasi_pakans,model,'.$MonitoringAyam->id,
            'merek' => 'required|min:2|max:50',
            'tempat_produksi' => 'required',
            'tanggal_produksi' => 'required',
            'garansi' => 'required',
            'daya' => 'required',
            'ukuran_PK' => 'required'
        ]);

        MonitoringAyam::where('id',$MonitoringAyam->id)->update($validateData);
        return redirect()->route('peternak.show',['MonitoringAyam'=>$MonitoringAyam])->with('pesan',"update MonitoringAyam {$validateData['merek']} berhasil");
    }

    public function delete(MonitoringAyam $MonitoringAyam)
    {
        # code...
        $MonitoringAyam->delete();

        return redirect()->route('peternak.index')->with('pesan', "Hapus data $MonitoringAyam->merek berhasil");
    }
}
