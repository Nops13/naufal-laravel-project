<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //

public function index()
    {
        $members = Member::all(); //mengembalikan collection
        return view('owner.monitoringmember',['members' => $members]);
    }



    public function create()
    {
        # code...
        return view('kasir.Member');
    }

    public function store(Request $request)// nim,merek,ukuran_PK
    {
        # code...
        //dump($request);

        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nik' => 'required',

        ]);

        Member::create($validateData); //proses simpan ke database

        $request->session()->flash('pesan',"tambah data {$validateData['nik']} berhasil");

        return redirect()->route('Member.create');

        // echo $validateData['merek'];
        // dump($validateData);
    }

    public function show(Member $members)
    {
        # code...
        return view('kasir.detail-Member',['Member   '=>$members]);
    }

    public function edit(Member $members)
    {
        # code...
        return view('kasir.edit-Member',['Member' => $members]);
    }

    public function update(Request $request, Member $members)
    {
        # code...
        $validateData = $request->validate([
            'model' => 'required',
            'merek' => 'required',
            'nik' => 'required'

        ]);

        Member::where('id',$members->id)->update($validateData);
        return redirect()->route('kasir.show',['Member'=>$members])->with('pesan',"update Member {$validateData['merek']} berhasil");
    }

    public function delete(Member $Member)
    {
        # code...
        $Member->delete();


    }
    }
