@extends('master/master')
@include('master/common/aside')

@section('pengumuman')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hi, {{  Auth::user()->name  }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Pengumuman</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <table class="table table-hover">
          <!-- /.col -->
          <div class="col-md-12">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped text-center">
                  <thead class="thead-dark">
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>NIK</th>
                      <th>Nama Lengkap</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat Tinggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>35151xxxxxxxxxxx</td>
                      <td>Muhammad Safroni</td>
                      <td>Laki-Laki</td>
                      <td>Bebekan Pereng Rt.12 Rw.04</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>35151xxxxxxxxxxx</td>
                      <td>Muhammad Safroni</td>
                      <td>Laki-Laki</td>
                      <td>Bebekan Pereng Rt.12 Rw.04</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>35151xxxxxxxxxxx</td>
                      <td>Muhammad Safroni</td>
                      <td>Laki-Laki</td>
                      <td>Bebekan Pereng Rt.12 Rw.04</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </table>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection