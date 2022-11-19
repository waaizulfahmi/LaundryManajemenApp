
<div id="lacak" class="mt-5">
      &nbsp;
      <div class="text-center mb-5 mt-5" data-aos="zoom-out"><h1>Lacak Pesanan Anda</h1></div>
        <div class="container mx-auto shadow p-3 rounded pt-3">
          <form class="row p-3" method="GET" action="<?= base_url('cari') ?>" autocomplete="off">
            <div class="col-4 ">
              <label for="staticEmail2" class="visually-hidden">Masukan Kode Order</label>
              <input type="text" readonly class="form-control-plaintext mx-auto ms-5"  id="staticEmail2" value="Masukan Kode Order Anda">
            </div>
            <div class="col-4">
              <label for="inputPassword2" class="visually-hidden">Masukan Kode Order disini</label>
              <input type="text" class="form-control"  placeholder="kode order.." name="idOrder" onkeypress="return inputAngka(event)">
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-success ">Cek</button>
            </div>
          </form>
        
      
      <span>
        
      </span>
      <section class=" pb-5 " style="min-height: 100px">
      <div class="container" data-aos="flip-up">
        <div class="row">
          <div class="col-sm-12">
            <div class="mx-auto pt-4 pb-2">
              <?php if ($tampil == null): ?>
                <div align="center">
                  <img src="<?=base_url('assets/users/')?>img/cari.png" width="200rem">
                  <h6 class="mt-4 font-weight-bold" >Mulai lacak status laundry anda dengan memasukkan ID laundry anda pada form diatas.</h6>
                </div>
              <?php elseif($tampil == 'noData'): ?>
                <div align="center">
                  <img src="<?=base_url('assets/users/')?>img/nofound.png" width="300px">
                  <h6>Maaf, Kode Order yang Anda Masukkan <b>Tidak Ditemukan</b>, Silakan Coba Lagi ! </h6>
                </div>
              <?php else: ?>
                  <h1 class="text-center">Status</h1>
                    <section class="multi_step_form  pb-4">  
                      <div id="msform"> 
                        <ul id="progressbar">
                          <li class="<?=($data[0]['cuci']=='1')?'active':'';?>">Proses Cuci</li>  
                          <li class="<?=($data[0]['kering']=='1')?'active':'';?>">Proses Pengeringan</li> 
                          <li class="<?=($data[0]['strika']=='1')?'active':'';?>">Strika</li>
                          <li class="<?=($data[0]['siap']=='1')?'active':'';?>">Siap diambil</li>
                          <li class="<?=($data[0]['selesai']=='1')?'active':'';?>">Selesai</li>
                        </ul>
    
                        <h6 class="pt-5">Untuk Informasi Lebih Lanjut Hubungi : (0281) 754-3010 </h6>
                      </div>  
                    </section>
              <?php endif; ?>
            </div>
          </div>
        </div>
        </div>
      </div>
  </section> 
              
    