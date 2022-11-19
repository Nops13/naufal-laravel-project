<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
     public function index()
    {
        //$pembelian_obats = PembelianObat::all(); //mengembalikan collection
        return view('index');
    }
}
