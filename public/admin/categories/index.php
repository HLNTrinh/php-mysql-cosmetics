<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản lý danh mục | BEAUTY+</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <style>
    :root {
      --pink: #df7f9e;
      --pink-dark: #c6537a;
      --pink-light: #fff0f5;
      --text: #45323b;
      --muted: #94828b;
      --border: #f1e5ea;
      --bg: #faf8f9;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: var(--bg);
      color: var(--text);
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    a {
      text-decoration: none;
    }

    /* MENU BÊN TRÁI */
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding: 26px 16px;
      background: linear-gradient(180deg, #fff0f5, #fce4ec);
      border-right: 1px solid #f4dce5;
      overflow-y: auto;
    }

    .brand {
      font-size: 21px;
      font-weight: 800;
      color: #5c3544;
      padding: 0 12px;
      margin-bottom: 34px;
    }

    .brand span {
      color: #df7f9e;
    }

    .menu-label {
      color: #bd8b9e;
      font-size: 10px;
      font-weight: bold;
      letter-spacing: 1.3px;
      margin: 22px 12px 10px;
    }

    .menu-link {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 12px 14px;
      margin-bottom: 5px;
      text-decoration: none;
      color: #795565;
      border-radius: 11px;
      transition: .2s;
    }

    .menu-link i {
      font-size: 17px;
    }

    .menu-link:hover,
    .menu-link.active {
      background: #fff;
      color: var(--pink-dark);
      box-shadow: 0 4px 14px #d96c9112;
    }

    .menu-link.active {
      font-weight: 700;
    }

    /* PHẦN NỘI DUNG */
    .main {
      margin-left: 250px;
      min-height: 100vh;
    }

    .topbar {
      height: 76px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 38px;
      background: white;
      border-bottom: 1px solid var(--border);
    }

    .search {
      width: 320px;
      padding: 11px 15px;
      border: 1px solid var(--border);
      border-radius: 9px;
      outline: none;
      background: #fcfafb;
    }

    .search:focus {
      border-color: var(--pink);
    }

    .avatar {
      display: grid;
      place-items: center;
      width: 39px;
      height: 39px;
      border-radius: 50%;
      background: #f9dce6;
      color: var(--pink-dark);
      font-weight: 700;
    }

    .content {
      padding: 34px 38px;
      max-width: 1500px;
      margin: auto;
    }

    .breadcrumb-text {
      margin-bottom: 12px;
      color: var(--muted);
      font-size: 12px;
    }

    .page-title {
      margin: 0;
      font-size: 27px;
      font-weight: 800;
      letter-spacing: -.5px;
    }

    .page-description {
      margin-top: 9px;
      color: var(--muted);
    }

    .btn-pink {
      padding: 11px 17px;
      color: white;
      background: var(--pink);
      border: 1px solid var(--pink);
      border-radius: 8px;
      font-weight: 600;
    }

    .btn-pink:hover {
      color: white;
      background: var(--pink-dark);
    }

    .btn-outline-pink {
      padding: 8px 12px;
      color: var(--pink-dark);
      background: white;
      border: 1px solid #edc8d5;
      border-radius: 7px;
    }

    .btn-outline-pink:hover {
      color: white;
      background: var(--pink);
    }

    /* THẺ THỐNG KÊ */
    .stat-card {
      height: 100%;
      display: flex;
      align-items: center;
      gap: 15px;
      padding: 20px;
      background: white;
      border: 1px solid var(--border);
      border-radius: 12px;
    }

    .stat-icon {
      display: grid;
      place-items: center;
      width: 48px;
      height: 48px;
      flex-shrink: 0;
      border-radius: 12px;
      background: var(--pink-light);
      color: var(--pink-dark);
      font-size: 22px;
    }

    .stat-label {
      color: var(--muted);
      font-size: 12px;
    }

    .stat-value {
      margin-top: 6px;
      font-size: 24px;
      font-weight: 800;
    }

    /* BẢNG DANH MỤC */
    .table-panel {
      margin-top: 25px;
      overflow: hidden;
      background: white;
      border: 1px solid var(--border);
      border-radius: 13px;
    }

    .table-toolbar {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 15px;
      padding: 21px 23px;
      border-bottom: 1px solid var(--border);
    }

    .table-toolbar h5 {
      margin: 0;
      font-size: 15px;
      font-weight: 800;
    }

    .table-toolbar p {
      margin: 6px 0 0;
      color: var(--muted);
      font-size: 12px;
    }

    .filter-select {
      padding: 10px 12px;
      border: 1px solid var(--border);
      border-radius: 8px;
      color: var(--text);
      background: white;
      outline: none;
    }

    .table {
      margin: 0;
    }

    .table thead th {
      padding: 15px 20px;
      color: #987e89;
      background: #fff8fa;
      border-bottom: 1px solid var(--border);
      font-size: 11px;
      font-weight: 700;
      white-space: nowrap;
    }

    .table tbody td {
      padding: 17px 20px;
      border-bottom: 1px solid #f5edf0;
      vertical-align: middle;
    }

    .table tbody tr:last-child td {
      border-bottom: 0;
    }

    .table tbody tr:hover {
      background: #fffbfc;
    }

    .category-icon {
      display: grid;
      place-items: center;
      width: 43px;
      height: 43px;
      border-radius: 10px;
      background: #fff0f5;
      color: #cb6d8c;
      font-size: 20px;
    }

    .category-name {
      font-weight: 700;
    }

    .category-code {
      margin-top: 5px;
      color: var(--muted);
      font-size: 11px;
    }

    .status {
      display: inline-block;
      padding: 6px 10px;
      border-radius: 20px;
      color: #488b68;
      background: #eaf7ef;
      font-size: 11px;
      font-weight: 700;
    }

    .status.inactive {
      color: #a17a43;
      background: #fff4df;
    }

    .action-btn {
      display: inline-grid;
      place-items: center;
      width: 33px;
      height: 33px;
      margin-right: 4px;
      border: 1px solid var(--border);
      border-radius: 7px;
      background: white;
      color: #88717c;
      cursor: pointer;
    }

    .action-btn:hover {
      border-color: #e9b6c8;
      color: var(--pink-dark);
      background: var(--pink-light);
    }

    .table-footer {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 17px 22px;
      border-top: 1px solid var(--border);
      color: var(--muted);
      font-size: 12px;
    }

    .page-number {
      display: inline-grid;
      place-items: center;
      width: 32px;
      height: 32px;
      margin-left: 4px;
      border: 1px solid var(--border);
      border-radius: 7px;
      background: white;
      color: var(--text);
      cursor: pointer;
    }

    .page-number.active {
      color: white;
      background: var(--pink);
      border-color: var(--pink);
    }

    /* HỘP THÊM DANH MỤC */
    .modal-content {
      border: 0;
      border-radius: 15px;
      overflow: hidden;
    }

    .modal-header {
      background: var(--pink-light);
      border-bottom: 1px solid var(--border);
    }

    .modal-title {
      font-weight: 800;
    }

    .modal-body .form-label {
      font-size: 12px;
      font-weight: 700;
    }

    .modal-body .form-control,
    .modal-body .form-select {
      min-height: 43px;
      border-color: var(--border);
      border-radius: 8px;
      font-size: 13px;
    }

    @media (max-width: 991px) {
      .sidebar {
        width: 76px;
        padding: 22px 10px;
      }

      .logo {
        padding: 0 6px 25px;
        font-size: 18px;
      }

      .logo small,
      .menu-label,
      .menu-link span {
        display: none;
      }

      .menu-link {
        justify-content: center;
        padding: 14px 5px;
      }

      .main {
        margin-left: 76px;
      }

      .content {
        padding: 25px 20px;
      }

      .topbar {
        padding: 0 20px;
      }
    }

    @media (max-width: 575px) {
      .content {
        padding: 22px 12px;
      }

      .topbar {
        padding: 0 12px;
      }

      .search {
        width: 170px;
      }

      .page-title {
        font-size: 23px;
      }

      .table-toolbar {
        padding: 17px;
      }
    }
  </style>
</head>

<body>

  <aside class="sidebar">
    <div class="brand">COSMETICS <span>BEAUTY</span></div>

    <div class="menu-label">TỔNG QUAN</div>
    <a class="menu-link" href="../index.php">
      <i class="bi bi-grid"></i><span>Tổng quan</span>
    </a>

    <div class="menu-label">QUẢN LÝ CỬA HÀNG</div>
    <a class="menu-link active" href="../categories/index.php">
      <i class="bi bi-tags"></i><span>Danh mục</span>
    </a>
    <a class="menu-link " href="../products/index.php">
      <i class="bi bi-box-seam"></i><span>Sản phẩm</span>
    </a>
    <a class="menu-link" href="orders.php">
      <i class="bi bi-receipt"></i><span>Đơn hàng</span>
    </a>
    <a class="menu-link" href="customers.php">
      <i class="bi bi-people"></i><span>Khách hàng</span>
    </a>

    <div class="menu-label">HỆ THỐNG</div>
    <a class="menu-link" href="settings.php">
      <i class="bi bi-gear"></i><span>Cài đặt</span>
    </a>
  </aside>

  <div class="main">
    <header class="topbar">
      <input id="searchInput" class="search" type="search" placeholder="Tìm danh mục...">
      <div class="d-flex align-items-center gap-3">
        <i class="bi bi-bell fs-5 text-secondary"></i>
        <div class="avatar">A</div>
        <div class="d-none d-sm-block">
          <div class="fw-bold small">Admin</div>
          <div class="text-secondary" style="font-size:11px">Quản trị viên</div>
        </div>
      </div>
    </header>

    <main class="content">
      <div class="breadcrumb-text">Quản lý cửa hàng / Danh mục</div>

      <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
          <h1 class="page-title">Quản lý danh mục</h1>
          <p class="page-description mb-0">Sắp xếp và quản lý danh mục sản phẩm mỹ phẩm.</p>
        </div>
        <button class="btn-pink" data-bs-toggle="modal" data-bs-target="#categoryModal">
          <i class="bi bi-plus-lg me-1"></i> Thêm danh mục
        </button>
      </div>

      <div class="row g-3">
        <div class="col-sm-6 col-xl-4">
          <div class="stat-card">
            <div class="stat-icon"><i class="bi bi-tags"></i></div>
            <div>
              <div class="stat-label">Tổng danh mục</div>
              <div class="stat-value" id="totalCount">06</div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="stat-card">
            <div class="stat-icon"><i class="bi bi-check-circle"></i></div>
            <div>
              <div class="stat-label">Đang hoạt động</div>
              <div class="stat-value" id="activeCount">05</div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4">
          <div class="stat-card">
            <div class="stat-icon"><i class="bi bi-box-seam"></i></div>
            <div>
              <div class="stat-label">Tổng sản phẩm minh họa</div>
              <div class="stat-value" id="productCount">128</div>
            </div>
          </div>
        </div>
      </div>

      <section class="table-panel">
        <div class="table-toolbar">
          <div>
            <h5>Danh sách danh mục</h5>
            <p>Thông tin danh mục đang có trong cửa hàng.</p>
          </div>
          <select id="statusFilter" class="filter-select">
            <option value="">Tất cả trạng thái</option>
            <option value="active">Đang hoạt động</option>
            <option value="inactive">Ngừng hoạt động</option>
          </select>
        </div>

        <div class="table-responsive">
          <table class="table" id="categoryTable">
            <thead>
              <tr>
                <th>DANH MỤC</th>
                <th>MÃ DANH MỤC</th>
                <th>SỐ SẢN PHẨM</th>
                <th>TRẠNG THÁI</th>
                <th>NGÀY TẠO</th>
                <th>THAO TÁC</th>
              </tr>
            </thead>
            <tbody id="categoryBody">
              <tr data-status="active">
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="category-icon"><i class="bi bi-droplet"></i></div>
                    <div class="category-name">Chăm sóc da</div>
                  </div>
                </td>
                <td>DM001</td>
                <td>42 sản phẩm</td>
                <td><span class="status">Hoạt động</span></td>
                <td>12/10/2026</td>
                <td><button class="action-btn edit-btn" title="Sửa"><i class="bi bi-pencil"></i></button><button class="action-btn delete-btn" title="Xóa"><i class="bi bi-trash3"></i></button></td>
              </tr>
              <tr data-status="active">
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="category-icon"><i class="bi bi-brush"></i></div>
                    <div class="category-name">Trang điểm</div>
                  </div>
                </td>
                <td>DM002</td>
                <td>28 sản phẩm</td>
                <td><span class="status">Hoạt động</span></td>
                <td>13/10/2026</td>
                <td><button class="action-btn edit-btn" title="Sửa"><i class="bi bi-pencil"></i></button><button class="action-btn delete-btn" title="Xóa"><i class="bi bi-trash3"></i></button></td>
              </tr>
              <tr data-status="active">
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="category-icon"><i class="bi bi-flower1"></i></div>
                    <div class="category-name">Chăm sóc cơ thể</div>
                  </div>
                </td>
                <td>DM003</td>
                <td>19 sản phẩm</td>
                <td><span class="status">Hoạt động</span></td>
                <td>14/10/2026</td>
                <td><button class="action-btn edit-btn" title="Sửa"><i class="bi bi-pencil"></i></button><button class="action-btn delete-btn" title="Xóa"><i class="bi bi-trash3"></i></button></td>
              </tr>
              <tr data-status="active">
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="category-icon"><i class="bi bi-water"></i></div>
                    <div class="category-name">Chăm sóc tóc</div>
                  </div>
                </td>
                <td>DM004</td>
                <td>15 sản phẩm</td>
                <td><span class="status">Hoạt động</span></td>
                <td>15/10/2026</td>
                <td><button class="action-btn edit-btn" title="Sửa"><i class="bi bi-pencil"></i></button><button class="action-btn delete-btn" title="Xóa"><i class="bi bi-trash3"></i></button></td>
              </tr>
              <tr data-status="active">
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="category-icon"><i class="bi bi-stars"></i></div>
                    <div class="category-name">Nước hoa</div>
                  </div>
                </td>
                <td>DM005</td>
                <td>13 sản phẩm</td>
                <td><span class="status">Hoạt động</span></td>
                <td>16/10/2026</td>
                <td><button class="action-btn edit-btn" title="Sửa"><i class="bi bi-pencil"></i></button><button class="action-btn delete-btn" title="Xóa"><i class="bi bi-trash3"></i></button></td>
              </tr>
              <tr data-status="inactive">
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="category-icon"><i class="bi bi-gift"></i></div>
                    <div class="category-name">Bộ quà tặng</div>
                  </div>
                </td>
                <td>DM006</td>
                <td>11 sản phẩm</td>
                <td><span class="status inactive">Ngừng hoạt động</span></td>
                <td>18/10/2026</td>
                <td><button class="action-btn edit-btn" title="Sửa"><i class="bi bi-pencil"></i></button><button class="action-btn delete-btn" title="Xóa"><i class="bi bi-trash3"></i></button></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="table-footer">
          <span id="showCount">Hiển thị 6 danh mục mẫu</span>
          <div>
            <button class="page-number active">1</button>
            <button class="page-number" onclick="alert('Đây là giao diện mẫu, chưa có phân trang dữ liệu.')">2</button>
            <button class="page-number"><i class="bi bi-chevron-right"></i></button>
          </div>
        </div>
      </section>

      <p class="text-center mt-4 mb-0" style="color:#ad9da5;font-size:11px">
        © 2026 BEAUTY+ · Giao diện quản trị cửa hàng mỹ phẩm
      </p>
    </main>
  </div>

  <!-- HỘP THÊM / SỬA DANH MỤC -->
  <div class="modal fade" id="categoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header px-4 py-3">
          <h5 class="modal-title" id="modalTitle">Thêm danh mục mới</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4">
          <form id="categoryForm">
            <input type="hidden" id="editIndex">
            <div class="mb-3">
              <label class="form-label">Tên danh mục <span class="text-danger">*</span></label>
              <input id="categoryName" class="form-control" required placeholder="VD: Chăm sóc da">
            </div>
            <div class="mb-3">
              <label class="form-label">Mã danh mục</label>
              <input id="categoryCode" class="form-control" placeholder="VD: DM007">
            </div>
            <div class="mb-3">
              <label class="form-label">Trạng thái</label>
              <select id="categoryStatus" class="form-select">
                <option value="active">Đang hoạt động</option>
                <option value="inactive">Ngừng hoạt động</option>
              </select>
            </div>
            <div class="d-flex justify-content-end gap-2 mt-4">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
              <button type="submit" class="btn-pink">Lưu danh mục</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const body = document.getElementById('categoryBody');
    const modal = bootstrap.Modal.getOrCreateInstance(document.getElementById('categoryModal'));

    function updateStats() {
      const rows = [...body.querySelectorAll('tr')];
      document.getElementById('totalCount').textContent = rows.length.toString().padStart(2, '0');
      document.getElementById('activeCount').textContent =
        rows.filter(row => row.dataset.status === 'active').length.toString().padStart(2, '0');
      document.getElementById('showCount').textContent = `Hiển thị ${rows.length} danh mục mẫu`;
    }

    function bindRow(row) {
      row.querySelector('.delete-btn').addEventListener('click', () => {
        if (confirm('Bạn có chắc muốn xóa danh mục khỏi giao diện mẫu này?')) {
          row.remove();
          updateStats();
          filterRows();
        }
      });

      row.querySelector('.edit-btn').addEventListener('click', () => {
        document.getElementById('modalTitle').textContent = 'Sửa danh mục';
        document.getElementById('editIndex').value = [...body.children].indexOf(row);
        document.getElementById('categoryName').value = row.querySelector('.category-name').textContent;
        document.getElementById('categoryCode').value = row.cells[1].textContent;
        document.getElementById('categoryStatus').value = row.dataset.status;
        modal.show();
      });
    }

    [...body.querySelectorAll('tr')].forEach(bindRow);

    document.querySelector('[data-bs-target="#categoryModal"]').addEventListener('click', () => {
      document.getElementById('categoryForm').reset();
      document.getElementById('editIndex').value = '';
      document.getElementById('modalTitle').textContent = 'Thêm danh mục mới';
    });

    document.getElementById('categoryForm').addEventListener('submit', event => {
      event.preventDefault();

      const name = document.getElementById('categoryName').value.trim();
      const code = document.getElementById('categoryCode').value.trim();
      const status = document.getElementById('categoryStatus').value;
      const editIndex = document.getElementById('editIndex').value;

      if (!name) return;

      const iconClasses = ['bi-droplet', 'bi-brush', 'bi-flower1', 'bi-water', 'bi-stars', 'bi-gift'];
      const icon = iconClasses[body.children.length % iconClasses.length];
      const statusHtml = status === 'active' ?
        '<span class="status">Hoạt động</span>' :
        '<span class="status inactive">Ngừng hoạt động</span>';

      const rowHtml = `
            <td><div class="d-flex align-items-center gap-3">
                <div class="category-icon"><i class="bi ${icon}"></i></div>
                <div class="category-name"></div>
            </div></td>
            <td></td><td>0 sản phẩm</td><td>${statusHtml}</td>
            <td>${new Date().toLocaleDateString('vi-VN')}</td>
            <td><button class="action-btn edit-btn" title="Sửa"><i class="bi bi-pencil"></i></button>
                <button class="action-btn delete-btn" title="Xóa"><i class="bi bi-trash3"></i></button></td>`;

      let row;

      if (editIndex !== '') {
        row = body.children[Number(editIndex)];
        if (!row) return;
        row.innerHTML = rowHtml;
      } else {
        row = document.createElement('tr');
        row.innerHTML = rowHtml;
        body.prepend(row);
      }

      row.dataset.status = status;
      row.querySelector('.category-name').textContent = name;
      row.cells[1].textContent = code || `DM${String(body.children.length).padStart(3, '0')}`;

      bindRow(row);
      updateStats();
      filterRows();
      modal.hide();
      document.getElementById('categoryForm').reset();
    });

    function filterRows() {
      const query = document.getElementById('searchInput').value.toLowerCase().trim();
      const status = document.getElementById('statusFilter').value;

      [...body.querySelectorAll('tr')].forEach(row => {
        const matchesText = row.textContent.toLowerCase().includes(query);
        const matchesStatus = !status || row.dataset.status === status;
        row.style.display = matchesText && matchesStatus ? '' : 'none';
      });
    }

    document.getElementById('searchInput').addEventListener('input', filterRows);
    document.getElementById('statusFilter').addEventListener('change', filterRows);
  </script>
</body>

</html>