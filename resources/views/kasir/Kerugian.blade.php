<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Informasi Pembelian Obat</title>
</head>

<body>
    @extends('layouts.app')


    @section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-white"><b> Data Kerusakan </b></h1>
                    <p class="text-white"> Data kerusakan dan kerugian
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('') }}</div>

                        <div class="card-body">
                            <form action="{{ route('Kerugian.store') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="tanggal_pengembalian"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pengembalian') }}</label>

                                    <div class="col-md-6">
                                        <input id="tanggal_pengembalian" type="date"
                                            class="form-control @error('tanggal_pengembalian') is-invalid @enderror"
                                            name="tanggal_pengembalian" value="{{ old('tanggal_pengembalian') }}">

                                        @error('tanggal_pengembalian')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="merek"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Merek') }}</label>

                                    <div class="col-md-6">
                                        <input id="merek" type="text"
                                            class="form-control @error('merek') is-invalid @enderror" name="merek"
                                            value="{{ old('merek') }}">

                                        @error('merek')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="type"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                                    <div class="col-md-6">
                                        <input id="type" type="text" class="form-control" name="type"
                                            value="{{ old('type') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nopolisi"
                                        class="col-md-4 col-form-label text-md-right">{{ __('No Polisi') }}</label>

                                    <div class="col-md-6">
                                        <input id="nopolisi" type="text" class="form-control" name="nopolisi"
                                            value="{{ old('nopolisi') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kerusakan"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Kerusakan') }}</label>

                                    <div class="col-md-6">
                                        <input id="kerusakan" type="text" class="form-control" name="kerusakan"
                                            value="{{ old('kerusakan') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ket"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                                    <div class="col-md-6">
                                        <input id="ket" type="text" class="form-control" name="ket"
                                            value="{{ old('ket') }}">
                                    </div>
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
