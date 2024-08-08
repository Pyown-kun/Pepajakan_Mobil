<!-- Menghubungkan dengan view template master -->
@extends('template')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman form')

@section('konten')

<div class="container text-warning bg-dark p-3 rounded">

    <h1 class="text-center ">Data Member Terdaftar</h1>

    <div class="container m-2">
        <img src="{{url('image/1.jpg')}}" class="img-fluid rounded mx-auto d-block" alt="...">
    </div>

    <table class="table table-bordered table-warning">
        <thead class="table-warning">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Hapus</th>
            </tr>
        </thead>

        <tbody class="table-light table-group-divider">
            @php
            $no = 1;
            @endphp
            @foreach($pendaftaran as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nik }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->tempat_lahir }}</td>
                <td>{{ $data->tanggal_lahir }}</td>
                <td>
                    <form action="{{ route('hapus465', $data->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pendaftaran->links() }}

</div>
@endsection