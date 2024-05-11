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

      <div class="hero">
        <div class="col px-5">
          <div class="row px-5">
            <h2 class="px-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-5">
              <div class="search-box">
                <img src="/images/search.png" class="img-fluid">
                <form action="#">
                  <input type="text" placeholder="Cari paket / wisata" aria-label="Cari">
                </form>
              </div>
            </div>
          </div>
        </div>
      
      </div>

      <section>
        <div class="container mt-3">
          <div class="row">
            <div class="col-12 text-center">
              <h3>Paket Wisata</h3>
              <div class="container filter-wisata py-5 px-5">
                <h4 class="text-start">Filter Paket Wisata</h4>
                <div class="row text-start mt-3">
                  <div class="col-md-3 px-3">
                    <p>Destinasi</p>
                    <div class="dropdown">
                      <button class="dropdown-toggle" id="dropdownMenuButton">Temukan destinasi</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <label><input type="checkbox" value="Pilihan 1"> Option 1</label>
                        <label><input type="checkbox" value="Pilihan 2"> Option 2</label>
                        <label><input type="checkbox" value="Pilihan 3"> Option 3</label>
                        <div class="row px-3">
                          <div class="col">
                            <a href="">Hapus</a>
                          </div>
                          <div class="col">
                            <button class="btn">Terapkan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 px-3">
                    <p>Tema</p>
                    <div class="dropdown">
                      <button class="dropdown-toggle" id="dropdownMenuButton">Pilih tema wisata</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <label><input type="checkbox" value="Pilihan 1"> Option 1</label>
                        <label><input type="checkbox" value="Pilihan 2"> Option 2</label>
                        <label><input type="checkbox" value="Pilihan 3"> Option 3</label>
                        <div class="row px-3">
                          <div class="col">
                            <a href="">Hapus</a>
                          </div>
                          <div class="col">
                            <button class="btn">Terapkan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 px-3">
                    <p>Durasi</p>
                    <div class="dropdown">
                      <button class="dropdown-toggle" id="dropdownMenuButton">Durasi wisata</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <label><input type="checkbox" value="Pilihan 1"> Option 1</label>
                        <label><input type="checkbox" value="Pilihan 2"> Option 2</label>
                        <label><input type="checkbox" value="Pilihan 3"> Option 3</label>
                        <div class="row px-3">
                          <div class="col">
                            <a href="">Hapus</a>
                          </div>
                          <div class="col">
                            <button class="btn">Terapkan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 px-3">
                    <p>Harga</p>
                    <div class="dropdown">
                      <button class="dropdown-toggle" id="dropdownMenuButton">Rp 0 - Rp 120.000.000</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <label><input type="checkbox" value="Pilihan 1"> Option 1</label>
                        <label><input type="checkbox" value="Pilihan 2"> Option 2</label>
                        <label><input type="checkbox" value="Pilihan 3"> Option 3</label>
                        <div class="row px-3">
                          <div class="col">
                            <a href="">Hapus</a>
                          </div>
                          <div class="col">
                            <button class="btn">Terapkan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="paket-perjalanan">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <img src="/images/image1.png" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body"> 
                  <img src="/images/image2.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body"> 
                  <img src="/images/image3.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body"> 
                  <img src="/images/image4.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body"> 
                  <img src="/images/image5.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body"> 
                  <img src="/images/image6.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body"> 
                  <img src="/images/image7.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body"> 
                  <img src="/images/image8.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <a href="#" class="show-more">Tampilkan lebih banyak > </a>
          </div>
        </div>
      </section>

    <footer class="pt-5">
      <div class="row mx-5">
        <div class="col mx-5">
          <h5>LAB Tour & Travel</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

        <div class="col mx-5">
          <h5>Social Media</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><img src="/images/email.png" class="img-fluid me-2">lab.tourandtravel</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><img src="/images/instagram.png" class="img-fluid me-2">lab.tourandtravel</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><img src="/images/twitter.png" class="img-fluid me-2">lab.tourandtravel</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><img src="/images/facebook.png" class="img-fluid me-2">lab.tourandtravel</a></li>
          </ul>
        </div>

        <div class="col mx-5">
          <h5>Alamat</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, distinctio. In reprehenderit necessitatibus recusandae magnam magni distinctio est.</p>
        </div>
      </div>

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