<header class="topbar">
  <div>
    <h1 class="page-title">
      <?= htmlspecialchars($pageTitle ?? 'Dashboard') ?>
    </h1>

    <div class="subtitle">
      <?= htmlspecialchars($pageDescription ?? 'Chào mừng bạn quay lại!') ?>
    </div>
  </div>

  <div class="admin-info">
    <div class="avatar">
      <i class="bi bi-person"></i>
    </div>

    <div class="admin-text">
      <div class="fw-bold">Quản trị viên</div>
      <small class="muted">Administrator</small>
    </div>
  </div>
</header>