<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/home.css">
    <link href="<?=base_url('assets/users/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>LaundryKu</title>
</head>
<body>
<?php $hal    = $this->uri->segment(1); ?>
    <nav class="navbar navbar-expand-lg bg-info shadow fixed-top">
        <div class="container">
          <a class="navbar-brand text-white" href="#"><b>laundryKu</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills ms-auto mb-2 mb-lg-0 me-5">
              <li class="nav-item">
                <a class="nav-link text-white " aria-current="page" href="<?= base_url('') ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="<?= base_url('#layanan') ?>">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="<?= base_url('cari')?>">Lacak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?= base_url('#testimoni') ?>">Testimoni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#tentang">Tentang</a>
              </li>
              <!-- <li class="nav-item ">
                <a class="nav-link text-white" href="<?php base_url('views/')?>auth/login"><b>Login</b></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white" href="<?php base_url('views/')?>auth/register"><b>Register</b></a>
              </li> -->
            </ul>
          </div>
        </div>
    </nav>

    <?php 
      if(!defined('BASEPATH')) exit ('No direct script access allowed');
      if($content){$this->load->view($content);}
    ?>

    <div id="tentang">
        <div class="mt-5 pt-5 pb-5 footer bg-dark">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 col-xs-12 about-company">
                  <h2 class="text-white" data-aos="zoom-out">LaundryKu</h2>
                  <p class="pr-5 text-white-50" data-aos="zoom-in">Adalah sebuah platform manajamen pemesanan laundry yang berbasis Web </p>
                  <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
                </div>
                <div class="col-lg-5 col-xs-12 location" data-aos="zoom-out-down">
                  <h4 class="mt-lg-0 mt-sm-4 text-white" >Location</h4>
                  <p class="text-white">Jl Jend. Soedirman 128, Purwokerto, Jawa Tengah</p>
                  <p class="mb-0 text-white"><i class="bi bi-telephone text-white"></i>&nbsp; (0281) 754-3010</p>
                  <p class="text-white"><i class="bi bi-envelope text-white"></i>&nbsp; info@laundryku.com</p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col copyright">
                  <p class=""><small class="text-50 text-white">© 2022. Kelompok 14.</small></p>
                </div>
              </div>
            </div>
            </div>
    </div>
    <script src="<?= base_url('assets/')?>js/aos.js"></script>
    <script>
        AOS.init({
          easing: "ease-in-out-sine",
        });
    </script>
    <script>
      function inputAngka(evt){
          var charCode = (evt.charCode);
          if(charCode>31 && (charCode<48 || charCode>57) && charCode!=45) { return false; } else { return true; }
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
