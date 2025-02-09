<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel to Komodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <x-header></x-header>
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Open Trip 3 Hari 2 Malam</h2>
            <p class="text-center text-muted mb-5">Pilih kapal, berangkat setiap hari Jumat dan Senin</p>
            <x-kategori></x-kategori>
            <div class="row g-4 mt-4">
                @foreach ($boats as $boat)
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset($boat->image) }}" class="card-img-top" alt="{{ $boat->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $boat->name }}</h5>
                                <p class="card-text text-muted">
                                    dari Rp {{ number_format($boat->price, 0, ',', '.') }}<br>
                                    max {{ $boat->max_people }} orang
                                </p>
                                <a href="#" class="btn btn-primary mt-4 px-4 py-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <script src="/js/boats.js"></script>
</body>

</html>
