<?php

namespace App\Http\Controllers;
use App\Models\DataPengeluaran;
use Illuminate\Http\Request;

class DataPengeluaranController extends Controller
{
    public function index()
    {
        $data_pengeluarans = DataPengeluaran::all(); //mengembalikan collection
        return view('bendahara.DataPengeluaran',['DataPengeluaran' => $data_pengeluarans]);
    }



    public function create()
    {
        # code...
        return view('bendahara.DataPengeluaran');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'bulan' => 'required',
            'jenispengeluaran' => 'required',
            'jumlah' => 'required'

        ]);

        DataPengeluaran::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['bulan']} berhasil");

        return redirect()->route('DataPengeluaran.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(DataPengeluaran $data_pengeluarans)
    {
        # code...
        return view('bendahara.detail-DataPengeluaran',['DataPengeluaran   '=>$data_pengeluarans]);
    }

    public function edit(DataPengeluaran $data_pengeluarans)
    {
        # code...
        return view('bendahara.edit-DataPengeluaran',['DataPengeluaran' => $data_pengeluarans]);
    }

    public function update(Request $request, DataPengeluaran $data_pengeluarans)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required',
            'merek' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_kembali' => 'required'

        ]);

        DataPengeluaran::where('id',$data_pengeluarans->id)->update($validateData);
        return redirect()->route('bendahara.show',['DataPengeluaran'=>$data_pengeluarans])->with('pesan',"update DataPengeluaran {$validateData['merek']} berhasil");
    }

    public function delete(DataPengeluaran $data_pengeluarans)
    {
        # code...
       // $DataPengeluaran->delete();


    }
}
