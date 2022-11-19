<html>

<head>
    <title>Laporan Bulanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Keuangan Bulanan Sewa Mobil</h4>
            <h6>Rental Mobil.Id</h6>
        </h5>
    </center>

    <table class='table table-bordered'>
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
    @section('footer')
        {{-- <script src="https://code.highcharts.com/highcharts.js"></script>
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
        </script> --}}
    @stop


</body>


</html>
