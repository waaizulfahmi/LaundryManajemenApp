<!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-12 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Transaksi Aktif Saat Ini</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->db->count_all_results('transaksi')?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-12 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Tarif</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->db->count_all_results('tarif')?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-12 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Transaksi Yang Telah Selesai</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $this->db->count_all_results('transaksi_detail')?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-stream fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- END ROW-->


<div class="row">
    <div class="col-xl-12">
    	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pendapatan Perbulan</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
              </div>
              <hr>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url('assets/')?>js/Chart.min.js"></script>
<script src="<?=base_url('assets/')?>js/demo/chart-area-demo.js"></script>

