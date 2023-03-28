@extends('_layouts.app')
@section('heading', 'Dashboard Pengaduan')
@section('content')
<div class="card">
    <h5 class="card-header">Masyarakat</h5>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal <br>Pengaduan</th>
                        <th>NIK</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th> 
                        <th>Tnaggal <br>Tanggapan</th>  
                        <th>Tanggapan</th>  
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->tgl_pengaduan }}</td>
                  <td>{{ $item->nik }}</td>
                  <td>{{ $item->isi_laporan }}</td>
                  <td>
                    <img src="{{ asset('assets/images/') . '/' . $item->foto }}" alt="">
                    <img style="width:50px; height:50px; oferflow:hidden;"
                    src="{{ asset('img/ppnull.jpg') }}" alt="">
                    @endif
                     </td>
                     <td>{{ $item->tanggapan->tgl_tanggapan ?? '-' }}</td>
                     <td>{{ $item->tanggapan->tanggapan ?? '-' }}</td>
                  <td>{{ $item->status }}</td>
                  <form action="{{ route('dashboardpengaduan.delete', $item->id_pengaduan) }}" method="post">
                    @csrf
                    @method('delete')
                    <td><button class="btn btn-danger me-2"><img src="{{ asset('img/delete.png') }}"
                                style="height:20px"></button>
                </form>
                @if ($item->status == 'selesai')
                    <button class="btn btn-info"><a href="{{ route('cetak', $item->id_pengaduan) }}"><img src="{{ asset('img/cetak.png') }}" style="height: 20px"></a></button>
                @endif
                @if ($item->status == 'proses')
                <button class="btn btn-success me-2"><a href="{{ route('tanggapandashboard', $item->id_pengaduan) }}"><img src="{{ asset('img/message.png') }}" style="height:20px"></a></button>
                @endif
                
                @if ($item->status == '0')
                <button class="btn btn-primary"><a href="{{ route('status', $item->id_pengaduan) }}"><img src="img/status.png" style="height:20px"></a></button>
                @endif
                </td>

                @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
