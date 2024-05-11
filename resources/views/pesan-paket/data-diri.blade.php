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
        <h5 class="mb-4 px-2">Data Diri Peserta 1</h5>
        <form action="#" method="post">
            @csrf
                <div class="container">
                    <div class="form-group">
                        <label for="asal_negara">Pilih asal negara</label>
                            <select name="asal_negara" id="asal_negara" class="form-control mb-3">
                                <option value="1">--Pilih--</option>
                                <option value="2">Japan</option>
                                <option value="3">Korea</option>
                                <option value="4">China</option>
                            </select>
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control mb-3 border" placeholder="">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control mb-3 border" placeholder="">
                        <label for="nohp">No. HP</label>
                        <input type="text" name="nohp" id="nohp" class="form-control mb-3 border" placeholder="">
                        <label for="note">Catatan Khusus</label>
                        <textarea rows="7" type="text" name="note" id="note" class="form-control mb-3 border" placeholder=""></textarea>
                    </div>
                </div>
        </form>

        <h5 class="mb-4 px-2 mt-5">Data Diri Peserta 2</h5>
        <form action="#" method="post">
            @csrf
                <div class="container">
                    <div class="form-group">
                        <label for="asal_negara">Pilih asal negara</label>
                            <select name="asal_negara" id="asal_negara" class="form-control mb-3">
                                <option value="1">--Pilih--</option>
                                <option value="2">Japan</option>
                                <option value="3">Korea</option>
                                <option value="4">China</option>
                            </select>
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control mb-3 border" placeholder="">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control mb-3 border" placeholder="">
                        <label for="nohp">No. HP</label>
                        <input type="text" name="nohp" id="nohp" class="form-control mb-3 border" placeholder="">
                        <label for="note">Catatan Khusus</label>
                        <textarea rows="7" type="text" name="note" id="note" class="form-control mb-3 border" placeholder=""></textarea>
                    </div>
                </div>
        </form>

        <div class="col justify-content-center align-items-center">
            <button class="btn-checkout ">Checkout</button>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>