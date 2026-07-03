<?php
/**
 * sidebar.php – Reusable left sidebar for dashboards.
 * Set $role = 'admin'|'seller'|'customer' and $activePage before including.
 */

$icons = [
    'dashboard'     => 'bi-speedometer2',
    'profil'        => 'bi-person-circle',
    'produk'        => 'bi-box-seam',
    'tambah_produk' => 'bi-plus-circle',
    'pesanan'       => 'bi-cart-check',
    'riwayat'       => 'bi-clock-history',
    'laporan'       => 'bi-bar-chart-line',
    'kelola_penjual'=> 'bi-people',
    'kelola_pembeli'=> 'bi-person-lines-fill',
    'keranjang'     => 'bi-cart3',
    'logout'        => 'bi-box-arrow-right',
];

$menu = [
    'admin' => [
        'dashboard'      => 'Dashboard',
        'kelola_penjual' => 'Kelola Penjual',
        'kelola_pembeli' => 'Kelola Pembeli',
        'produk'         => 'Produk',
        'pesanan'        => 'Pesanan',
        'laporan'        => 'Laporan',
        'logout'         => 'Logout',
    ],
    'seller' => [
        'dashboard'     => 'Dashboard',
        'profil'        => 'Profil',
        'produk'        => 'Produk Saya',
        'tambah_produk' => 'Tambah Produk',
        'pesanan'       => 'Pesanan',
        'riwayat'       => 'Riwayat Penjualan',
        'logout'        => 'Logout',
    ],
    'customer' => [
        'dashboard' => 'Beranda',
        'produk'    => 'Produk',
        'keranjang' => 'Keranjang',
        'riwayat'   => 'Riwayat Pembelian',
        'profil'    => 'Profil',
        'logout'    => 'Logout',
    ],
];

$role       = $role ?? 'admin';
$activePage = $activePage ?? 'dashboard';
$currentMenu = $menu[$role] ?? $menu['admin'];
?>
<aside id="sidebar" class="d-flex flex-column" style="width:250px; min-height:100vh; background:linear-gradient(180deg,#0B5ED7 0%,#1a3a6b 100%); position:fixed; top:0; left:0; z-index:100; transition:.3s;">
  <div class="p-3 border-bottom border-white border-opacity-25">
    <a href="<?= BASE_URL ?>index.php" class="text-white text-decoration-none d-flex align-items-center gap-2">
      <img src="<?= BASE_URL ?>assets/images/logo.png" alt="SeaMarket" width="32" height="32" onerror="this.style.display='none'">
      <span class="fw-bold fs-5">SeaMarket</span>
    </a>
    <div class="mt-2 d-flex align-items-center gap-2">
      <div class="rounded-circle bg-white bg-opacity-25 d-flex align-items-center justify-content-center" style="width:38px;height:38px;">
        <i class="bi bi-person-fill text-white"></i>
      </div>
      <div>
        <div class="text-white fw-semibold small"><?= htmlspecialchars($_SESSION['user_name'] ?? 'User') ?></div>
        <span class="badge bg-white text-primary small"><?= ucfirst($role) ?></span>
      </div>
    </div>
  </div>
  <nav class="flex-grow-1 p-3">
    <ul class="nav flex-column gap-1">
      <?php foreach ($currentMenu as $key => $label):
        $isActive = ($activePage === $key);
        $link = ($key === 'logout')
                  ? BASE_URL . 'auth/logout.php'
                  : BASE_URL . "{$role}/{$key}.php";
        $icon = $icons[$key] ?? 'bi-circle';
        $isLogout = ($key === 'logout');
      ?>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2 rounded px-3 py-2 <?= $isActive ? 'bg-white text-primary fw-semibold' : 'text-white' ?> <?= $isLogout ? 'mt-3 text-danger' : '' ?>"
           href="<?= $link ?>"
           style="transition:.2s; <?= !$isActive && !$isLogout ? 'opacity:.85;' : '' ?>">
          <i class="bi <?= $icon ?> fs-5"></i>
          <span><?= $label ?></span>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>
  <div class="p-3 border-top border-white border-opacity-25">
    <small class="text-white text-opacity-50">SeaMarket v1.0</small>
  </div>
</aside>
