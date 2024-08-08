<!-- Menghubungkan dengan view template master -->
@extends('template')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman form')

@section('konten')

<div class="container text-warning bg-dark p-3 rounded">
    <h1 class="text-center">Perubahan Pangkat Karyawan</h1>

    <div class="container m-2">
        <img src="{{url('image/3.jpg')}}" class="img-fluid rounded mx-auto d-block" alt="...">
    </div>

    <table class="table table-bordered ">
        <thead class="table-warning">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Plat Nomor</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Pembayaran</th>
                <th>Total Harga</th>
                <th>Hapus</th>
            </tr>
        </thead>

        <tbody class="table-light table-group-divider">
            @php
            $no = 1;
            @endphp
            @foreach($pembayaran as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->plat_nomor }}</td>
                <td>{{ $data->jenis_kendaran }}</td>
                <td>{{ $data->tanggal_pembayaran }}</td>
                <td>RP {{ $data->total_harga }}</td>
                <td>
                    <form action="{{ route('hapus443', $data->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pembayaran->links() }}

</div>
@endsection