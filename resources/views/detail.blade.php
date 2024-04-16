@php
$posts = App\Models\Post::paginate(3);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="js/all.js"></script>
    <script src="https://kit.fontawesome.com/8e23404ed8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @include('component.navbar')
    <div class="container">
            <h1 class="home-tag" style="text-align: start; margin-top:20px;">{{$post ->nama_tempat}}</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Wisata</li>
            </ol>
        </nav>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h3 style="text-align: start; margin-bottom: 30px;">Tentang</h3>
                    <p><i class="fa-solid fa-clock-rotate-left" style="color: #000000; margin-right: 10px;"></i>Durasi
                        {{$post->jarak_tempuh}}</p>
                    <p><i class="fa-solid fa-location-pin" style="color: #000000; margin-right: 10px;"></i>{{$post->lokasi_tempat}}</p>
                    <p>{{$post->keterangan}}</p>
                </div>
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" style="margin-left: 50px;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('images/'.$post->gambar)}}" class="d-block w-100" alt="..."
                                    style="width: 1000px; height: 600px; object-fit:cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/penampihan.webp')}}" class="d-block w-100" alt="..."
                                    style="width: 1000px; height: 600px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/penampihan3.jpg')}}" class="d-block w-100" alt="..."
                                    style="width: 1000px; height: 600px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/puncakwilis (1).jpeg')}}.jpeg" class="d-block w-100" alt="..."
                                    style="width: 1000px; height: 600px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/puncakwilis (2).jpeg')}}.jpeg" class="d-block w-100" alt="..."
                                    style="width: 1000px; height: 600px; object-fit: cover;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <br>
                    <div>
                        <h3 style="text-align: start; margin-left: 50px;">Ulasan</h3>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <p style="margin-left: 40px;">{{$post->ulasan}}/10</p>
                                </div>
                                <div class="col">
                                    <div class="progress" role="progressbar" aria-label="Example with label"
                                        aria-valuenow="{{$post->ulasan}}" aria-valuemin="{{$post->ulasan}}" aria-valuemax="100"
                                        style="margin-left: -100px; height: 20px;">
                                        <div class="progress-bar" style="width: 80%">{{$post->ulasan}}/10</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="komentar">
            <h1 class="home-tag" style="text-align: start; font-size: 30px; ">Ulasan Komentar</h1>
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Filter Komentar
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">Terbaru</a></li>
                    <li><a href="#" class="dropdown-item">Populer</a></li>
                </ul>
            </div>
            <br>
            <br>
            <div>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="round-image">
                                <img src="{{asset('images/profil.jpg')}}" alt="Gambar">
                            </div>
                        </div>
                        <div class="col">
                            <h4 style="font-size: 22px; margin-left: -90%; text-align: start;">Rizal Efendi</h4>
                            <p style="margin-left: -90%; font-size: 18px;">Tulungagung, Jawa Timur</p>
                            <p style="margin-left: -90%;">19 Agustus 2023</p>
                            <p style="margin-left: -90%;">View nya bagus sekali di puncak gunung nya, sangat
                                rekomendasi untuk dijadikan tempat tujuan untuk mendaki gunung</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <p>Tambahkan Komentar Anda!</p>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <br>
                <button type="submit" class="btn btn-dark mb-3">Tambahkan</button>
            </div>
        </div>
        <div>
            <h2 class="position-absolute-start-0">Populer juga di kalangan wisatawan <a href=""
                    class="position-absolute start-0" style="margin-left: 80%; color: #000000; font-size: 25px;">Lihat
                    Semua</a></h2>
        </div>
        <br>
        <div class="container text-center">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col">
                        <a href="{{route('detail', $post->id)}}" style="color:#000000; text-decoration:none;">
                            <img src="{{asset('images/'.$post->gambar)}}" alt=""
                            style="width: 400px; height: 300px;">
                            <h4 style="text-align: start;">{{$post->nama_tempat}}</h4>
                            <p style="text-align: start;">{{$post->lokasi_tempat}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('component.footer')
</body>

</html>
