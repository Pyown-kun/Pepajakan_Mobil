<style>
    .bg-all {
        background-image: url('image/login.jpg');
    }
</style>

<!-- Menghubungkan dengan view template master -->
@extends('template')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman form')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="bg-all">
    <div class="bg-dark text-warning p-3">

        @if(Auth::user()->hak_akses=='all')
        <div class="container">
            <img src="{{url('image/home.jpg')}}" class="img-fluid" alt="...">
        </div>
        @endif


        @if(Auth::user()->hak_akses=='daftar')
        @include('form.465.pendaftaran465')
        @endif

        @if(Auth::user()->hak_akses=='bayar')
        @include('form.443.pembayaran443')
        @endif

        @if(Auth::user()->hak_akses=='panjang')
        @include('form.450.perpanjangan450')
        @endif

    </div>

    <footer class="footer mt-5 py-3 bg-dark text-warning ">
        <div class="container text-center">
            <span class="">@Pajak Kendaraaan Cute 2025</span>
        </div>
    </footer>
</div>
@endsection