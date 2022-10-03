<!DOCTYPE html>
<html lang="en">
<?php
    $namaserver = "localhost";
    $username = "root";
    $password = "";
    $namadb = "web22";

    //buat koneksi
    $koneksi = mysqli_connect($namaserver,$username,$password,$namadb);
    //cek koneksi
    if (!$koneksi){
        die ("Gagal Melakukan Koneksi Ke Database." . mysqli_connect_error());
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        min-height: 100vh;
        background: #ffffff;
        }

        body .containeer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: 40px 0;
        }

        body .containeer .card {
        position: relative;
        min-width: 320px;
        height: 440px;
        box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
            inset -5px -5px 15px rgba(255, 255, 255, 0.1),
            5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        margin: 30px;
        transition: 0.5s;
        }

        body .containeer .card:nth-child(1) .box .content a {
        background: #2196f3;
        }

        body .containeer .card:nth-child(2) .box .content a {
        background: #e91e63;
        }

        body .containeer .card:nth-child(3) .box .content a {
        background: #23c186;
        }

        body .containeer .card .box {
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        background: #2a2b2f;
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        transition: 0.5s;
        }

        body .containeer .card .box:hover {
        transform: translateY(-50px);
        }

        body .containeer .card .box:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background: rgba(255, 255, 255, 0.03);
        }

        body .containeer .card .box .content {
        padding: 20px;
        text-align: center;
        }

        body .containeer .card .box .content h2 {
        position: center;
        top: -10px;
        right: 30px;
        font-size: 1.5rem;
        color: rgba(255, 255, 255, 0.688);
        }

        body .containeer .card .box .content h3 {
        font-size: 12px;
        color: #fff;
        z-index: 1;
        transition: 0.5s;
        margin-bottom: 15px;
        }

        body .containeer .card .box .content p {
        font-size: 9px;
        font-weight: 300;
        color: rgba(255, 255, 255, 0.9);
        z-index: 1;
        transition: 0.5s;
        }

        body .containeer .card .box .content a {
        position: relative;
        display: inline-block;
        padding: 8px 20px;
        background: black;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        margin-top: 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        transition: 0.5s;
        }
        body .containeer .card .box .content a:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
        background: #fff;
        color: #000;
        }
    </style>
</head>
<body>

    <?php
        if(isset($_POST['nama'])){
            $nama = $_POST['nama'];
            $querySQL = "INSERT INTO angkatan (nama) VALUES ($nama)";
            $execSQL = mysqli_query($koneksi,$querySQL);
        }
        if(isset($_POST['nohp'])){
            $nohp = $_POST['nohp'];
            $querySQL = "INSERT INTO angkatan (nohp) VALUES ($nohp)";
            $execSQL = mysqli_query($koneksi,$querySQL);
        }
        if(isset($_POST['nik'])){
            $nik = $_POST['nik'];
            $querySQL = "INSERT INTO angkatan (nik) VALUES ($nik)";
            $execSQL = mysqli_query($koneksi,$querySQL);
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            $querySQL = "INSERT INTO angkatan (email) VALUES ($email)";
            $execSQL = mysqli_query($koneksi,$querySQL);
        }
        if(isset($_POST['jurusan'])){
            $jurusan = $_POST['jurusan'];
            $querySQL = "INSERT INTO angkatan (jurusan) VALUES ($jurusan)";
            $execSQL = mysqli_query($koneksi,$querySQL);
        }
    ?>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.html">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="tentangupj.html">Tentang UPJ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="pendaftaran.html">Pendaftaran</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Fakultas</a>
                <ul class="dropdown-menu bg-light">
                  <li><a class="dropdown-item" href="prodiinf.html">Prodi Informatika</a></li>
                  <li><a class="dropdown-item" href="prodipsi.html">Prodi Psikologi</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="kontakkami.html">Kontak Kami</a>
              </li>  
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
              </form>
          </div>
        </div>
    </nav>
 
    <!--HEAD-->
    <div class="container mt-5 border-bottom">
        <div class="row up-head"> 
            <div class="col-xs-6 col-sm-5 col-md-6 mt-2 mb-2"> 
                <div class="logo"> 
                    <a href="#">
                        <img alt="Logo" src="//www.upj.ac.id/upload/module/logo/logo2.png">
                    </a> 
                </div> 
            </div> 
            <div class="col-sm-7 col-md-6 mt-1"> 
                <div class="row"> 
                    <div class="col-xs-12 col-sm-7 col-md- col-md-offset-1 mt-3"> 
                        <div class="media-middle"> 
                            <h21 class="text-success" style="font-size:18px;">INTEGRITY</h21><br> 
                            <h21 class="text-primary" style="font-size:18px;">PROFESSIONALISM</h21><br> 
                            <h21 class="text-danger" style="font-size:18px;">ENTREPRENEURSHIP</h21> 
                        </div> 
                    </div> 
                    <div class="col-xs-6 col-sm-3 col-md-2 mt-4"> 
                        <div class="media-middle"> 
                                <span>Language</span> 
                            <p> 
                                <a>
                                    <img style="margin-left:0px;" src="//www.upj.ac.id/web/templates/assets/images/en-flag.gif">
                                </a> 
                                <a>
                                    <img style="margin-left:0px;" src="//www.upj.ac.id/web/templates/assets/images/id-flag.gif">
                                </a> 
                            </p>
                        </div> 
                    </div> 
                </div>        
            </div> 
        </div>
    </div>

        <!-- Carousel -->
        <div class="container-fluid" style="width: 100%; padding: 0%;">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
    
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.upj.ac.id/upload/module/gallery3/gallery78.jpg" alt="Wisuda" class="d-block" style="width:100%" height="500">
            </div>
            <div class="carousel-item">
                <img src="https://www.upj.ac.id/upload/module/gallery3/gallery78.jpg" alt="Wisuda" class="d-block" style="width:100%" height="500">
            </div>
            <div class="carousel-item">
                <img src="https://www.upj.ac.id/upload/module/gallery3/gallery78.jpg" alt="Wisuda" class="d-block" style="width:100%" height="500">
            </div>
            </div>
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
            </div>
        </div>

<!--form-->
    <div class="container pt-3 bg-light pb-5 ps-5 pe-5 rounded-5 mt-5">
        <h1 style="font-size: 20px; text-align: center;"><b> Pendaftaran Mahasiswa Baru</b></h1>
        <h1 style="font-size: 20px; text-align: center;"> Periode 2023/2024</h1>
        <div class="col-5">
            <label for="inputPassword" class="form-label">Nama Panjang</label>
        </div>
        <div class="col-5">
            <div class="col-sm-10">
                <input method="post" type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
        </div>
        <div class="col-5">
            <label for="inputPassword" class="form-label">No Hp</label>
        </div>
        <div class="col-5">
            <div class="col-sm-10">
                <input method="post" type="text" class="form-control" name="nohp" placeholder="Nomer Handphone">
            </div>
        </div>
        <div class="col-5">
            <label for="inputPassword" class="form-label">Alamat Email</label>
        </div>
        <div class="col-5">
            <div class="col-sm-10">
                <input method="post" type="text" class="form-control" name="email" placeholder="name@example.com">
            </div>
        </div>
        <div class="col-5">
            <label for="inputPassword" class="form-label">NIK /No. KTP</label>
        </div>
        <div class="col-5">
            <div class="col-sm-10">
                <input method="post" type="text" class="form-control" name="nik" placeholder="Isi No KTP Anda">
            </div>
        </div>
        <div class="col-5">
            <label for="inputPassword" class="form-label">Jurusan</label>
        </div>
        <div class="col-5">
            <div class="col-sm-10">
                <input method="post" type="text" class="form-control" name="jurusan" placeholder="Jurusan Pilihan Anda">
            </div>
        </div>
        <a class="btn btn-primary mt-3" href="#" role="button">Submit</a>
    </div>


    </div>

        <!-- Footer -->
        <div class="container-fluid pt-3 pb-3 bg-primary">
            <div class="row">
                <div class="col text-white">
                    <img style="margin-left: 20px; margin-right:20px; " src="https://pmb.upj.ac.id/spmbfront/assets/default/img/speech-bubble.png" width="50">
                    Layanan Bantuan
                </div>
                <div class="col" style="text-align:end;"> 
                    <a href="#" class="btn btn-dark btn-sm" style="text-align: end;">
                        Hubungi Kami
                    </a> 
                </div>
            </div>
        </div>
        <footer class="container-fluid text-center text-white" style="background-color: #121212">
            <!-- Grid container -->
            <div class="container pt-1">
                <!-- Section: Text -->
                <section class="mb-2">
                    <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h3>
                            Alamat Universitas
                        </h3>
                        <img src="https://upj.ac.id/web/templates/assets/images/logo-footer.png">
                        <p>
                            Jl. Cendrawasih Raya Blok B7/P Bintaro Jaya, Sawah Baru, Ciputat, Tangerang Selatan 15413
                             (021) 745 5555 - (021) 2986 1525
                        </p>
                    </div>
                    </div>
                </section>
                <!-- Section: Text -->
    
                <!-- Section: Social -->
                <section class="text-center mb-2">
                    <a href="#" class="text-white me-4">
                    <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="text-white me-4">
                    <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="text-white me-4">
                    <i class="fa fa-google"></i>
                    </a>
                    <a href="#" class="text-white me-4">
                    <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#" class="text-white me-4">
                    <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-white me-4">
                    <i class="fa fa-github"></i>
                    </a>
                </section>
                <!-- Section: Social -->
            </div>
            <!-- Grid container -->
    
            <!-- Copyright -->
            <div
                class="text-center p-3"
                style="background-color: rgba(0, 0, 0, 0.2)"
                >
            © 2022 - OYEN
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

</body>
</html>