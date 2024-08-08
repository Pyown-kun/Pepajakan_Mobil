<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="container">

    <form action="tambah_pendaftaran" method="post" class="mt-3">
        @csrf
        <h1 class="text-center">Pendaftaran Member</h1>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Nama</label>
            <input type="text" class="form-control bg-dark text-warning fs-5" name="nama">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <input type="number" class="form-control bg-dark text-warning fs-5" name="nik">
            <label>NIK</label>
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Alamat</label>
            <input type="text" class="form-control bg-dark text-warning fs-5" name="alamat">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control bg-dark text-warning fs-5" name="tempat_lahir">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control bg-dark text-warning fs-5" name="tanggal_lahir">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" class="btn btn-outline-warning" value="Kirim">
        </div>
    </form>
</div>