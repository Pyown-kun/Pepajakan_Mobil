<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="container ">

    <form action="tambah_perpanjangan" method="post" class="mt-3">
        @csrf
        <h1 class="text-center">Perpanjangan Pajak</h1>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Nama</label>
            <input type="text" class="form-control bg-dark text-warning fs-5" name="nama">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Alamat</label>
            <input type="text" class="form-control bg-dark text-warning fs-5" name="alamat">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Lama Perpanjangan</label>
            <input type="number" class="form-control bg-dark text-warning fs-5" name="lama_perpanjangan">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Tanggal</label>
            <input type="date" class="form-control bg-dark text-warning fs-5" name="tanggal">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Bunga</label>
            <input type="number" class="form-control bg-dark text-warning fs-5" name="bunga">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" class="btn btn-outline-warning" value="Kirim">
        </div>
    </form>
</div>