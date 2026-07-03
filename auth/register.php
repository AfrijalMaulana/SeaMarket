<?php
require_once '../config/app.php';
require_once '../config/session.php';
redirect_if_logged_in();
$pageTitle = 'Daftar Akun';
include '../includes/header.php';
include '../includes/navbar.php';
?>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card shadow border-0" style="border-radius:16px;overflow:hidden;">
        <div class="card-header text-white text-center py-4" style="background:linear-gradient(135deg,#0B5ED7,#2E8B57);">
          <h3 class="mb-1 fw-bold"><i class="bi bi-person-plus me-2"></i>Daftar Akun</h3>
          <p class="mb-0 text-white-50 small">Bergabung dengan SeaMarket sekarang!</p>
        </div>
        <div class="card-body p-4">
          <?php include '../includes/alert.php'; ?>
          <form method="POST" action="">
            <div class="mb-3">
              <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label fw-semibold">No. Telepon</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="08xxxxxxxxxx">
              </div>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label fw-semibold">Daftar Sebagai</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                <select class="form-select" id="role" name="role">
                  <option value="customer">Pembeli (Customer)</option>
                  <option value="seller">Penjual (Seller)</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-semibold">Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Minimal 8 karakter" required minlength="8">
                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                  <i class="bi bi-eye"></i>
                </button>
              </div>
              <div id="passwordStrength" class="progress mt-2" style="height:5px;">
                <div class="progress-bar" id="strengthBar" role="progressbar" style="width:0%;"></div>
              </div>
            </div>
            <div class="mb-4">
              <label for="confirm_password" class="form-label fw-semibold">Konfirmasi Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Ulangi password" required>
              </div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="agreeTerms" required>
              <label class="form-check-label" for="agreeTerms">
                Saya setuju dengan <a href="#" class="text-primary">Syarat & Ketentuan</a> SeaMarket
              </label>
            </div>
            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-semibold">
                <i class="bi bi-check-circle me-2"></i>Daftar Sekarang
              </button>
            </div>
            <p class="text-center text-muted">Sudah punya akun? <a href="login.php" class="text-primary fw-semibold text-decoration-none">Login di sini</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
// Password strength indicator
document.getElementById('password').addEventListener('input', function() {
  const val = this.value;
  const bar = document.getElementById('strengthBar');
  let strength = 0;
  if (val.length >= 8) strength++;
  if (/[A-Z]/.test(val)) strength++;
  if (/[0-9]/.test(val)) strength++;
  if (/[^A-Za-z0-9]/.test(val)) strength++;
  const colors = ['','danger','warning','info','success'];
  const widths = ['0%','25%','50%','75%','100%'];
  bar.style.width = widths[strength];
  bar.className = 'progress-bar bg-' + (colors[strength] || 'danger');
});
</script>

<?php include '../includes/footer.php'; ?>
