@extends('_partials.navbar')
@section('content')
    <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="">
                @if (session()->has('sukses'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('sukses') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
            </div>
            <h5 class="card-header">Silahkan Masukkan laporan anda!</h5>
            <div class="card-body">
                <div class="">
                    <label for="disabledTextInput" class="form-label"><strong>Nik</strong></label>
                    <input type="number" id="disabledTextInput" name="nik" class="form-control" value="{{ Auth::guard('masyarakat')->user()->nik }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"><strong>Tanggal</strong></label>
                    <input type="date" name="tgl_pengaduan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"><strong>Isi Laporan</strong></label>
                    <textarea name="isi_laporan" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label"><strong>Foto</strong></label>
                    <input class="form-control" type="file" id="formFile" name="foto" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
