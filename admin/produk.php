<?php
require_once '../config/app.php';
require_once '../config/session.php';
require_role('admin');
$pageTitle = 'Manajemen Produk';
$role = 'admin';
$activePage = 'produk';
include '../includes/header.php';
include '../includes/sidebar.php';
?>
<main style="margin-left:250px; min-height:100vh; background:#f4f7fb;">
  <div class="p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-0">Manajemen Produk</h4>
        <small class="text-muted">Semua produk dari seluruh penjual</small>
      </div>
    </div>

    <?php include '../includes/alert.php'; ?>

    <!-- Filter -->
    <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
      <div class="card-body">
        <div class="row g-3">
          <div class="col-md-5">
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control" id="searchProd" placeholder="Cari nama produk...">
            </div>
          </div>
          <div class="col-md-3">
            <select class="form-select" id="filterCat">
              <option value="">Semua Kategori</option>
              <option>Rumput Laut Kering</option>
              <option>Rumput Laut Basah</option>
              <option>Olahan Rumput Laut</option>
              <option>Pupuk Organik</option>
            </select>
          </div>
          <div class="col-md-3">
            <select class="form-select">
              <option>Semua Status</option>
              <option>Aktif</option>
              <option>Non-Aktif</option>
              <option>Habis</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- Products Table -->
    <div class="card border-0 shadow-sm" style="border-radius:12px;">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover align-middle" id="prodTable">
            <thead class="table-light">
              <tr><th>#</th><th>Produk</th><th>Penjual</th><th>Kategori</th><th>Harga</th><th>Stok</th><th>Status</th><th>Aksi</th></tr>
            </thead>
            <tbody>
              <?php
              $products = [
                [1,'Rumput Laut Kering Grade A','Ahmad Faruq','Kering','Rp 120.000',50,'active'],
                [2,'Agar-Agar Segar Premium','Budi Santoso','Olahan','Rp 85.000',30,'active'],
                [3,'Rumput Laut Basah Segar','Citra Lestari','Basah','Rp 45.000',0,'sold_out'],
                [4,'Karaginan Olahan','Dewi Rahayu','Olahan','Rp 200.000',15,'active'],
                [5,'Pupuk Rumput Laut Organik','Eko Prasetyo','Pupuk','Rp 95.000',80,'inactive'],
              ];
              $sBadge = ['active'=>'success','sold_out'=>'danger','inactive'=>'secondary'];
              $sLabel = ['active'=>'Aktif','sold_out'=>'Habis','inactive'=>'Non-Aktif'];
              foreach ($products as [$id,$name,$seller,$cat,$price,$stock,$status]):?>
              <tr>
                <td><?= $id ?></td>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <img src="<?= BASE_URL ?>assets/images/placeholder.png" width="40" height="40" class="rounded" style="object-fit:cover;" onerror="this.src='https://via.placeholder.com/40/0B5ED7/fff?text=P'">
                    <span class="fw-semibold"><?= $name ?></span>
                  </div>
                </td>
                <td class="text-muted small"><?= $seller ?></td>
                <td><span class="badge bg-light text-dark border"><?= $cat ?></span></td>
                <td class="fw-semibold"><?= $price ?></td>
                <td><?= $stock ?> kg</td>
                <td><span class="badge bg-<?= $sBadge[$status] ?>"><?= $sLabel[$status] ?></span></td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <button class="btn btn-outline-primary"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
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
document.getElementById('searchProd').addEventListener('input', function() {
  const q = this.value.toLowerCase();
  document.querySelectorAll('#prodTable tbody tr').forEach(r => {
    r.style.display = r.textContent.toLowerCase().includes(q) ? '' : 'none';
  });
});
</script>
<?php include '../includes/footer.php'; ?>
