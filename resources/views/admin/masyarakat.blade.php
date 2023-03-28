@extends('_layouts.app')
@section('heading', 'Dashboard Masyarakat')
@section('content')
    <div class="card">
        <h5 class="card-header">Masyarakat</h5>
        <div class="card-body">
            <div class="text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nik</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>No Telepon</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $item)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $item->nik }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->username }}</td>
                      <td>{{ $item->telp }}</td>
                      <form action="{{ route('dashboardmasyarakat.delete', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <td><button class="btn btn-danger me-2"><img src="{{ asset('img/delete.png') }}"
                                    style="height:20px"></button>
                    </form>
                    @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
