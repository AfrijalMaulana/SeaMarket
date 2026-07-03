<?php
/**
 * navbar.php – Sticky top navigation bar for SeaMarket.
 * Shows Login/Register buttons if not logged in.
 * Shows user dropdown with role-based dashboard link if logged in.
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: linear-gradient(135deg,#0B5ED7,#2E8B57);">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="<?= BASE_URL ?>index.php">
      <img src="<?= BASE_URL ?>assets/images/logo.png" alt="SeaMarket" width="30" height="30" onerror="this.style.display='none'">
      <span>SeaMarket</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
      aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>index.php#about">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>index.php#products">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>index.php#how-it-works">Cara Kerja</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>index.php#contact">Kontak</a></li>
      </ul>
      <div class="d-flex align-items-center gap-2">
        <?php if (!empty($_SESSION['user_id'])): ?>
          <?php $role = $_SESSION['user_role'] ?? 'customer'; ?>
          <div class="dropdown">
            <button class="btn btn-light btn-sm dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown">
              <i class="bi bi-person-circle"></i>
              <?= htmlspecialchars($_SESSION['user_name'] ?? 'User') ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="<?= BASE_URL ?><?= $role ?>/dashboard.php"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="<?= BASE_URL ?>auth/logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
            </ul>
          </div>
        <?php else: ?>
          <a class="btn btn-outline-light btn-sm" href="<?= BASE_URL ?>auth/login.php">Login</a>
          <a class="btn btn-light btn-sm" href="<?= BASE_URL ?>auth/register.php">Daftar</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>
