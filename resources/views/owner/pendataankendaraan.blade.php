<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pendataan Kendaraan Inventaris</title>
</head>

<body>

    <body>
        @extends('layouts.app')


        @section('content')


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Pemberian pakan') }}
                        </button>
                        <button type="submit" class="btn btn-success">
                            {{ __('Pembelian pakan') }}
                        </button>
                    </div> --}}
                        <h1 class="text-white"><b> Pendataan Kendaraan Inventaris </b></h1>
                        <p class="text-white"> Pendataan Kendaraan Inventaris adalah form yang harus diisi sesuai kondisi
                            yang ada
                            di lapangan seperti
                            tanggal dan jumlah ayam yang masuk setiap periode
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('') }}</div>
                            <div class="card-body">
                                <form action="{{ route('PendataanKendaraan.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="merek"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Merek') }}</label>

                                        <div class="col-md-6">
                                            <input id="merek" type="merek"
                                                class="form-control @error('merek') is-invalid @enderror" name="merek"
                                                value="{{ old('merek') }}" required autocomplete="merek" autofocus>

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
                                            <input id="type" type="type"
                                                class="form-control @error('type') is-invalid @enderror" name="type"
                                                value="{{ old('type') }}">

                                            @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nopolisi"
                                            class="col-md-4 col-form-label text-md-right">{{ __('No Polisi') }}</label>

                                        <div class="col-md-6">
                                            <input id="nopolisi" type="nopolisi"
                                                class="form-control @error('nopolisi') is-invalid @enderror" name="nopolisi"
                                                value="{{ old('nopolisi') }}">

                                            @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tahun_perakitan"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Tahun Perakitan') }}</label>

                                        <div class="col-md-6">
                                            <input id="tahun_perakitan" type="tahun_perakitan"
                                                class="form-control @error('tahun_perakitan') is-invalid @enderror"
                                                name="tahun_perakitan" value="{{ old('tahun_perakitan') }}">

                                            @error('tahun_perakitan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="bahan_bakar"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Bahan Bakar') }}</label>

                                        <div class="col-md-6">
                                            <select id="bahan_bakar" type="bahan_bakar"
                                                class="form-select @error('bahan_bakar') is-invalid @enderror"
                                                name="bahan_bakar" value="{{ old('bahan_bakar') }}">
                                                <option selected>Choose...</option>
                                                <option value="bensin">Bensin</option>
                                                <option value="solar">Solar</option>

                                                @error('bahan_bakar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Waktu Pemberian') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" merek="password"
                                                required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Pemberian Pakan') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                merek="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div> --}}

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-success">
                                                {{ __('Simpan') }}
                                            </button>
                                            <a href="/owner" type="submit" class="btn btn-danger">
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
            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
                                                                                                                                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
                                                                                                                                                                                                                                                                                                crossorigin="anonymous">
                                                                                                                                                </script>
                                                                                                                                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
                                                                                                                                                                                                                                                                                                crossorigin="anonymous">
                                                                                                                                                </script>
                                                                                                                                                -->
        @endsection
    </body>

</html>
