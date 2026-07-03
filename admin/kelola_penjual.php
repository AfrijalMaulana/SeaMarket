<?php
require_once '../config/app.php';
require_once '../config/session.php';
require_role('admin');
$pageTitle = 'Kelola Penjual';
$role = 'admin';
$activePage = 'kelola_penjual';
include '../includes/header.php';
include '../includes/sidebar.php';
?>
<main style="margin-left:250px; min-height:100vh; background:#f4f7fb;">
  <div class="p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-0">Kelola Penjual</h4>
        <small class="text-muted">Daftar semua penjual terdaftar</small>
      </div>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSellerModal">
        <i class="bi bi-plus-circle me-1"></i>Tambah Penjual
      </button>
    </div>

    <?php include '../includes/alert.php'; ?>

    <!-- Search & Filter -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
      <div class="card-body">
        <div class="row g-3">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control" id="searchSeller" placeholder="Cari nama atau email penjual...">
            </div>
          </div>
          <div class="col-md-3">
            <select class="form-select" id="filterStatus">
              <option value="">Semua Status</option>
              <option value="active">Aktif</option>
              <option value="inactive">Non-Aktif</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="card border-0 shadow-sm" style="border-radius:12px;">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover align-middle" id="sellerTable">
            <thead class="table-light">
              <tr>
                <th>#</th><th>Nama</th><th>Email</th><th>Telepon</th>
                <th>Jumlah Produk</th><th>Status</th><th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sellers = [
                [1,'Ahmad Faruq','ahmad@mail.com','081234567890',12,'active'],
                [2,'Budi Santoso','budi@mail.com','082345678901',8,'active'],
                [3,'Citra Lestari','citra@mail.com','083456789012',5,'inactive'],
                [4,'Dewi Rahayu','dewi@mail.com','084567890123',15,'active'],
                [5,'Eko Prasetyo','eko@mail.com','085678901234',3,'active'],
              ];
              foreach ($sellers as [$id,$name,$email,$phone,$products,$status]):
                $badge = $status === 'active' ? 'success' : 'secondary';
              ?>
              <tr>
                <td><?= $id ?></td>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width:36px;height:36px;flex-shrink:0;">
                      <i class="bi bi-person-fill text-primary"></i>
                    </div>
                    <span class="fw-semibold"><?= $name ?></span>
                  </div>
                </td>
                <td class="text-muted"><?= $email ?></td>
                <td><?= $phone ?></td>
                <td><span class="badge bg-info"><?= $products ?> produk</span></td>
                <td><span class="badge bg-<?= $badge ?>"><?= ucfirst($status) ?></span></td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <button class="btn btn-outline-primary" title="Detail"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-outline-warning" title="Edit"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-outline-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Modal Tambah Penjual -->
<div class="modal fade" id="addSellerModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content border-0">
      <div class="modal-header" style="background:linear-gradient(135deg,#0B5ED7,#2E8B57);">
        <h5 class="modal-title text-white"><i class="bi bi-person-plus me-2"></i>Tambah Penjual</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <form method="POST" action="">
          <div class="mb-3">
            <label class="form-label fw-semibold">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" placeholder="Nama penjual" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">No. Telepon</label>
            <input type="text" class="form-control" name="phone" placeholder="08xxxxxxxxxx">
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Min. 8 karakter" required>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById('searchSeller').addEventListener('input', function() {
  const q = this.value.toLowerCase();
  document.querySelectorAll('#sellerTable tbody tr').forEach(row => {
    row.style.display = row.textContent.toLowerCase().includes(q) ? '' : 'none';
  });
});
</script>
<?php include '../includes/footer.php'; ?>
