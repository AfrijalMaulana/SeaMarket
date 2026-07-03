<?php
/**
 * alert.php – Dynamic flash alert component.
 * Reads flash message from session and displays Bootstrap alert.
 * Automatically dismissed after 5 seconds via JS.
 */
$flash = get_flash();
if ($flash): ?>
<div class="container mt-3">
  <div class="alert alert-<?= htmlspecialchars($flash['type']) ?> alert-dismissible fade show d-flex align-items-center" role="alert" id="flash-alert">
    <?php
      $icons = ['success'=>'bi-check-circle-fill','danger'=>'bi-x-circle-fill','warning'=>'bi-exclamation-triangle-fill','info'=>'bi-info-circle-fill'];
      $icon  = $icons[$flash['type']] ?? 'bi-bell-fill';
    ?>
    <i class="bi <?= $icon ?> me-2 flex-shrink-0"></i>
    <div><?= htmlspecialchars($flash['message']) ?></div>
    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<script>
  setTimeout(() => {
    const alert = document.getElementById('flash-alert');
    if (alert) bootstrap.Alert.getOrCreateInstance(alert).close();
  }, 5000);
</script>
<?php endif; ?>
