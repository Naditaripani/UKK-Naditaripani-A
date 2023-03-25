@extends('layouts.admin')

@section('title', 'Halaman Laporan')

@section('header', 'Laporan Pengaduan')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    Cari Berdasarkan Tanggal
                </div>
                <div class="card-body">
                    <form action="{{ route('laporan.getLaporan') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="from" class="form-control" placeholder="Tanggal Awal" 
                            onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                        </div>
                        <div class="form-group">
                            <input type="text" name="to" class="form-control" placeholder="Tanggal Akhir" 
                            onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                        </div>
                        <button type="submit" class="btn btn-purple" style="width: 100%">Cari Laporan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    Data Berdasarkan Tanggal
                    <div class="float-right">
                        @if ($pengaduan ?? '')
                        <a href="{{ route('laporan.cetakLaporan', ['from' => $from, 'to' => $to]) }}" 
                            class="btn btn-danger">EXPORT PDF</a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @if ($pengaduan ?? '')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Pelapor</th>
                                <th>Isi Laporan</th>
                                <th>Bukti</th>
                                <th>Nama Petugas</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduan as $k => $v)
                            <tr>
                                <td>{{ $k += 1 }}</td>
                                <td>{{ $v->tgl_pengaduan }}</td>
                                <td>{{ $v->user->nama }}</td>
                                <td>{{ $v->isi_laporan }}</td>
                                <td>
                                    @if($v->foto == null)
                                    -
                                    @else 
                                    <img src="{{ Storage::url($v->foto) }}" alt="Tidak memasukkan foto"  width="50px;"></td>
                                    @endif
                                <td>
                                    @if($v->tanggapan == null)
                                    -
                                    @else
                                    {{ $v->tanggapan->petugas->nama_petugas }}
                                    @endif
                                </td>
                                <td>{{ $v->status == '0' ? 'Pending' : ucwords($v->status) }}</td>
                            </tr>
                            @if ($v->status == '0')
                            <a href="#" class="badge badge-danger">Pending</a>
                        @elseif($v->status == 'proses')
                            <a href="#" class="badge badge-warning text-white">Proses</a>
                        @else
                            <a href="#" class="badge badge-succes">Selesai</a>
                        @endif
                            @endforeach
                        </tbody>
                    </table>
                        @else
                        <div class="text-center">
                            Tidak ada data
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>    
@endsection