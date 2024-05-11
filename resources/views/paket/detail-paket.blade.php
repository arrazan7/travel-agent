<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab Tour & Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
  </head>
  <body>
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 fixed-top shadow-lg">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="{{ asset('images/logo.png') }}" alt="">
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#" class="nav-link text-dark">Paket</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-dark">Custom</a></li>
          <li class="nav-item"><a href="#" class="nav-link active text-white" aria-current="page">Login</a></li>
        </ul>
      </header>

      <div class="paket-img">
      
      </div>

      <section id="price">
        <div class="col-me-auto">
            <small>Harga mulai dari</small>
            <h4>Rp 150.000</h4>
        </div>
        <div class="col-me-auto">
            <button class="btn-book">Pesan Sekarang</button>
        </div>
      </section>

      <section id="timeline">
        <h3>Rangkaian Perjalanan Anda</h3>
        <div class="container timeline">
            <div class="row">
                <div class="col-auto">
                    <select name="day" id="day" class="form-control">
                        <option value="1">Hari ke: 1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="outer">
                        <div class="card card-wisata mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/images/image5.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 5class="card-title">Candi Prambanan</h6>
                                        <small>Buka 06.30 - 17.00 WIB</small>
                                        <br>
                                        <small>Durasi terbaik 2 jam</small>
                                        <br>
                                        <span>Yogyakarta</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col my-5 mx-5">
                            <span>14.7 km / 23 menit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <div class="d-flex flex-column flex-sm-row justify-content-center pt-4 my-4 footer-border">
        <p class="text-center">Copyright © 2024 LAB Tour & Travel</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var dropdownToggle = document.querySelector(".dropdown-toggle");
        var dropdownMenu = document.querySelector(".dropdown-menu");

        dropdownToggle.addEventListener("click", function(event) {
          event.stopPropagation();
          dropdownMenu.classList.toggle("show");
        });

        window.addEventListener("click", function(event) {
          if (!dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove("show");
          }
        });
      });
    </script>
  </body>
</html>