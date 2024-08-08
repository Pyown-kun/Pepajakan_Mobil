<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .bg-all {
        background-image: url('image/login.jpg');
    }
</style>

<div class="bg-all">
    <div class="container bg-dark p-3">
        <div class="row" style="padding-top:10px;width:50%;margin:auto">
            <div class="col-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <form action="{{url('action_login')}}" method="POST" class="form-control mt-3 mb-2 bg-dark text-warning">
                    <div class="col-12 " style="text-align:center">
                        <h3><span id="typing">WELCOME</span></h3>
                    </div>
                    <img src="{{url('image/login.jpg')}}" class="img-fluid mb-2 mt-3" alt="...">
                    {{ csrf_field() }}
                    <div class="text-center fs-4">
                        <label for="" class="">Username</label>
                        <input type="text" class="form-control" name="email_text" required=""><br>
                        <label for="" class="">Password</label><input type="password" class="form-control" name="password_text" required>
                    </div><br>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" class="btn btn-outline-warning mb-3" value="login">
                    </div>
                </form>

                <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

                <script>
                    var typed = new Typed('#typing', {
                        strings: ['WELCOME', 'SELAMAT DATANG', 'WELCOME'],
                        typeSpeed: 50,
                        backSpeed: 50,
                        looped: true
                    })
                </script>
            </div>
        </div>
    </div>
</div>