<!-- Menghubungkan dengan view template master -->
@extends('template')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman Tentang')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="bg-dark">
    <div class="container text-warning pb-3 pt-2">
        <h1 class="text-center">About</h1>
        <img src="{{url('image/about.jpg')}}" class="img-fluid mb-2 mt-3" alt="...">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum, distinctio fugit, autem accusamus iusto laudantium quia, sunt ad magnam est. Fugiat doloribus dolorum, quod repellendus ab nostrum esse labore!
            Iure tenetur, ipsa libero quis, tempora error provident obcaecati similique dolor a aspernatur mollitia labore cum totam aut rerum. Consectetur debitis eveniet enim? Voluptate suscipit adipisci quidem ad modi laborum.
            Mollitia a veritatis magnam vitae harum quam laborum quod optio, officiis, illo asperiores quisquam repellat, debitis odio error molestiae iusto distinctio animi! Quis error facere nulla aperiam numquam sed ab!</p>
    </div>
</div>
@endsection