<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
</head>
<body>
    <header class="d-flex flex-wrap px-5 py-3 mb-4 fixed-top shadow-lg">
        <h4>2 Hari di Yogyakarta</h4>
      </header>

      <div class="pilih-paket">
        <div class="process-timeline mb-4">
            test
        </div>
        <h5 class="mb-4 px-2">Tanggal Kunjungan & Jumlah Tiket</h5>
        <form action="#" method="post">
            @csrf
                <div class="container">
                    <div class="form-group">
                        <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                        <input type="date" name="tanggal_kunjungan" id="tanggal_kunjungan" class="form-control mb-3 border" placeholder="DDDDDDD">
                        <label for="tanggal_kunjungan">Transportasi</label>
                        <select name="transportasi" id="transportasi" class="form-control mb-3">
                            <option value="1">Pilih Transportasi</option>
                            <option value="2">Bus</option>
                            <option value="3">Kereta</option>
                            <option value="4">Pesawat</option>
                        </select>
                        <label for="penginapan">Penginapan</label>
                        <select name="transportasi" id="transportasi" class="form-control mb-3">
                            <option value="1">Pilih penginapan</option>
                            <option value="2">Bus</option>
                            <option value="3">Kereta</option>
                            <option value="4">Pesawat</option>
                        </select>
                        <label for="jumlah_tiket">Jumlah Tiket</label>
                        <div class="input-group">
                            <input type="number" name="jumlah_tiket" id="jumlah_tiket" class="form-control mb-3 border" placeholder="Pilih tanggal kunjungan" value="0">
                        </div>
                    </div>
                </div>
        </form>

        <div class="container total">
            <div class="col-me-auto">
                <p class="mx-2 mt-4">Jumlah Pembayaran <span class="total-price">Rp 150.000</span></p>
            </div>
            <div class="col-me-auto">
                <button class="btn-book">Pesan sekarang</button>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>