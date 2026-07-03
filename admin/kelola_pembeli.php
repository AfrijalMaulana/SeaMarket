<?php
require_once '../config/app.php';
require_once '../config/session.php';
require_role('admin');
$pageTitle = 'Kelola Pembeli';
$role = 'admin';
$activePage = 'kelola_pembeli';
include '../includes/header.php';
include '../includes/sidebar.php';
?>
<main style="margin-left:250px; min-height:100vh; background:#f4f7fb;">
  <div class="p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-0">Kelola Pembeli</h4>
        <small class="text-muted">Daftar semua pembeli terdaftar</small>
      </div>
      <span class="badge bg-success fs-6 px-3">132 Pembeli</span>
    </div>

    <?php include '../includes/alert.php'; ?>

    <!-- Search -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
      <div class="card-body">
        <div class="input-group" style="max-width:400px;">
          <span class="input-group-text"><i class="bi bi-search"></i></span>
          <input type="text" class="form-control" id="searchBuyer" placeholder="Cari nama atau email pembeli...">
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="card border-0 shadow-sm" style="border-radius:12px;">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover align-middle" id="buyerTable">
            <thead class="table-light">
              <tr><th>#</th><th>Nama</th><th>Email</th><th>Telepon</th><th>Total Order</th><th>Total Belanja</th><th>Bergabung</th><th>Aksi</th></tr>
            </thead>
            <tbody>
              <?php
              $buyers = [
                [1,'Andi Pratama','andi@mail.com','081111111111',5,'Rp 750.000','01 Jan 2026'],
                [2,'Rina Sari','rina@mail.com','082222222222',12,'Rp 2.100.000','15 Feb 2026'],
                [3,'Deni Kusuma','deni@mail.com','083333333333',3,'Rp 285.000','10 Mar 2026'],
                [4,'Maya Indah','maya@mail.com','084444444444',8,'Rp 1.340.000','20 Apr 2026'],
                [5,'Fajar Rizki','fajar@mail.com','085555555555',2,'Rp 190.000','05 Mei 2026'],
              ];
              foreach ($buyers as [$id,$name,$email,$phone,$orders,$spent,$joined]):?>
              <tr>
                <td><?= $id ?></td>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width:36px;height:36px;flex-shrink:0;">
                      <i class="bi bi-person-fill text-success"></i>
                    </div>
                    <span class="fw-semibold"><?= $name ?></span>
                  </div>
                </td>
                <td class="text-muted"><?= $email ?></td>
                <td><?= $phone ?></td>
                <td><span class="badge bg-info"><?= $orders ?> order</span></td>
                <td class="fw-semibold text-success"><?= $spent ?></td>
                <td class="text-muted small"><?= $joined ?></td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <button class="btn btn-outline-primary" title="Detail"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-outline-danger" title="Nonaktifkan"><i class="bi bi-ban"></i></button>
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
<script>
document.getElementById('searchBuyer').addEventListener('input', function() {
  const q = this.value.toLowerCase();
  document.querySelectorAll('#buyerTable tbody tr').forEach(r => {
    r.style.display = r.textContent.toLowerCase().includes(q) ? '' : 'none';
  });
});
</script>
<?php include '../includes/footer.php'; ?>
