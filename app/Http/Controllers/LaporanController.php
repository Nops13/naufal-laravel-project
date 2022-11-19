<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPengeluaran;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;


class LaporanController extends Controller
{
    public function index(){

            //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //diakhir get() untuk mengambil data array

            //diakhir first() jika hanya satu data yang diambil

            $data = DB::table('pengembalians')
                    ->join('data_pengeluarans', 'data_pengeluarans.id', '=', 'pengembalians.id')
                    ->get();

            //tampilkan view barang dan kirim datanya ke view tersebut
            $categories = [];
            $sewa = [];
            $sewa1 = [];

            foreach($data as $d){
                $categories[]=$d->bulan;
            }

            foreach($data as $dt){
                $sewa1[]=$dt->harga_sewa;
            }

            foreach($data as $dti){
                $sewa[]=$dti->jumlah;
            }

//dd(json_encode($sewa1));
            return view('bendahara.Laporan',['categories' => $categories, 'sewa' => $sewa, 'sewa1' => $sewa1])->with('data', $data);

        }

    public function cetak()
    {

    	$data = DB::table('pengembalians')
                ->join('data_pengeluarans', 'data_pengeluarans.id', '=', 'pengembalians.id')
                ->get();

    	$pdf = PDF::loadview('bendahara.CetakLaporan',['data'=>$data]);
    	return $pdf->download('laporan-bulanan.pdf');
    }
}
