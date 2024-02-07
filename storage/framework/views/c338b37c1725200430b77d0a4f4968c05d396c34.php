<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/kegiatan.css">
  
    <title>Kegiatan | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5">

  <div class="se-pre-con"></div>

    <nav class="navbar navbar-expand-sm">
        <div class="container">
          <a class="navbar-brand">
            <img src="../image/logo mojo.png" alt="logo" width="15%">
            BUMDES TAWAR
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item ms-4 dropdown">
                
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profil
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/tentang">Tentang Bumdes</a>
                  <a class="dropdown-item" href="/sto">Struktur Organisasi</a>
                </div>
              </li>
              <li class="nav-item ms-4 dropdown">
                
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        UMKM
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/produk">Produk</a>
                  <a class="dropdown-item" href="/jasa">Jasa</a>
                  <a class="dropdown-item" href="/wisata">Wisata</a>
                </div>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" aria-current="page" href="/kegiatan">Kegiatan</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" aria-current="page" href="/kontak">Kontak</a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>

      <nav aria-label="breadcrumb">      
          <ol class="breadcrumb breadcrumb-chevron p-3">
            <li class="breadcrumb-item">
              <a class="link-body-emphasis" href="/">
                Home
              </a>
            </li>
            <li class="breadcrumb-item fw-semibold active" aria-current="page">
              Kegiatan
            </li>
          </ol>
      </nav>
    
      <div class="kegiatan mt-5">
        <div class="container">
          <div class="row mt-4">
            <?php $__currentLoopData = $datakegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
              <div class="col-md-4 text-left">
                <a href="<?php echo e(route('deskripsi_kegiatan', [$data->id])); ?>">
                  <img src=<?php echo e(asset('storage/'.$data->galeri_kegiatan)); ?> class="img-responsive" alt="logo" id="gambar-kegiatan">
                </a>
                  <h6 class="mt-3"><b><?php echo e($data->nama_kegiatan); ?></b></h6>
                  <p><i class="bi bi-calendar mx-2" style="color: #990e0e"></i><?php echo e($data->tanggal); ?></p>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
      </div>

      <div class="footer1 text-md-left mt-5" style="font-weight: bold;color: aliceblue;">
        <div class="container">
          <div class="row">

                <div class="col mb-5" style="margin-top: 80px">
                 <h5>Ikuti Kami</h5>
                  <ul class="list-unstyled d-flex mt-3">
                    <li class="">
                      <a href="#"><button class="btn btn-circle btn-sm"><i data-feather="instagram" style="color: aliceblue"></i></button></i></a>
                    </li>
                    <li class="ms-3">
                      <a href="#"><button class="btn btn-circle btn-sm"><img src="../Image/TikTok.png" alt="" style="width: 65%"></button></a>
                    </li>
                  </ul>
                </div>

                
            
                <div class="col mb-5" style="margin-top: 80px;margin-left:70px">
                  <h5>Menu Utama</h5>
                  <ul class="nav flex-column mt-3">
                    <li class="nav-item mb-2"><a href="/" class="p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="/kegiatan" class="p-0">Kegiatan</a></li>
                    <li class="nav-item mb-2"><a href="/kontak" class="p-0">Kontak</a></li>
                  </ul>
                </div>
                         
                <div class="col mb-4"  style="margin-top: 80px;margin-left:15px">
                  <h5>UMKM</h5>
                  <ul class="nav flex-column mt-3">
                    <li class="nav-item mb-2"><a href="/produk" class="p-0">Produk</a></li>
                    <li class="nav-item mb-2"><a href="/jasa" class="p-0">Jasa</a></li>
                    <li class="nav-item mb-2"><a href="/wisata" class="p-0">Wisata</a></li>
                  </ul>
                </div>
                
                <div class="col mb-5"  style="margin-top: 80px">
                  <h5>Kontak Kami</h5>
                  <ul class="nav flex-column mt-3">
                    <li class="nav-item mb-2"><a href="#" class="p-0"><i data-feather="map-pin" style="color: aliceblue;"></i>&nbsp;&nbsp; Desa tawar</a></li>
                    <li class="nav-item mb-2"><i data-feather="mail" style="color: aliceblue;"></i>&nbsp;&nbsp; bumdestawar@gmail.com</li>
                    <li class="nav-item mb-2"><i data-feather="phone" style="color: aliceblue;"></i>&nbsp;&nbsp; 08******</li>
                  </ul>
                </div>
          </div>
        </div>
      </div>

     <footer class="footer2">    
      <div class="container">      
            <div class="copy text-center">
              &copy; 2023 All Right Reserved BUMDES Tawar 
              <span style="float: right"><b>v1.1</b></span>
            </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    <script>
      feather.replace();
    </script>
    <script>
      $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
      });
    </script>
  </body>
</html><?php /**PATH E:\app\bumdestawar\resources\views/kegiatan.blade.php ENDPATH**/ ?>