@extends('layouts/main')
@section('container')
<link href ="css/main.css" rel="stylesheet">
@if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/spiderman.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="display-4">
      Spider-Man: No Way Home<br />
              
            </h1>
            <p>Makanan Praktis Dalam Kemasan Beku Siap Masak.</p><br><br>
            <a class="btn btn-primary btn-lg" href="PesanSekarang.html" role="button">Pesan Sekarang
              </a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/Background (1).jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="display-4">
      Spider-Man: No Way Home1<br />
              
            </h1>
            <p>Makanan Praktis Dalam Kemasan Beku Siap Masak.</p><br><br>
            <a class="btn btn-primary btn-lg" href="PesanSekarang.html" role="button">Pesan Sekarang
              </a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/Background (1).jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="display-4">
      Spider-Man: No Way Home2<br />
              
            </h1>
            <p>Makanan Praktis Dalam Kemasan Beku Siap Masak.</p><br><br>
            <a class="btn btn-primary btn-lg" href="PesanSekarang.html" role="button">Pesan Sekarang
              </a>
      </div>    
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br><br><br><hr><br><br><br>

<!-- Awalan Card -->
<div class="movie">
      <div class="row">
      <div class="card" style="width: 18rem;">
  <img src="img/luffy.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/kaido.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/bigmom.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/luffy.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>
<!-- Akhiran Card -->

<!-- Awalan Feature -->
@endsection