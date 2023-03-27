@extends('_layouts.app')
@section('heading', 'Laporan Masyarakat');
@section('content')
    <div class="card">
        <h5 class="card-header">Bordered Table</h5>
        <div class="card-body">
            <div class="text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NO Telp</th>
                            <th scope="col">Username</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->telp }}</td>
                            <td>{{ $item->username }}</td>
                            <form action="{{ route('akunmasyarakatdestroy', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <td><button class="btn btn-danger" ><img src="{{ asset('img/delete.png') }}" style="height:20px"></button></td>
                              </tr>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


