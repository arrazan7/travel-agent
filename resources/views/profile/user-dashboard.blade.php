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
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 fixed-top shadow-lg">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="{{ asset('images/logo.png') }}" alt="">
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#" class="nav-link text-dark">Paket</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-dark">Custom</a></li>
          <li class="nav-item"><button class="profile-pict">J</button></li>
        </ul>
      </header>

      <div class="container user-dashboard-container mx-5 px-5">
        <div class="row">
            <div class="col-md-3 d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
            <a href="#" class="nav-link link-dark">
                <button class="profile-pict">J</button>Joko
            </a>
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                <a href="#" class="nav-link link-dark">
                    Dashboard
                </a>
                </li>
                <li>
                <a href="#" class="nav-link link-dark">
                    Orders
                </a>
                </li>
            </ul>
            </div>
            <div class="col-md-9">
            <table>
                <th>
                Menunggu
                </th>
                <th>
                Disetujui
                </th>
                <th>
                Ditolak
                </th>
                <th>
                Dibayar
                </th>
                <th>
                Selesai
                </th>
                <tr colspan="5">
                    <td  colspan="5">
                        <div class="status-container">
                            <img src="/images/no-data.png" alt="">
                            <p class="text-neutral">Data tidak tersedia</p>
                        </div>
                    </td>
                </tr>
            </table>
            </div>
        </div>
        </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>