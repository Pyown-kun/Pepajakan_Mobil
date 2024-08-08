<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="container">

    <form action="tambah_pembayaran" method="post" class="mt-3">
        @csrf
        <h1 class="text-center">Pembayaran Pajak</h1>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Nama</label>
            <input type="text" class="form-control bg-dark text-warning fs-5" name="nama">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Plat Nomor</label>
            <input type="text" class="form-control bg-dark text-warning fs-5" name="plat_nomor">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label class="text-warning fs-5">Jenis Kendaraan</label>
            <select class="form-control bg-dark text-warning fs-5" id="floatingInput" name="jenis_kendaran" id="">
                <option value="Kecil">Kecil</option>
                <option value="Sedang">Sedang</option>
                <option value="Besar">Besar</option>
            </select>
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Tanggal Pembayaran</label>
            <input type="date" class="form-control bg-dark text-warning fs-5" name="tanggal_pembayaran">
        </div>
        <div class="bg-dark text-warning fs-5 form-control mb-3">
            <label>Total Bayar</label>
            <input type="number" class="form-control bg-dark text-warning fs-5" name="total_harga">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" class="btn btn-outline-warning" value="Kirim">
        </div>
    </form>
</div>