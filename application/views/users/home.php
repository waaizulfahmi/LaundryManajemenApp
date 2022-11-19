<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/home.css">
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
                <a class="nav-link text-white " aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="#layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="<?= base_url('cari')?>">Lacak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#testimoni">Testimoni</a>
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

    <div id="home" class="mb-5">
        <div class="container2 shadow mb-5" style="position: relative; text-align: center; ">
            <img src="<?= base_url('assets/')?>img/laundry1.jpg" alt="Snow" style="width:100%; height: fit-content;">
            <div class="centered h1" >LaundryKu</div>
            <div class="centered2 h3 fw-light fst-italic">Mudahkan Kesibukanmu</div>
            <div class="centered4">
              <div class="container shadow bg-white rounded p-4 mb-5" data-aos="flip-up">
                <div class="row">
                  <div class="col-4">
                    <figure>
                      <img src="<?= base_url('assets/')?>img/clock.png" alt="Trulli" style="width:50%">
                      <figcaption class="text-black">Pelayanan Cepat</figcaption>
                    </figure>
                  </div>
                  <div class="col-4">
                    <figure>
                      <img src="<?= base_url('assets/')?>img/rupiah.png" alt="Trulli" style="width:50%">
                      <figcaption class="text-black">Biaya Murah</figcaption>
                    </figure>
                  </div>
                  <div class="col-4">
                    <figure>
                      <img src="<?= base_url('assets/')?>img/bubbles.png" alt="Trulli" style="width:50%">
                      <figcaption class="text-black">Bersih dan Wangi</figcaption>
                    </figure>
                  </div>
                </div>

              </div>
                
            </div>
            <!-- <div class="centered3 btn btn-outline-danger ">Register</div> -->
        </div>
    </div>

    

    <div id="layanan" class="mt-5">
        &nbsp;
        <div class="title text-center mb-5 mt-5" data-aos="zoom-out"><h1>Layanan</h1>
        </div>
        <div class="container shadow mb-5 p-4 ps-3 rounded" data-aos="zoom-out">
            <div class="row ">
                <div class="col ms-5">
                    <div class="card" data-aos="flip-up" style="width: 18rem;">
                        <img src="<?= base_url('assets/')?>img/layanan1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Paket Hemat</h5>
                        <p class="card-text">Mulai harga Rp. 5000/kg.</p>
                        <a href="#" class="btn btn-primary">Cek Disini</a>
                        </div>
                    </div>    
                </div>
                <div class="col">
                    <div class="card" data-aos="flip-up" style="width: 18rem;">
                        <img src="<?= base_url('assets/')?>img/layanan1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Paket Borongan</h5>
                        <p class="card-text">Mulai Harga Rp. 10000/kg.</p>
                        <a href="#" class="btn btn-primary">Cek Disini</a>
                        </div>
                    </div>    
                </div>
                <div class="col">
                    <div class="card"  data-aos="flip-up" style="width: 18rem;">
                        <img src="<?= base_url('assets/')?>img/layanan1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Paket Besar</h5>
                        <p class="card-text">Mulai Harga Rp. 20000/kg</p>
                        <a href="#" class="btn btn-primary">Cek Disini</a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
        
    <div id="testimoni">
        &nbsp;
        <div class="text-center mb-5 mt-5" data-aos="zoom-out"><h1>Testimoni</h1></div>
        <div class="container mb-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100 shadow" data-aos="zoom-in">
                    <img src="<?= base_url('assets/')?>img/person1.jpg" class="rounded-circle ms-auto me-auto mt-4" width="150" height="150" alt="testimoni1">
                    <div class="card-body">
                      <h5 class="card-title">Michael De Santa</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos minima laboriosam, iure distinctio similique porro mollitia? Molestiae, facilis explicabo ex asperiores magni itaque officia ullam provident vero numquam doloribus similique!</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 2 days ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 shadow" data-aos="zoom-in">
                    <img src="<?= base_url('assets/')?>img/person2.jpg" class="rounded-circle ms-auto me-auto mt-4" width="150" height="150" alt="testimoni2">
                    <div class="card-body">
                      <h5 class="card-title">Trevor Philips</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos minima laboriosam, iure distinctio similique porro mollitia? Molestiae, facilis explicabo ex asperiores magni itaque officia ullam provident vero numquam doloribus similique!</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 days ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 shadow" data-aos="zoom-in">
                    <img src="<?= base_url('assets/')?>img/person3.png" class="rounded-circle ms-auto me-auto mt-4" width="150" height="150" alt="testimoni3">
                    <div class="card-body">
                      <h5 class="card-title">Franklin Clinton</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos minima laboriosam, iure distinctio similique porro mollitia? Molestiae, facilis explicabo ex asperiores magni itaque officia ullam provident vero numquam doloribus similique!</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 1 weeks ago</small>
                    </div>
                  </div>
                </div>
              </div>

        </div>
          
    </div>

    <!-- <div id="tentang">
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
</html> -->