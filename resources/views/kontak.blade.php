<!-- Menghubungkan dengan view template master -->
@extends('template')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman Kontak')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="bg-dark text-warning p-3">
    <h1 class="text-center">Contact Us</h1>
    <div class="container">

        <div class="row">
            <div class="col-3 d-none d-md-block">
                <img src="{{url('image/contact.jpg')}}" class="img-fluid rounded mb-3" alt="...">
            </div>
            <div class="col-9 d-flex align-items-center">
                <ul class="list-group list-group-dark text-warning fs-3">
                    <li class="list-group">Email : pembayaranPajakCute@gmail.com</li>
                    <li class="list-group">No Telepon : 0886734344</li>
                    <li class="list-group">Alamat : Gotham City</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection