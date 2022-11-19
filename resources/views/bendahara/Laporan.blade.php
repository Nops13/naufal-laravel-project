<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laporan Pengeluaran</title>
</head>

<body>

    <body>
        @extends('layouts.app')


        @section('content')


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h1 class="text-white"><b> Laporan Pengeluaran </b></h1>
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
                                                <th scope="col">Tanggal Kembali</th>
                                                <th scope="col">Pemasukan Sewa</th>
                                                <th scope="col">Bulan</th>
                                                <th scope="col">Jumlah Pengeluaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $k => $item)
                                                <tr>
                                                    <th scope="row">{{ $item->id }}</th>
                                                    {{-- <td><a --}}
                                                    {{-- href="{{ route('TransaksiPenyewaan.show', ['item' => $item->id]) }}">{{ $item->tanggal_sewa }}</a> --}}
                                                    {{-- </td> --}}
                                                    <td>{{ $item->tanggal_pengembalian }}</td>
                                                    <td>{{ $item->harga_sewa }}</td>
                                                    <td>{{ $item->bulan }}</td>
                                                    <td>{{ $item->jumlah }}</td>
                                                    {{-- <td>{{ $itemg->bahan }}</td>
                                                    <td>Rp. {{ number_format($kursigaming->harga, 2) }}</td> --}}
                                                </tr>
                                            @empty
                                                <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <div class="panel">
                                        <div id="chartLaporan"></div>
                                    </div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <div class="col-md-7 offset-md-3">
                                                <a href="bendahara" class="btn btn-primary">
                                                    {{ __('kembali') }}
                                                </a>
                                            </div>
                                            <a href="/laporan/post-cetak" class="btn btn-primary" target="_blank">CETAK
                                                PDF</a>
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

                @section('footer')
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script>
                        Highcharts.chart('chartLaporan', {
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: 'Laporan Keuangan Bulanan'
                            },

                            xAxis: {
                                categories: {!! json_encode($categories) !!},
                                crosshair: true
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Jumlah (Rp)'
                                }
                            },
                            tooltip: {
                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                                footerFormat: '</table>',
                                shared: true,
                                useHTML: true
                            },
                            plotOptions: {
                                column: {
                                    pointPadding: 0.2,
                                    borderWidth: 0
                                }
                            },
                            series: [{
                                name: 'Pemasukan Sewa',
                                data: {!! json_encode($sewa1) !!}

                            }, {
                                name: 'Pengeluaran',
                                data: {!! json_encode($sewa) !!}

                            }]
                        });
                    </script>
                @stop


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
