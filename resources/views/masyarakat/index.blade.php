@extends('_partials.navbar');
@section('content')
    <div class="container-xl mt-3">
        <h2>Laporan</h2>
        <form id="formAuthentication" class="mb-3" action="{{ route('laporan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nik" class="form-label">nik</label>
                <input
                  type="text"
                  class="form-control"
                  id="nik"
                  name="nik"
                  value="{{ Auth::guard('masyarakat')->user()->nik }}"
                  autofocus
                />
              </div>
            <div class="mb-3">
                <label for="html5-date-input" class="col col-form-label">Tanggal</label>
                <div class="col">
                  <input class="form-control" type="date" value="" id="html5-date-input" name="tgl_pengaduan"/>
                </div>
              </div>
              <div class="mb-3">
                <label for="nik" class="form-label">Isi Laporan</label>
                <input
                  type="text"
                  class="form-control"
                  id="nik"
                  name="nik"
                  placeholder="Isi laporan"
                  autofocus
                />
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="foto"/>
              </div>
            <button class="btn btn-primary d-grid w-100" type="submit">Kirim</button>
          </form>
    </div>
@endsection
