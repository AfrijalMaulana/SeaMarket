<?php
/**
 * footer.php – site footer used across all SeaMarket pages.
 * Includes Bootstrap JS, custom app.js, and closes body/html tags.
 */
?>
<footer class="bg-dark text-white py-4 mt-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
        <img src="<?= BASE_URL ?>assets/images/logo.png" alt="SeaMarket" width="40" class="mb-2" onerror="this.style.display='none'">
        <p class="mb-0 fw-semibold">SeaMarket</p>
        <p class="small text-muted mb-0">Platform pemasaran hasil panen rumput laut.</p>
      </div>
      <div class="col-md-4 text-center mb-3 mb-md-0">
        <p class="mb-1 small"><i class="bi bi-geo-alt me-1"></i>Jl. Pantai Indah No. 10, Jakarta</p>
        <p class="mb-1 small"><i class="bi bi-envelope me-1"></i>info@seamarket.id</p>
        <p class="mb-0 small"><i class="bi bi-telephone me-1"></i>+62 21 1234 5678</p>
      </div>
      <div class="col-md-4 text-center text-md-end">
        <div class="mb-2">
          <a href="#" class="text-white me-3 fs-5"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white me-3 fs-5"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-twitter-x"></i></a>
        </div>
        <p class="mt-2 mb-0 small text-muted">&copy; 2026 SeaMarket. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap Bundle JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc4s9bIOgUxi8T/jzmR57sCFU4tBkVE1Y4MsLdMgRkpU" crossorigin="anonymous"></script>
<!-- Custom JS -->
<script src="<?= BASE_URL ?>assets/js/app.js"></script>
</body>
</html>
