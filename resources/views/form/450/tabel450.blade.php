<!-- Menghubungkan dengan view template master -->
@extends('template')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman form')

@section('konten')

<div class="container text-warning bg-dark p-3 rounded">
    <h1 class="text-center">Data Perpanjangan Pajak</h1>

    <div class="container m-2">
        <img src="{{url('image/2.jpg')}}" class="img-fluid rounded mx-auto d-block" alt="...">
    </div>

    <table class="table table-bordered ">
        <thead class="table-warning">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Lama Perpanjangan</th>
                <th>Tanggal</th>
                <th>Bunga</th>
                <th>Hapus</th>
            </tr>
        </thead>

        <tbody class="table-light table-group-divider">
            @php
            $no = 1;
            @endphp
            @foreach($perpanjangan as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->lama_perpanjangan }} Hari</td>
                <td>{{ $data->tanggal }}</td>
                <td>{{ $data->bunga }}%</td>
                <td>
                    <form action="{{ route('hapus450', $data->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $perpanjangan->links() }}

</div>
@endsection