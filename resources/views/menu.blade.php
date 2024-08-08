<nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
    <div class="container-fluid">
        <a class="navbar-brand navbar-text text-warning" href="{{url('/')}}">Pajak Kendaraaan Cute</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if(Auth::user()->hak_akses=='all')
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                <li class="nav-item ">
                    <a class="nav-link active navbar-text text-warning " aria-current="page" href="{{url('dashboard')}}">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-warning" href="{{url('tentang')}}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{url('kontak')}}">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tabel
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-warning" href="{{url('tabel465')}}">Pendaftaarn</a></li>
                        <li><a class="dropdown-item text-warning" href="{{url('tabel450')}}">Perpanjangan</a></li>
                        <li><a class="dropdown-item text-warning" href="{{url('tabel443')}}">Pembayaran</a></li>
                    </ul>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>