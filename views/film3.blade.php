<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Tico | Ticket Online</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top " >
      <div class="container">
        <img src="img/favicon.ico" style="margin-right:5px"></img>
        <a class="navbar-brand" href="/index">TICO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/index">Home</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
<!-- latihan 2 service dan feuture-->
<div class="container-satu">
    <div class="layanan satu" style="margin: 10vh;">
        <h1>NOW PLAYING</h1>
            <div class="row">
                <div class="card" style="width: 18rem;">
                <img src="img/movie (3).jpeg" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
</div>

<div class="layanan dua" style="margin: 10vh;">
    <h2>The King's Man</h2>
    <br>
        <p> Jenis Film  : Action, Adventure, Comedy</p>
        <p> Produser    : David Reid, Adam Bohling, Matthew Vaughn</p>
        <p> Sutradara   : Matthew Vaughn</p>
        <p> Penulis     : Matthew Vaughn, Jane Goldman</p>
        <p> Produksi    : Twentieth Century Studios</p>
        <p> Durasi      : 131 Minutes</p>
        <P> Casts       : Ralph Fiennes, Gemma Arterton, Rhys Ifans, Matthew Goode, Tom Hollander, 
                          Harris Dickinson, Daniel Brühl, Djimon Hounsou, Charles Dance</P>
            <ul>
            <li><a href="https://www.youtube.com/watch?v=5zdBG-iGfes">Watch Trailer</a></li>
            
            </ul>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contohmodal">Beli Film</button>
    
    <div class="modal fade" id="contohmodal" role="dialog" arialabelledby="modallabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Pembayaran</h2>
                    <button type="button" class="close" data-dismiss="modal" arial-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form>
                    <img src="img/transaksi3.jpeg">
                    <h5>The King's Man</h5>
                    <br><hr>
                    <p>Durasi Sewa 48 Jam<p>
                    <p>Rincian <br>
Harga Film
Rp 30.000
<br>
Biaya Admin
Rp 2.000
<br>

Total
Rp 32.000</p>

                    </form>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary"  onclick="window.location.href='/create'">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container1" style="margin:10vh">
        <p>SINOPSIS</p>
        <P>
        Di awal abad ke-20, agensi Kingsman dibentuk untuk melawan komplotan jahat yang 
        merencanakan perang untuk memusnahkan jutaan orang.
        </P>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- Awalan Footer -->
<div class="bg-dark footer-bottom">
        <p>TICO ID is the leading movie ticket booking application from Indonesia. 
          Book your movie tickets, read the latest movie news at ease, quick & secure without any hassle.</p>
    </div>
<!-- Akhiran Footer -->