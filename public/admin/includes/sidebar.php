<?php
$activePage = $activePage ?? 'dashboard';

$menuItems = [
  ['key' => 'dashboard', 'label' => 'Dashboard', 'icon' => 'bi-grid', 'url' => 'index.php'],
  ['key' => 'categories', 'label' => 'Danh mục', 'icon' => 'bi-tags', 'url' => 'categories.php'],
  ['key' => 'products', 'label' => 'Sản phẩm', 'icon' => 'bi-box-seam', 'url' => 'products.php'],
  ['key' => 'orders', 'label' => 'Đơn hàng', 'icon' => 'bi-receipt', 'url' => 'orders.php'],
  ['key' => 'customers', 'label' => 'Khách hàng', 'icon' => 'bi-people', 'url' => 'customers.php'],
];
?>

<aside class="sidebar">
  <div class="brand">COSMETICS <span>BEAUTY</span></div>

  <div class="menu-label">TỔNG QUAN</div>

  <a class="menu-link <?= $activePage === 'dashboard' ? 'active' : '' ?>"
    href="index.php">
    <i class="bi bi-grid"></i>
    <span>Dashboard</span>
  </a>

  <div class="menu-label">QUẢN LÝ CỬA HÀNG</div>

  <?php foreach ($menuItems as $item): ?>
    <?php if ($item['key'] === 'dashboard') continue; ?>

    <a class="menu-link <?= $activePage === $item['key'] ? 'active' : '' ?>"
      href="<?= htmlspecialchars($item['url']) ?>">
      <i class="bi <?= htmlspecialchars($item['icon']) ?>"></i>
      <span><?= htmlspecialchars($item['label']) ?></span>
    </a>
  <?php endforeach; ?>

  <div class="menu-label">HỆ THỐNG</div>

  <a class="menu-link <?= $activePage === 'settings' ? 'active' : '' ?>"
    href="settings.php">
    <i class="bi bi-gear"></i>
    <span>Cài đặt</span>
  </a>
</aside>