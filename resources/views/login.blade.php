<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 fixed-top">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="{{ asset('images/logo.png') }}" alt="">
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#" class="nav-link text-white">Paket</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Custom</a></li>
          <li class="nav-item"><a href="#" class="nav-link active text-white btn-login" aria-current="page">Login</a></li>
        </ul>
      </header>

      
    <div class="hero">
    <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card card-login">
          <div class="card-body mt-5">
            <h5>Masuk Akun</h5>
            <form class="mt-5">
              <div class="mb-3">
                <input type="text" class="form-control input-field" id="username" placeholder="Email / Username">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control input-field" id="password" placeholder="Password">
              </div>
              <div class="row">
                <div class="col text-start">
                    <input type="checkbox"> Ingat saya
                </div>
                <div class="col text-end">
                    <a href="#" class="text-blue-primary">Lupa Password?</a>
                </div>
                </div>
              <button type="submit" class="btn btn-primary w-100 mt-3">Masuk</button>
              <p class="mt-3 text-neutral">atau</p>
            <button  class="btn btn-google"><a href="#" class="text-blue-primary"><img src="{{ asset('images/google.png') }}" alt=""> Masuk dengan Google</a></button>
            <p class="text-base-black mt-3">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-primary">Daftar sekarang</a> </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
    
</body>
</html>