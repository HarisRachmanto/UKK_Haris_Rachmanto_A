@extends('_layouts.app')
@section('heading', 'Laporan Masyarakat');
@section('content')
    <div class="card">
        <h5 class="card-header">Bordered Table</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Tanggal Pengaduan</th>
                            <th scope="col">Isi Laporan</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggapan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->tgl_pengaduan }}</td>
                            <td>{{ $item->isi_laporan }}</td>
                            <td>@if ($item->foto)
                                <img style="width:50px; height:50px; ofervlow:hidden;" src="{{ asset('storage/' . $item->foto) }}"
                                    alt=" ">
                            @else
                                <img style="width:50px; height:50px; ofervlow:hidden;" src="{{ asset('img/ppnull.jpg') }}"
                                    alt="">
                            @endif</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->tanggapan }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
