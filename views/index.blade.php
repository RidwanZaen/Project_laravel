@extends('layouts/main')
@section('container')
<link href ="css/main.css" rel="stylesheet">

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel (1).jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <br><br><br><br><br><br><br><br>
      <h1 class="display-4">
      Spider-Man: No Way Home<br />
              
            </h1>
            <p>Pasca terbongkarnya identitas Spider-Man, Peter Parker meminta bantuan Doctor Strange. 
            Namun, ketika mantra salah, musuh berbahaya dari dunia lain mulai muncul, memaksa 
            Peter untuk menemukan apa artinya menjadi Spider-Man.</p><br><br>
            <a class="btn btn-primary btn-lg" href="/film" role="button">Pesan Sekarang
              </a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel (2).jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <br><br><br><br><br><br><br><br>
      <h1 class="display-4">
      Sing 2<br />
              
            </h1>
            <p>Petualangan Buster Moon dan teman-temannya yang kini harus membujuk bintang rock 
        Clay Calloway untuk bergabung dengan mereka demi sebuah pembukaan pertunjukan baru yang spektakuler.</p><br><br>
            <a class="btn btn-primary btn-lg" href="/film2" role="button">Pesan Sekarang
              </a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel (3).jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <br><br><br><br><br><br><br><br>
      <h1 class="display-4">
      The King's Man<br />
              
            </h1>
            <p>Di awal abad ke-20, agensi Kingsman dibentuk untuk melawan komplotan jahat yang 
        merencanakan perang untuk memusnahkan jutaan orang.</p><br><br>
            <a class="btn btn-primary btn-lg" href="/film3" role="button">Pesan Sekarang
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
<div id="card">
<div class="row">
      <div class="card" style="width: 17rem;">
  <img src="img/movie (3).jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Spider-Man: No Way Home (IMAX 2D)</h5>
    <br><br>
    <a href='/film' class="btn btn-primary">Lihat Film</a>
  </div>
</div>
<div class="card" style="width: 17rem;">
  <img src="img/movie (2).jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sing 2</h5>
    <br><br><br>
    <a href='/film2' class="btn btn-primary">Lihat Film</a>
  </div>
</div>
<div class="card" style="width: 17rem;">
  <img src="img/movie (1).jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">The King's Man</h5>
    <br><br><br>
    <a href='/film3' class="btn btn-primary">Lihat Film</a>
  </div>
</div>
<div class="card" style="width: 17rem;">
  <img src="img/movie (4).jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">The Ice Road</h5>
    <br><br><br>
    <a href='/film4' class="btn btn-primary">Lihat Film</a>
  </div>
</div>
</div>
</div>
<!-- Akhiran Card -->
<div id="table">
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="mb-4">Wishlist Film {{ Session::get('name') }}!</h1>
            

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

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Title</th>
                        <th scope="col ">Description</th>
                        <th scope="col ">Created At</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($todos as $todo)
                    <tr>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        <td>{{ $todo->created_at }}</td>
                        <td>
                            @if($todo->done_at)
                            <span class="badge badge-info text-white ">Done</span>
                            @else
                            <span class="badge badge-danger text-white ">Pending</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                @if(!$todo->done_at)
                                <a href="{{ route('done', $todo->id) }}" class="btn btn-primary text-white ">
                                    <i class='bx bx-check'></i>
                                </a>
                                @endif
                                
                                <form action="{{ route('destroy', $todo->id)}}" method="POST" onSubmit="return confirm('Do you really want to delete to-do?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-white ">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!-- Awalan Feature -->
<div id="fitur">
<img src="img/fitur.jpeg" class="img-fluid" alt="Responsive image">
  
</div>

@endsection