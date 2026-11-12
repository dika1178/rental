<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rental') - Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 bg-dark text-white min-vh-100 p-4">
                <h4>Rental</h4>
                <hr>
                    <a href="/dashboard" class="text-white d-block mb-3">Dashboard</a>
                    <a href="/kendaraan" class="text-white d-block mb-3">Kendaraan</a>
                    <a href="/pelanggan" class="text-white d-block mb-3">Pelanggan</a>
                    <a href="/transaksi" class="text-white d-block mb-3">Transaksi</a>
                    <a href="/pengembalian" class="text-white d-block mb-3">Pengembalian</a>
                </hr>
                <form method="POST" action="/logout">
                    @csrf
                    <hr>
                        <hr>
                            <button type="submit" class="btn btn-link text-white  p-0 text-decoration-none">Logout</button>
                        </hr>
                    </hr>
                </form>
            </div>

            <div class="col-md-10 p-4">
                @yield('content')
            </div>

        </div>
    </div>

</body>
</html>
