<?php
require_once 'config/app.php';
require_once 'config/session.php';
$pageTitle = 'Beranda';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/alert.php';
?>

<!-- Hero Section -->
<section class="py-5 text-center text-white position-relative overflow-hidden" style="background: linear-gradient(135deg,#0B5ED7 0%,#2E8B57 100%); min-height: 80vh; display:flex; align-items:center;">
  <div class="container position-relative z-1">
    <div class="row align-items-center">
      <div class="col-lg-6 text-start">
        <span class="badge bg-white text-primary mb-3 px-3 py-2 fs-6 rounded-pill">🌊 Platform Rumput Laut #1 Indonesia</span>
        <h1 class="display-4 fw-bold mb-4">Pasarkan Hasil Panen<br>Rumput Laut ke<br><span style="color:#a8f5c8;">Seluruh Indonesia</span></h1>
        <p class="lead mb-4 text-white-50">SeaMarket membantu petani rumput laut memasarkan hasil panen mereka secara mudah, cepat, dan dengan harga yang transparan.</p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="#products" class="btn btn-light btn-lg px-4 rounded-pill fw-semibold">
            <i class="bi bi-bag me-2"></i>Belanja Sekarang
          </a>
          <a href="<?= BASE_URL ?>auth/register.php" class="btn btn-outline-light btn-lg px-4 rounded-pill">
            <i class="bi bi-shop me-2"></i>Jadi Penjual
          </a>
        </div>
        <div class="d-flex gap-4 mt-4">
          <div><div class="fw-bold fs-4">500+</div><div class="small text-white-50">Penjual</div></div>
          <div><div class="fw-bold fs-4">10K+</div><div class="small text-white-50">Pembeli</div></div>
          <div><div class="fw-bold fs-4">50K+</div><div class="small text-white-50">Transaksi</div></div>
        </div>
      </div>
      <div class="col-lg-6 d-none d-lg-flex justify-content-center">
        <img src="<?= BASE_URL ?>assets/images/hero.png" alt="SeaMarket Hero" class="img-fluid" style="max-height:420px;" onerror="this.style.display='none'">
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Tentang <span class="text-primary">SeaMarket</span></h2>
        <p class="text-muted">SeaMarket merupakan platform yang mempertemukan petani atau penjual rumput laut dengan pembeli dari seluruh Indonesia. Kami mengatasi pemasaran konvensional, ketergantungan pada pengepul, dan harga jual yang tidak optimal.</p>
        <p class="text-muted">Dengan teknologi modern, petani dapat langsung terhubung dengan pembeli tanpa perantara, sehingga keuntungan lebih besar dan harga lebih adil.</p>
        <a href="<?= BASE_URL ?>auth/register.php" class="btn btn-primary mt-2">Bergabung Sekarang</a>
      </div>
      <div class="col-md-6">
        <div class="row g-3">
          <div class="col-6"><div class="card border-0 shadow-sm text-center p-3"><i class="bi bi-people-fill display-5 text-primary mb-2"></i><div class="fw-semibold">Komunitas Petani</div></div></div>
          <div class="col-6"><div class="card border-0 shadow-sm text-center p-3"><i class="bi bi-graph-up-arrow display-5 text-success mb-2"></i><div class="fw-semibold">Harga Optimal</div></div></div>
          <div class="col-6"><div class="card border-0 shadow-sm text-center p-3"><i class="bi bi-shield-check display-5 text-warning mb-2"></i><div class="fw-semibold">Transaksi Aman</div></div></div>
          <div class="col-6"><div class="card border-0 shadow-sm text-center p-3"><i class="bi bi-headset display-5 text-info mb-2"></i><div class="fw-semibold">Support 24/7</div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5" style="background:linear-gradient(135deg,#f0f8ff,#e8f5e9);">
  <div class="container">
    <h2 class="text-center fw-bold mb-2">Keunggulan SeaMarket</h2>
    <p class="text-center text-muted mb-5">Kenapa ribuan petani memilih kami?</p>
    <div class="row g-4">
      <?php
      $features = [
        ['bi-award-fill','#0B5ED7','Produk Berkualitas','Semua produk melewati seleksi kualitas ketat sebelum ditampilkan.'],
        ['bi-currency-dollar','#2E8B57','Harga Transparan','Tidak ada biaya tersembunyi. Harga langsung dari petani ke pembeli.'],
        ['bi-shield-lock-fill','#fd7e14','Transaksi Aman','Sistem escrow memastikan uang aman sampai barang diterima.'],
        ['bi-truck','#6f42c1','Pengiriman Cepat','Mitra logistik terpercaya di seluruh Indonesia.'],
      ];
      foreach ($features as [$icon, $color, $title, $desc]): ?>
      <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 border-0 shadow-sm p-3" style="border-top:4px solid <?= $color ?> !important;">
          <div class="card-body">
            <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:70px;height:70px;background:<?= $color ?>20;">
              <i class="bi <?= $icon ?> fs-2" style="color:<?= $color ?>;"></i>
            </div>
            <h5 class="card-title fw-semibold"><?= $title ?></h5>
            <p class="card-text text-muted small"><?= $desc ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- How It Works -->
<section id="how-it-works" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-2">Cara Kerja</h2>
    <p class="text-center text-muted mb-5">4 langkah mudah untuk mulai berbelanja</p>
    <div class="row justify-content-center">
      <?php
      $steps = [
        ['bi-person-plus-fill','Daftar','Buat akun gratis sebagai pembeli atau penjual.'],
        ['bi-search','Cari Produk','Temukan produk rumput laut sesuai kebutuhan.'],
        ['bi-cart-check-fill','Checkout','Pesan dan lakukan pembayaran yang aman.'],
        ['bi-truck','Terima Produk','Produk dikirim langsung ke lokasi Anda.'],
      ];
      foreach ($steps as $i => [$icon, $title, $desc]): ?>
      <div class="col-md-3 text-center position-relative mb-4">
        <?php if ($i < 3): ?>
        <div class="d-none d-md-block position-absolute top-0" style="right:-15%;top:30px!important;width:30%;height:2px;background:linear-gradient(90deg,#0B5ED7,#2E8B57);z-index:0;"></div>
        <?php endif; ?>
        <div class="step-circle text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center shadow" style="width:70px;height:70px;background:linear-gradient(135deg,#0B5ED7,#2E8B57);font-size:1.5rem;position:relative;z-index:1;">
          <i class="bi <?= $icon ?>"></i>
        </div>
        <h5 class="fw-semibold"><?= $title ?></h5>
        <p class="text-muted small"><?= $desc ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Featured Products -->
<section id="products" class="py-5 bg-light">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h2 class="fw-bold mb-1">Produk Unggulan</h2>
        <p class="text-muted mb-0">Produk rumput laut terlaris pilihan pembeli</p>
      </div>
      <a href="<?= BASE_URL ?>customer/produk.php" class="btn btn-outline-primary">Lihat Semua</a>
    </div>
    <div class="row g-4">
      <?php
      $products = [
        ['Rumput Laut Kering Grade A','Lombok, NTB',120000,''],
        ['Agar-Agar Segar Premium','Makassar, Sulsel',85000,''],
        ['Rumput Laut Basah Segar','Takalar, Sulsel',45000,''],
        ['Karaginan Olahan','Sumenep, Jatim',200000,''],
        ['Rumput Laut Kering Kotoni','Nunukan, Kaltara',110000,''],
        ['Nori Rumput Laut Lokal','Jepara, Jateng',75000,''],
        ['Rumput Laut Spinosum','Flores, NTT',60000,''],
        ['Pupuk Rumput Laut Organik','Banyuwangi, Jatim',95000,''],
      ];
      foreach ($products as $i => [$name, $location, $price, $img]): ?>
      <div class="col-md-3 col-sm-6">
        <div class="card h-100 shadow-sm border-0 product-card" style="border-radius:12px;overflow:hidden;transition:.3s;">
          <div class="position-relative">
            <img src="<?= BASE_URL ?>assets/images/placeholder.png" class="card-img-top" alt="<?= htmlspecialchars($name) ?>" style="height:180px;object-fit:cover;" onerror="this.src='https://via.placeholder.com/300x180/0B5ED7/ffffff?text=Produk'">
            <span class="badge bg-primary position-absolute top-0 end-0 m-2">Unggulan</span>
          </div>
          <div class="card-body d-flex flex-column">
            <h6 class="card-title fw-semibold"><?= htmlspecialchars($name) ?></h6>
            <p class="text-primary fw-bold mb-1">Rp <?= number_format($price) ?></p>
            <p class="card-text text-muted small mb-1"><i class="bi bi-shop me-1"></i>Penjual <?= $i+1 ?></p>
            <p class="card-text text-muted small mb-3"><i class="bi bi-geo-alt me-1"></i><?= $location ?></p>
            <div class="mt-auto d-flex gap-2">
              <a href="<?= BASE_URL ?>customer/product-detail.php?id=<?= $i+1 ?>" class="btn btn-primary btn-sm flex-grow-1">
                <i class="bi bi-eye me-1"></i>Detail
              </a>
              <a href="<?= BASE_URL ?>customer/keranjang.php?add=<?= $i+1 ?>" class="btn btn-outline-primary btn-sm">
                <i class="bi bi-cart-plus"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-2">Testimoni Pelanggan</h2>
    <p class="text-center text-muted mb-5">Apa kata mereka tentang SeaMarket?</p>
    <div class="row g-4">
      <?php
      $testimonials = [
        ['Budi Santoso','Petani Rumput Laut, Lombok','SeaMarket memudahkan saya menemukan pembeli langsung. Pendapatan saya naik 40% dibanding jual ke pengepul!','bi-star-fill'],
        ['Siti Lestari','Pengusaha Kuliner, Jakarta','Harga transparan dan produk berkualitas. Tidak ada perantara yang merugikan. Sangat puas!','bi-star-fill'],
        ['Ahmad Ridwan','Importir Makanan, Surabaya','Pengiriman tepat waktu, produk sampai dalam kondisi sangat baik. Sudah order 10x!','bi-star-fill'],
      ];
      foreach ($testimonials as [$name, $role, $text, $icon]): ?>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-2">
          <div class="card-body">
            <div class="text-warning mb-3">
              <?php for($s=0;$s<5;$s++) echo '<i class="bi bi-star-fill"></i>'; ?>
            </div>
            <p class="card-text fst-italic">"<?= $text ?>"</p>
            <div class="d-flex align-items-center gap-3 mt-3">
              <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                <i class="bi bi-person-fill text-primary fs-4"></i>
              </div>
              <div>
                <div class="fw-semibold"><?= $name ?></div>
                <div class="text-muted small"><?= $role ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section id="contact" class="py-5 text-center text-white" style="background:linear-gradient(135deg,#0B5ED7,#2E8B57);">
  <div class="container">
    <h2 class="fw-bold mb-3">Bergabunglah dengan SeaMarket Sekarang!</h2>
    <p class="lead mb-4 text-white-50">Mulai jual atau beli produk rumput laut berkualitas dari seluruh Indonesia.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      <a href="<?= BASE_URL ?>auth/register.php" class="btn btn-light btn-lg px-5 rounded-pill fw-semibold">Daftar Gratis</a>
      <a href="<?= BASE_URL ?>auth/login.php" class="btn btn-outline-light btn-lg px-5 rounded-pill">Login</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
