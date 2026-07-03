<?php
require_once '../config/app.php';
require_once '../config/session.php';
require_role('admin');
$pageTitle = 'Admin Dashboard';
$role = 'admin';
$activePage = 'dashboard';
include '../includes/header.php';
include '../includes/sidebar.php';
?>
<main style="margin-left:250px; min-height:100vh; background:#f4f7fb;">
  <div class="p-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-0">Admin Dashboard</h4>
        <small class="text-muted">Selamat datang, <?= htmlspecialchars($_SESSION['user_name'] ?? 'Admin') ?>!</small>
      </div>
      <span class="badge bg-primary px-3 py-2"><i class="bi bi-calendar3 me-1"></i><?= date('d M Y') ?></span>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
      <?php
      $stats = [
        ['Total Penjual',  '24',  'bi-shop',        'linear-gradient(135deg,#0B5ED7,#1a6fd4)'],
        ['Total Pembeli',  '132', 'bi-people-fill',  'linear-gradient(135deg,#2E8B57,#3aa06a)'],
        ['Total Produk',   '58',  'bi-box-seam',     'linear-gradient(135deg,#fd7e14,#e8640a)'],
        ['Total Transaksi','340', 'bi-cart-check',   'linear-gradient(135deg,#6f42c1,#5a30b0)'],
      ];
      foreach ($stats as [$label,$val,$icon,$grad]):?>
      <div class="col-md-3 col-sm-6">
        <div class="card border-0 text-white shadow-sm" style="background:<?= $grad ?>;border-radius:14px;">
          <div class="card-body d-flex align-items-center gap-3">
            <div class="rounded-circle bg-white bg-opacity-25 d-flex align-items-center justify-content-center" style="width:52px;height:52px;flex-shrink:0;">
              <i class="bi <?= $icon ?> fs-3"></i>
            </div>
            <div>
              <div class="display-6 fw-bold lh-1"><?= $val ?></div>
              <div class="small opacity-75"><?= $label ?></div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Chart + Recent Orders -->
    <div class="row g-4 mb-4">
      <div class="col-lg-8">
        <div class="card border-0 shadow-sm" style="border-radius:14px;">
          <div class="card-body">
            <h6 class="fw-bold mb-3">Penjualan per Bulan (2026)</h6>
            <canvas id="salesChart" height="100"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0 shadow-sm h-100" style="border-radius:14px;">
          <div class="card-body">
            <h6 class="fw-bold mb-3">Distribusi Penjualan</h6>
            <canvas id="pieChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Transactions -->
    <div class="card border-0 shadow-sm" style="border-radius:14px;">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h6 class="fw-bold mb-0">Transaksi Terbaru</h6>
          <a href="pesanan.php" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
        </div>
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
              <tr><th>Kode Order</th><th>Pembeli</th><th>Total</th><th>Status</th><th>Tanggal</th></tr>
            </thead>
            <tbody>
              <?php
              $orders = [
                ['ORD-001','Andi Pratama','Rp 250.000','delivered','01 Jul 2026'],
                ['ORD-002','Rina Sari','Rp 180.000','processing','02 Jul 2026'],
                ['ORD-003','Deni Kusuma','Rp 95.000','pending','03 Jul 2026'],
                ['ORD-004','Maya Indah','Rp 320.000','paid','03 Jul 2026'],
              ];
              $badges = ['delivered'=>'success','processing'=>'info','pending'=>'warning','paid'=>'primary'];
              foreach ($orders as [$code,$buyer,$total,$status,$date]):?>
              <tr>
                <td><code><?= $code ?></code></td>
                <td><?= $buyer ?></td>
                <td class="fw-semibold"><?= $total ?></td>
                <td><span class="badge bg-<?= $badges[$status] ?>"><?= ucfirst($status) ?></span></td>
                <td class="text-muted small"><?= $date ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
const ctx1 = document.getElementById('salesChart').getContext('2d');
new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
    datasets: [{
      label: 'Penjualan (Rp Juta)',
      data: [30,45,28,60,55,70,80,65,50,75,90,100],
      backgroundColor: 'rgba(11,94,215,0.7)',
      borderColor: '#0B5ED7',
      borderWidth: 2,
      borderRadius: 6,
    }]
  },
  options: { responsive:true, plugins:{legend:{display:false}}, scales:{y:{beginAtZero:true}} }
});
const ctx2 = document.getElementById('pieChart').getContext('2d');
new Chart(ctx2, {
  type: 'doughnut',
  data: {
    labels: ['Kering','Basah','Olahan','Pupuk'],
    datasets: [{ data:[40,25,20,15], backgroundColor:['#0B5ED7','#2E8B57','#fd7e14','#6f42c1'] }]
  },
  options: { responsive:true, plugins:{legend:{position:'bottom'}} }
});
</script>
<?php include '../includes/footer.php'; ?>
