@extends('layouts/main')
@section('container')
<!-- latihan 2 service dan feuture-->
<div class="container-satu">
    <div class="layanan satu">
        <h1>NOW PLAYING</h1>
            <div class="row">
                <div class="card" style="width: 18rem;">
                <img src="img/movie (3).jpeg" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
</div>

<div class="layanan dua">
    <h2>Spider-Man: No Way Home (IMAX 2D)</h2>
        <p> Jenis Film  : Action, Adventure, Sci-Fi</p>
        <p> Produser    : Kevin Feige, Amy Pascal</p>
        <p> Sutradara   : Jon Watts</p>
        <p> Penulis     : Chris McKenna, Erik Sommers</p>
        <p> Produksi    : Columbia Pictures</p>
        <p> Durasi      : 148 Minutes</p>
        <P> Casts       : Tom Holland, Zendaya, Benedict Cumberbatch, Marisa Tomei, Jon Favreau, 
                          J.K. Simmons, Willem Dafoe, Angourie Rice, Alfred Molina, Jamie Foxx, Benedict Wong</P>
            <ul>
            <li><a href="https://youtu.be/JfVOs4VSpmA">Watch Trailer</a></li>
            
            </ul>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contohmodal">Beli Film</button>
    
    <div class="modal fade" id="contohmodal" role="dialog" arialabelledby="modallabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">pembayaran</h2>
                    <button type="button" class="close" data-dismiss="modal" arial-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form>
                    <img src="img/transaksi.jpeg">
                    <h5>Spiderman:No Way Home</h5>
                    <br><hr>
                    <p>Durasi Sewa 48 Jam<p>
                    <p>Rincian <br>
Harga Film
Rp 50.000
<br>
Biaya Admin
Rp 385
<br>

Total
Rp 50.385</p>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                </div>
            </div>
        </div>
    </div>

</div>
        <p>SINOPSIS</p>
        <P>
            Pasca terbongkarnya identitas Spider-Man, Peter Parker meminta bantuan Doctor Strange. 
            Namun, ketika mantra salah, musuh berbahaya dari dunia lain mulai muncul, memaksa 
            Peter untuk menemukan apa artinya menjadi Spider-Man.
        </P>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
@endsection