<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Home | BUMDES Tawar</title>
</head>

<style>

        .bgimu{ 
          background: linear-gradient(rgba(0, 0, 0, 0.596), rgba(0, 0, 0, 0.596)), url('../image/desa.jpg');
          background-size: cover;
          height: 550px; 
          margin-top: -160px;  
        }

        .navbar {
          background-color: transparent !important;
          margin-top: 15px;
        }

        .navbar.navbar-fixed-top {
          box-shadow: none !important;
        }

        .nav-link,.navbar-brand{
          color: rgb(235, 235, 235);
          font-size: 20px;
          font-family: Arial, Helvetica, sans-serif;
          font-weight: bold;
        }

        .nav-link:hover{
          color: rgb(235, 235, 235);
          border-bottom: 3px solid aliceblue;
        }

        .tentang{
          margin-top: 100px;
        }

        .kegiatan{
          margin-top: 100px;
        }

        a{
            color: black;
            font-weight: bold;
        }
        
        a:hover{
            color: rgba(0, 0, 0, 0.87);
            text-decoration: none;
        }
</style>

<body style="background-color: rgb(238, 238, 238)">

    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-fixed-top">
        <div class="container">
          
          <h1>Logo Bumdes</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" aria-current="page" href="/">Profil</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" aria-current="page" href="/">UMKM</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" aria-current="page" href="/">Kegiatan</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" aria-current="page" href="/">Contact</a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>
    
      <div class="bgimu p-5 text-center bg-image">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="mt-5" style="font-weight:bold, font-family: Verdana, Geneva, Tahoma, sans-serif;color:rgb(226, 226, 226)">
            <h1 class="mt-5">Selamat Datang di</h1>
            <h1 class="mt-1">Website BUMDES Desa Tawar</h1>
            <h5 class="mt-2">Kecamatan Gondang, Kabupaten Mojokerto</h5>
          </div>
        </div>
      </div>

      <div class="tentang">
        <div class="container">
          <div class="row">
              <div class="col-md-5 text-center">
                  <img src="../image/desa.jpg" class="img-responsive" alt="logo" style="width: 70%">
              </div>
              <div class="col-md-7 text-left">
                  <h2 class="text-center mb-3">Tentang BUMDES Desa Tawar</h2>
                  <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsa, doloribus ullam delectus magnam dolorum. Illo, maiores! Dolorem magni, esse, similique alias quas consequuntur ea nam vel obcaecati vitae deserunt.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi delectus ex rerum, aperiam aspernatur nulla beatae commodi soluta iusto quos fuga voluptates aut, sed, architecto quam fugiat. Doloremque, ex pariatur</p>
                  <a href="/"><p class="text-justify">Baca Selengkapnya</p></a>
              </div>
          </div>
        </div>
      </div>

      <div class="kegiatan">
        <div class="container">
          <div class="row">
              <div class="text-center mb-5">
                  <h2 class="text-center">Berbagai Kegiatan Kami</h2>
              </div>
                <div class="col-md-4 text-center">
                    <img src="../image/desa.jpg" class="img-responsive" alt="logo" style="width: 80%">
                    <p><b>Judul Kegiatan</b></p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="../image/desa.jpg" class="img-responsive" alt="logo" style="width: 80%">
                    <p><b>Judul Kegiatan</b></p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="../image/desa.jpg" class="img-responsive" alt="logo" style="width: 80%">
                    <p><b>Judul Kegiatan</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <section class="section-lg bg-primary bg-image-wrap context-dark text-center text-md-left mt-5">
        <div class="bg-image-wrap-item bg-image" style="background: url('../image/desa.jpg');"></div>
        
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH E:\app\bumdestawar\resources\views/beranda.blade.php ENDPATH**/ ?>