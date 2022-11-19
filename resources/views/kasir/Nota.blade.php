<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <title>Detail Nota</title>
</head>

<body>
    <h1>Detail data Nota -> {{ $transaksi_penyewaan->nopolisi }}</h1>

    @if (session()->has('pesan'))
        <div class="alert alert-success">
            {{ session()->get('pesan') }}
        </div>
    @endif

    <div class="container">
        <!-- Content here -->
        <table class="table">
            <tbody>
                <tr>
                    <th>Nomer Nota</th>
                    <td>{{ $transaksi_penyewaan->id }}</td>
                </tr>
                <tr>
                    <th>Tanggal Sewa</th>
                    <td>{{ $transaksi_penyewaan->nama }}</td>
                </tr>
                <tr>
                    <th>Merek</th>
                    <td>{{ $transaksi_penyewaan->tempat_lahir }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>{{ $transaksi_penyewaan->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Nomer Polisi</th>
                    <td>{{ $transaksi_penyewaan->fakultas }}</td>
                </tr>
                <tr>
                    <th>Uang Jaminan</th>
                    <td>{{ $transaksi_penyewaan->jurusan }}</td>
                </tr>

                <tr>
                    <td> <a href="/transaksi_penyewaan/post-cetak" class="btn btn-primary" target="_blank">CETAK
                            PDF</a></td>
                </tr>

            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
