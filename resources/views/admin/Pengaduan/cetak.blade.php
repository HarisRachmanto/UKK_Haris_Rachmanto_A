<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #f2f2f2;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pengaduan</th>
                    <th>NIK</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                    <th>Tanggapan</th>
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
</body>

</html>
