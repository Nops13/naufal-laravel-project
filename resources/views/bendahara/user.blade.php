@extends('master/master')
@include('master/common/aside')

@section('pengumuman')

    <!-- /.content-header -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1>Hii User, {{  Auth::user()->name  }}</h1> --}}
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pengajuan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <br>
            <p>
                <b>Selamat datang di Website Sistem Informasi Pendaftaran Vaksinasi</b>
                <br><br>
                Disinilah tempat bagi masyarakat yang ingin mengajukan pendaftaran vaksinasi.
                Silahkan klik <b>Tombol Warna Biru</b> atau tulisan <b>Ajukan Beasiswa</b> untuk mengisi form sebagai
                persyaratan pengajuan pendaftaran vaksinasi. Sebelum mengklik <b>Tombol Warna Biru</b> atau tulisan
                <b>Pendaftaran Vaksinasi</b> terlebih dahulu kami akan memberitahu persyaratan atau berkas-berkas apa saja
                yang akan digunakan untuk mengajukan pendaftaran vaksinasi.
                <br><br>
                <b>PERSYARATAN :</b>
                <br><br>
                1. Usia 12 tahun - keatas.
                <br>
                2. Dalam Kondisi Sehat.
                <br>
                3. Bagi yang pernah terpapar bisa mengikuti vaksin setelah 3 bulan dinyatakan Negatif
                <br>
                4. Terbuka untuk Umum.
                <br><br>
                <b>BERKAS-BERKAS :</b>
                <br><br>
                1. Scan Kartu Tanda Penduduk
                <br>
                2. Scan Kartu Keluarga
                <br>
                3. Scan Surat Domisili (bila ada)
                <br>
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Pendaftaran Vaksinasi
            </button>

        </div>
    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

@endsection
