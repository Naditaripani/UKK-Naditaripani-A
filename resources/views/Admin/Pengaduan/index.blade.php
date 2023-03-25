@extends('layouts.admin')

@section('title', 'Halaman Pengaduan')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Pengaduan')

@section('content')
    <table id="pengaduanTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Pelapor</th>
                <th>Isi Laporan</th>
                <th>Akses</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $k => $v)
                <tr>
                    <td>{{ $k += 1 }}</td>
                    <td>{{ $v->tgl_pengaduan }}</td>
                    <td>{{ $v->user->nama }}</td>
                    <td>{{ $v->isi_laporan }}</td>
                    <td>@if($v->tanggapan != null)
                            {{ $v->tanggapan->akses }}
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if ($v->status == '0')
                            <a href="#" class="badge badge-danger">Pending</a>
                        @elseif($v->status == 'proses')
                            <a href="#" class="badge badge-warning text-white">Proses</a>
                        @else
                            <a href="#" class="badge badge-succes">Selesai</a>
                        @endif
                    </td>
                    <td><a href="{{ route('pengaduan.show', $v->id_pengaduan) }}" style="text-decoration: underline">Lihat</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection