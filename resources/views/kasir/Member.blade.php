<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Informasi Pemberian Obat</title>
</head>

<body>
    @extends('layouts.app')


    @section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-white"><b> Pendataan Member </b></h1>
                    <p class="text-white"> Pendataan Member baru untuk jasa Rental Mobil.Id dengan mengisi data yang
                        tertera.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('') }}</div>

                        <div class="card-body">
                            <form action="{{ route('Member.store') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="nama"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                    <div class="col-md-6">
                                        <input id="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror" name="nama"
                                            value="{{ old('nama') }}">

                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                                    <div class="col-md-6">
                                        <input id="alamat" type="text"
                                            class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                            value="{{ old('alamat') }}">

                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nik"
                                        class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>

                                    <div class="col-md-6">
                                        <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                                            name="nik" value="{{ old('nik') }}">

                                        @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Simpan') }}
                                        </button>
                                        <a href="/kasir" type="submit" class="btn btn-danger">
                                            {{ __('Cancel') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>



</html>
