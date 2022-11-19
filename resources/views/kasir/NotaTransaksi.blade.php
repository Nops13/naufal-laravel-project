<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Nota Transaksi</title>
</head>

<body>

    <body>
        @extends('layouts.app')


        @section('content')


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h1 class="text-white"><b> Monitoring Kualitas Ayam </b></h1>
                        <p class="text-white"> Data dari hasil inputan Kualitas Ayam yang ttelah diisi oleh peternak
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <div class="d-md-flex justify-content-md-end">
                                        <div class="form-inline mb-3">
                                            <form class="search-form">
                                                <input class="form-control" type="text" placeholder="Search ..."
                                                    aria-label="Search">
                                            </form>

                                        </div>
                                    </div>

                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tanggal Sewa</th>
                                                <th scope="col">Merek</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">No Polisi</th>
                                                <th scope="col">Uang Jaminan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($transaksi_penyewaans as $transaksi_penyewaan)
                                                <tr>
                                                    <th scope="row">{{ $transaksi_penyewaan->id }}</th>
                                                    <td><a
                                                            href="{{ route('TransaksiPenyewaan.show', ['transaksi_penyewaan' => $transaksi_penyewaan->id]) }}">{{ $transaksi_penyewaan->tanggal_sewa }}</a>
                                                    </td>
                                                    <td>{{ $transaksi_penyewaan->merek }}</td>
                                                    <td>{{ $transaksi_penyewaan->type }}</td>
                                                    <td>{{ $transaksi_penyewaan->nopolisi }}</td>
                                                    <td>{{ $transaksi_penyewaan->uang_jaminan }}</td>
                                                    {{-- <td>{{ $transaksi_penyewaang->bahan }}</td>
                                                    <td>Rp. {{ number_format($kursigaming->harga, 2) }}</td> --}}
                                                </tr>
                                            @empty
                                                <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <div class="col-md-7 offset-md-3">
                                                <a href="kasir" class="btn btn-primary">
                                                    {{ __('kembali') }}
                                                </a>
                                            </div>
                                    </nav>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                                crossorigin="anonymous">
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
