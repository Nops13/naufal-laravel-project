<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function cetak()
    {

    	$pegawai = Pegawai::all();

    	$pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
    	return $pdf->download('laporan-pegawai-pdf');
    }
}
