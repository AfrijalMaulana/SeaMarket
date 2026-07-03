<?php
require_once '../config/app.php';
require_once '../config/session.php';
redirect_if_logged_in();
$pageTitle = 'Login';
include '../includes/header.php';
include '../includes/navbar.php';
?>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow border-0" style="border-radius:16px;overflow:hidden;">
        <div class="card-header text-white text-center py-4" style="background:linear-gradient(135deg,#0B5ED7,#2E8B57);">
          <img src="<?= BASE_URL ?>assets/images/logo.png" alt="SeaMarket" width="50" class="mb-2" onerror="this.style.display='none'">
          <h3 class="mb-1 fw-bold">Selamat Datang</h3>
          <p class="mb-0 text-white-50 small">Login ke akun SeaMarket Anda</p>
        </div>
        <div class="card-body p-4">
          <?php include '../includes/alert.php'; ?>
          <form method="POST" action="">
            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com" required autofocus>
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-semibold">Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                  <i class="bi bi-eye"></i>
                </button>
              </div>
            </div>
            <div class="mb-4 d-flex justify-content-between align-items-center">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                <label class="form-check-label" for="rememberMe">Ingat saya</label>
              </div>
              <a href="#" class="text-decoration-none text-primary small">Lupa password?</a>
            </div>
            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-semibold">
                <i class="bi bi-box-arrow-in-right me-2"></i>Login
              </button>
            </div>
            <hr class="my-3">
            <p class="text-center text-muted mb-0">Belum punya akun?
              <a href="register.php" class="text-primary fw-semibold text-decoration-none">Daftar sekarang</a>
            </p>
          </form>
        </div>
      </div>
      <!-- Demo credentials -->
      <div class="card mt-3 border-0 bg-light">
        <div class="card-body py-2 px-3">
          <p class="mb-1 small fw-semibold text-muted"><i class="bi bi-info-circle me-1"></i>Demo Login:</p>
          <p class="mb-0 small text-muted">Admin: <code>admin@seamarket.id</code> / <code>Admin@1234</code></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
