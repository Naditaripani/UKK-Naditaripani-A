{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Laporan Pengaduan</title>
</head>
<body>
    <div class="text-center">
        <h5>Laporan Pengaduan Masyarakat</h5>
        <h6>SMK Wikrama Bogor</h6>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pelapor</th>'
                    <th>No. telp</th>
                    <th>Isi Laporan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $k => $v)
                    <tr>
                        <td>{{ $k += 1 }}</td>
                        <td>{{ $v->tgl_pengaduan }}</td>
                        <td>{{ $v->user->nama }}</td>
                        <td>{{ $v->user->telp }}</td>
                        <td>{{ $v->isi_laporan }}</td>
                        <td>{{ $v->status == '0' ? 'Pending' : ucwords($v->status) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laporan Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <style>
        @page { size: A4 }
      
        h1 {
            font-weight: bold;
            font-size: 20pt;
            text-align: center;
        }
      
        table {
            border-collapse: collapse;
            width: 80%;
        }
      
        .table th {
            padding: 10px 10px;
            border:1px solid #000000;
            text-align: center;
        }
      
        .table td {
            padding: 5px 5px;
            border:1px solid #000000;
        }
      
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body class="A4">
    <section class="sheet padding-10mm">
        <center>
            <h2>Laporan Pengaduan Masyarakat</h2>
            <h3>SMK Wikrama Bogor</h3>
        </center>
  
        <table class="table" align="center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pelapor</th>'
                    <th>Isi Laporan</th>
                    <th>Nama Petugas</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody align="center">
                @foreach ($pengaduan as $k => $v)
                    <tr>
                        <td>{{ $k += 1 }}</td>
                        <td>{{ $v->tgl_pengaduan }}</td>
                        <td>{{ $v->user->nama }}</td>
                        <td>{{ $v->isi_laporan }}</td>
                        <td>
                            @if($v->tanggapan == null)
                            -
                            @else
                            {{ $v->tanggapan->petugas->nama_petugas }}
                            @endif
                        </td>
                        <td>{{ $v->status == '0' ? 'Pending' : ucwords($v->status) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>