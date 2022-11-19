<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
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
        <h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
            <h6><a target="_blank"
                    href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a>
        </h5>
    </center>

    <table class='table table-bordered'>
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
                    {{-- <td><a
                                                            href="{{ route('MonitoringAyam.index', ['map' => $transaksi_penyewaan->id]) }}">{{ $transaksi_penyewaan->model }}</a>
                                                    </td> --}}
                    <td>{{ $transaksi_penyewaan->tanggal_sewa }}</td>
                    <td>{{ $transaksi_penyewaan->merek }}</td>
                    <td>{{ $transaksi_penyewaan->type }}</td>
                    <td>{{ $transaksi_penyewaan->nopolisi }}</td>
                    <td>{{ $transaksi_penyewaan->uang_jaminan }}</td>
                    {{-- <td>{{ $transaksi_penyewaang->bahan }}</td>
                                                    <td>Rp. {{ number_format($kursigaming->harga, 2) }}</td> --}}
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>

</body>

</html>
