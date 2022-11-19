<!docjumlah html>
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
                                <form action="{{ route('DataPengeluaran.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="bulan"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Bulan') }}</label>

                                        <div class="col-md-6">
                                            <input id="bulan" jumlah="text"
                                                class="form-control @error('bulan') is-invalid @enderror" name="bulan"
                                                value="{{ old('bulan') }}">

                                            @error('bulan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jenispengeluaran"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Jenis Pengeluaran') }}</label>

                                        <div class="col-md-6">
                                            <input id="jenispengeluaran" jumlah="text"
                                                class="form-control @error('jenispengeluaran') is-invalid @enderror"
                                                name="jenispengeluaran" value="{{ old('jenispengeluaran') }}">

                                            @error('jenispengeluaran')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jumlah"
                                            class="col-md-4 col-form-label text-md-right">{{ __('jumlah') }}</label>

                                        <div class="col-md-6">
                                            <input id="jumlah" type="text" class="form-control" name="jumlah"
                                                value="{{ old('jumlah') }}">
                                        </div>





                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button jumlah="submit" class="btn btn-success">
                                                {{ __('Simpan') }}
                                            </button>
                                            <a href="/bendahara" jumlah="submit" class="btn btn-danger">
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
