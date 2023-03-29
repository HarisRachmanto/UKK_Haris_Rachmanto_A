@extends('_partials.navbar')
@section('content')
<div class="card">
    <h5 class="card-header">Daftar Pengaduan Masyarakat</h5>
    <div class="card-body">
        <div class="text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Laporan</th>
                      <th>akses</th>
                      <th>Foto</th>
                      <th>Tanggapan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pengaduans as $item)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->isi_laporan }}</td>
                      <td>{{ $item->akses }}</td>
                      <td>
                        @if ($item->foto)
                        <img style="width:50px; height:50px; oferflow:hidden;"
                            src="{{ asset('storage/' . $item->foto) }}" alt=" ">
                        @else
                        <img style="width:50px; height:50px; oferflow:hidden;"
                        src="{{ asset('img/ppnull.jpg') }}" alt="">
                        @endif
                         </td>
                        <td>{{ $item->tanggapan->tanggapan ?? '-' }}</td>
                    @endforeach

                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
