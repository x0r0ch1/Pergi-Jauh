<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="css/stylenav.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Pergi Jauh</title>
  </head>
  <body>
    <!-- Background image -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/Component2.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link mx-5" href="{{ route('home') }}">Login</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class ="jumbotron jumbotron-fluid">
          <div class ="container">
            <h1 class="display-4">Ayo <span>Pergi Jauh</span><br> Bersama <span>Kami</span></h1>
            <h1><img src="img/Group.png" alt=""></h1>
          </div>
    </div>

    <div class="container about">
        <div class="row">
            <div class="col-6">
                <img src="img/Rectangle4.png" alt="" class="img-fluid">
            </div>
            <div class="col-5">
                <h2>Tentang Kami</h2>
                <p>Pergi jauh dapat menjadi teman backpaker kamu jika kamu ingin menjelajahi suatu tempat. Kamu tidak perlu khawatir karena nantinya kami dapat merekomendasikan seperti : tempat menginap, tempat wisata, tempat makan dan Oleh-oleh</p>
            </div>
        </div>
    </div>

    <div class="container fitur">
        <div class="row">
            <div class="col-5">
                <h2>Fitur Kami</h2>
                <p>Inilah beberapa fitur yang kami sediakan dari Pergi Jauh</p>
            </div>
            <div class="col-3 mx-5">
                <div class="row">
                    <div class="col">
                        <img src="img/Rectangle7.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <h3>Rekomendasi tempat</h3>
                    <p class="cap">Kamu gak perlu khawatir bingung mau ngapa-ngapain tinggal pake aplikasi kita nanti kami bakal pilihin rekomendasi tempat-tempat yang ada di sekitarmu</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <img src="img/Rectangle8.png" alt="" class="img-fluid">
                <h3>Informasi Lokasi</h3>
                <p class="cap">KamI berikan informasi tempat rekomendasi yang kami berikan seperti deskripsi, transportasi yang dapat digunakan, dan lain sebagainya</p>
            </div>
        </div>
    </div>

    <div class="container kontak">
        <h4>Kontak Kami</h4>
        <p>Kamu bisa hubungin kita kalau ada pertanyaan</p>
        <div class="row">
            <div class="col">
                <p class="sos"><img src="img/WhatsApp.png" alt="WhatsApp" class="img-fluid"> 088210374953</p>
            </div>
            <div class="col">
                <p class="sos"><img src="img/Instagram.png" alt="Instagram" class="img-fluid"> @pergijauhofficial</p>
            </div>
            <div class="col">
                <p class="sos"><img src="img/Facebook.png" alt="Facebook" class="img-fluid"> Pergi Jauh Official</p>
            </div>
        </div>
    </div>


    <div id="footer">
        <h5 class="logo"><img src="img/Component2.png" alt="" class="img-fluid"></h5>
        <h5 class="copyright">Copyright of Pergi Jauh family</h5>
    </div>
    








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/popper.min.js"></script>
  </body>
</html>