<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý sản phẩm | Cometics Beauty</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --pink: #d96c91;
      --pink-dark: #c6537a;
      --pink-light: #fff0f5;
      --text: #49343e;
      --muted: #987f8a;
      --border: #f0e4e9;
      --bg: #fffafd;
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

    .main {
      margin-left: 250px;
      padding: 28px 32px;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
      margin-bottom: 30px;
    }

    .page-title {
      font-size: 26px;
      font-weight: 750;
      margin: 0 0 7px;
    }

    .subtitle {
      color: var(--muted);
    }

    .admin-info {
      display: flex;
      align-items: center;
      gap: 11px;
      white-space: nowrap;
    }

    .avatar {
      width: 40px;
      height: 40px;
      display: grid;
      place-items: center;
      border-radius: 50%;
      background: #f8dce7;
      color: var(--pink-dark);
      font-size: 19px;
    }

    .stat-card {
      border: 1px solid var(--border);
      background: white;
      border-radius: 16px;
      padding: 20px;
      height: 100%;
      box-shadow: 0 4px 18px #a95c7810;
    }

    .stat-icon {
      width: 43px;
      height: 43px;
      border-radius: 12px;
      display: grid;
      place-items: center;
      background: var(--pink-light);
      color: var(--pink-dark);
      font-size: 20px;
    }

    .stat-number {
      font-size: 27px;
      font-weight: 750;
      margin-top: 13px;
    }

    .stat-label {
      color: var(--muted);
    }

    .panel {
      background: white;
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 22px;
      margin-top: 24px;
      box-shadow: 0 4px 18px #a95c780a;
    }

    .panel-title {
      font-size: 17px;
      font-weight: 750;
    }

    .form-control,
    .form-select {
      min-height: 42px;
      border-color: #eadde3;
      border-radius: 10px;
      font-size: 13px;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #df91ac;
      box-shadow: 0 0 0 .2rem #d96c911a;
    }

    .btn-pink {
      background: var(--pink);
      color: white;
      border: 1px solid var(--pink);
      border-radius: 10px;
      padding: 10px 16px;
      font-weight: 600;
    }

    .btn-pink:hover {
      background: var(--pink-dark);
      color: white;
    }

    .btn-outline-pink {
      border: 1px solid #e9b7c9;
      color: var(--pink-dark);
      background: white;
      border-radius: 9px;
    }

    .btn-outline-pink:hover {
      background: var(--pink-light);
      color: var(--pink-dark);
    }

    .table {
      vertical-align: middle;
      margin-bottom: 0;
    }

    .table thead th {
      background: #fff7fa;
      color: #987f8a;
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: .4px;
      padding: 15px 12px;
      border-bottom: 1px solid var(--border);
      white-space: nowrap;
    }

    .table tbody td {
      padding: 13px 12px;
      border-color: #f5edf0;
    }

    .product-info {
      display: flex;
      align-items: center;
      gap: 12px;
      min-width: 220px;
    }

    .product-image {
      width: 54px;
      height: 58px;
      flex-shrink: 0;
      border-radius: 10px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, #fff0f5, #f8dce7);
      color: #c76c8b;
      font-size: 24px;
      overflow: hidden;
    }

    .product-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .product-name {
      font-weight: 700;
      color: #49343e;
      margin-bottom: 5px;
    }

    .product-code {
      font-size: 11px;
      color: var(--muted);
    }

    .badge-status {
      display: inline-block;
      padding: 6px 10px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 650;
    }

    .status-active {
      color: #28825b;
      background: #e7f7ee;
    }

    .status-low {
      color: #b87819;
      background: #fff2d9;
    }

    .status-out {
      color: #c14c65;
      background: #ffe8ed;
    }

    .action-btn {
      border: 1px solid #f0e4e9;
      background: white;
      color: #997b88;
      width: 32px;
      height: 32px;
      border-radius: 8px;
    }

    .action-btn:hover {
      background: var(--pink-light);
      color: var(--pink-dark);
    }

    .price {
      font-weight: 700;
      white-space: nowrap;
    }

    .old-price {
      color: #b7a6ae;
      font-size: 11px;
      text-decoration: line-through;
      margin-top: 4px;
    }

    .table-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      padding-top: 18px;
      color: var(--muted);
      font-size: 12px;
    }

    .modal-content {
      border: 0;
      border-radius: 18px;
      overflow: hidden;
    }

    .modal-header {
      background: var(--pink-light);
      border-bottom: 1px solid var(--border);
    }

    .modal-title {
      font-weight: 750;
    }

    .modal-footer {
      border-top: 1px solid var(--border);
    }

    .empty-state {
      text-align: center;
      padding: 35px 10px !important;
      color: var(--muted);
    }

    @media (max-width: 992px) {
      .sidebar {
        width: 76px;
        padding: 22px 9px;
      }

      .brand {
        font-size: 0;
        padding: 0;
        text-align: center;
      }

      .brand::before {
        content: "L";
        font-size: 25px;
      }

      .brand span,
      .menu-label,
      .menu-link span {
        display: none;
      }

      .menu-link {
        justify-content: center;
        padding: 13px 5px;
      }

      .menu-link i {
        font-size: 20px;
      }

      .main {
        margin-left: 76px;
        padding: 22px 18px;
      }
    }

    @media (max-width: 576px) {
      .main {
        padding: 16px 12px;
      }

      .topbar {
        align-items: flex-start;
      }

      .page-title {
        font-size: 22px;
      }

      .admin-info .admin-text {
        display: none;
      }

      .panel {
        padding: 14px;
      }
    }
  </style>
</head>

<body>
  <aside class="sidebar">
    <div class="brand">COSMETICS <span>BEAUTY</span></div>

    <div class="menu-label">TỔNG QUAN</div>
    <a class="menu-link" href="index.php">
      <i class="bi bi-grid"></i><span>Tổng quan</span>
    </a>

    <div class="menu-label">QUẢN LÝ CỬA HÀNG</div>
    <a class="menu-link" href="../categories/index.php">
      <i class="bi bi-tags"></i><span>Danh mục</span>
    </a>
    <a class="menu-link active" href="../products/index.php">
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

  <main class="main">
    <header class="topbar">
      <div>
        <h1 class="page-title">Quản lý sản phẩm</h1>
        <div class="subtitle">Quản lý kho mỹ phẩm và thông tin sản phẩm của cửa hàng.</div>
      </div>

      <div class="admin-info">
        <div class="avatar"><i class="bi bi-person"></i></div>
        <div class="admin-text">
          <div class="fw-bold">Quản trị viên</div>
          <small class="subtitle">Administrator</small>
        </div>
      </div>
    </header>

    <section class="row g-3">
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="stat-icon"><i class="bi bi-box-seam"></i></div>
          <div class="stat-number" id="totalProducts">6</div>
          <div class="stat-label">Tổng sản phẩm</div>
        </div>
      </div>

      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="stat-icon"><i class="bi bi-check-circle"></i></div>
          <div class="stat-number" id="activeProducts">4</div>
          <div class="stat-label">Đang kinh doanh</div>
        </div>
      </div>

      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="stat-icon"><i class="bi bi-exclamation-triangle"></i></div>
          <div class="stat-number" id="lowProducts">1</div>
          <div class="stat-label">Sắp hết hàng</div>
        </div>
      </div>

      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="stat-icon"><i class="bi bi-x-circle"></i></div>
          <div class="stat-number" id="outProducts">1</div>
          <div class="stat-label">Hết hàng</div>
        </div>
      </div>
    </section>

    <section class="panel">
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
          <div class="panel-title">Danh sách sản phẩm</div>
          <div class="subtitle mt-1">Theo dõi giá bán, tồn kho và trạng thái sản phẩm.</div>
        </div>

        <button class="btn btn-pink" onclick="openAddModal()">
          <i class="bi bi-plus-lg me-1"></i> Thêm sản phẩm
        </button>
      </div>

      <div class="row g-3 mb-4">
        <div class="col-lg-5">
          <div class="input-group">
            <span class="input-group-text bg-white" style="border-color:#eadde3;border-radius:10px 0 0 10px">
              <i class="bi bi-search subtitle"></i>
            </span>
            <input type="text" id="searchInput" class="form-control"
              placeholder="Tìm tên sản phẩm hoặc mã SKU..."
              style="border-radius:0 10px 10px 0">
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <select id="categoryFilter" class="form-select">
            <option value="">Tất cả danh mục</option>
            <option>Chăm sóc da</option>
            <option>Trang điểm</option>
            <option>Chăm sóc cơ thể</option>
            <option>Chăm sóc tóc</option>
            <option>Nước hoa</option>
          </select>
        </div>

        <div class="col-sm-6 col-lg-2">
          <select id="statusFilter" class="form-select">
            <option value="">Tất cả trạng thái</option>
            <option value="active">Đang bán</option>
            <option value="low">Sắp hết</option>
            <option value="out">Hết hàng</option>
          </select>
        </div>

        <div class="col-lg-2">
          <button class="btn btn-outline-pink w-100 py-2" onclick="resetFilters()">
            <i class="bi bi-arrow-counterclockwise me-1"></i> Đặt lại
          </button>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>SẢN PHẨM</th>
              <th>DANH MỤC</th>
              <th>GIÁ BÁN</th>
              <th>TỒN KHO</th>
              <th>TRẠNG THÁI</th>
              <th class="text-end">THAO TÁC</th>
            </tr>
          </thead>
          <tbody id="productTable"></tbody>
        </table>
      </div>

      <div class="table-footer">
        <span id="resultCount">Hiển thị 6 sản phẩm</span>
        <span><i class="bi bi-info-circle me-1"></i> Dữ liệu minh họa</span>
      </div>
    </section>
  </main>

  <!-- Modal thêm / sửa sản phẩm -->
  <div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <form id="productForm">
          <div class="modal-header p-4">
            <div>
              <h5 class="modal-title" id="modalTitle">Thêm sản phẩm mới</h5>
              <small class="subtitle">Điền thông tin sản phẩm mỹ phẩm</small>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
          </div>

          <div class="modal-body p-4">
            <input type="hidden" id="editIndex" value="-1">

            <div class="row g-3">
              <div class="col-md-8">
                <label class="form-label fw-semibold">Tên sản phẩm *</label>
                <input type="text" id="productName" class="form-control"
                  placeholder="Ví dụ: Serum dưỡng ẩm" required>
              </div>

              <div class="col-md-4">
                <label class="form-label fw-semibold">Mã SKU *</label>
                <input type="text" id="productSku" class="form-control"
                  placeholder="Ví dụ: SRM007" required>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Danh mục *</label>
                <select id="productCategory" class="form-select" required>
                  <option value="">Chọn danh mục</option>
                  <option>Chăm sóc da</option>
                  <option>Trang điểm</option>
                  <option>Chăm sóc cơ thể</option>
                  <option>Chăm sóc tóc</option>
                  <option>Nước hoa</option>
                </select>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Thương hiệu</label>
                <input type="text" id="productBrand" class="form-control"
                  placeholder="Ví dụ: Skin1004">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Giá bán (VNĐ) *</label>
                <input type="number" id="productPrice" class="form-control"
                  min="0" step="1000" placeholder="199000" required>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Giá gốc (VNĐ)</label>
                <input type="number" id="productOldPrice" class="form-control"
                  min="0" step="1000" placeholder="249000">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Số lượng tồn kho *</label>
                <input type="number" id="productStock" class="form-control"
                  min="0" step="1" value="10" required>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Trạng thái</label>
                <select id="productStatus" class="form-select">
                  <option value="active">Đang bán</option>
                  <option value="low">Sắp hết hàng</option>
                  <option value="out">Hết hàng</option>
                </select>
              </div>

              <div class="col-12">
                <label class="form-label fw-semibold">Mô tả sản phẩm</label>
                <textarea id="productDescription" class="form-control" rows="3"
                  placeholder="Nhập mô tả ngắn về sản phẩm..."></textarea>
              </div>

              <div class="col-12">
                <label class="form-label fw-semibold">Ảnh sản phẩm</label>
                <input type="file" id="productImage" class="form-control"
                  accept="image/*">
                <small class="subtitle">Chọn ảnh từ máy tính để xem trước. Ảnh chưa được tải lên máy chủ.</small>
                <div id="imagePreview" class="mt-3"></div>
              </div>
            </div>
          </div>

          <div class="modal-footer p-3">
            <button type="button" class="btn btn-light rounded-3 px-4"
              data-bs-dismiss="modal">Hủy</button>
            <button type="submit" class="btn btn-pink px-4">
              <i class="bi bi-check2 me-1"></i> Lưu sản phẩm
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Dữ liệu minh họa: chưa kết nối MySQL
    let products = [{
        name: "Serum Madagascar Centella",
        sku: "SKI001",
        category: "Chăm sóc da",
        brand: "Skin1004",
        price: 289000,
        oldPrice: 350000,
        stock: 25,
        status: "active",
        description: "Serum làm dịu và cấp ẩm cho da.",
        icon: "bi-droplet"
      },
      {
        name: "Kem chống nắng Hyalu-Cica",
        sku: "SKI002",
        category: "Chăm sóc da",
        brand: "Skin1004",
        price: 259000,
        oldPrice: 320000,
        stock: 12,
        status: "active",
        description: "Kem chống nắng dùng hằng ngày.",
        icon: "bi-sun"
      },
      {
        name: "Son kem Velvet Tint",
        sku: "ROM003",
        category: "Trang điểm",
        brand: "Romand",
        price: 179000,
        oldPrice: 220000,
        stock: 4,
        status: "low",
        description: "Son kem lì mềm mịn.",
        icon: "bi-palette"
      },
      {
        name: "Nước tẩy trang Micellar",
        sku: "BIO004",
        category: "Chăm sóc da",
        brand: "Bioderma",
        price: 215000,
        oldPrice: 250000,
        stock: 18,
        status: "active",
        description: "Làm sạch lớp trang điểm.",
        icon: "bi-droplet-half"
      },
      {
        name: "Sữa dưỡng thể dưỡng ẩm",
        sku: "NIV005",
        category: "Chăm sóc cơ thể",
        brand: "Nivea",
        price: 99000,
        oldPrice: 129000,
        stock: 0,
        status: "out",
        description: "Dưỡng ẩm cho da cơ thể.",
        icon: "bi-flower1"
      },
      {
        name: "Dầu gội phục hồi tóc",
        sku: "LOV006",
        category: "Chăm sóc tóc",
        brand: "L'Oreal",
        price: 189000,
        oldPrice: 220000,
        stock: 32,
        status: "active",
        description: "Hỗ trợ chăm sóc tóc khô xơ.",
        icon: "bi-stars"
      }
    ];

    let uploadedImage = "";
    const modal = new bootstrap.Modal(document.getElementById("productModal"));

    function money(value) {
      return Number(value || 0).toLocaleString("vi-VN") + " đ";
    }

    function safe(value) {
      return String(value ?? "").replace(/[&<>"']/g, char => ({
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': "&quot;",
        "'": "&#039;"
      })[char]);
    }

    function getStatus(product) {
      if (Number(product.stock) <= 0) return "out";
      if (Number(product.stock) <= 5) return "low";
      return product.status === "out" ? "out" : "active";
    }

    function statusBadge(product) {
      const status = getStatus(product);
      if (status === "out") return '<span class="badge-status status-out">Hết hàng</span>';
      if (status === "low") return '<span class="badge-status status-low">Sắp hết hàng</span>';
      return '<span class="badge-status status-active">Đang bán</span>';
    }

    function renderProducts() {
      const keyword = document.getElementById("searchInput").value.trim().toLowerCase();
      const category = document.getElementById("categoryFilter").value;
      const status = document.getElementById("statusFilter").value;

      const filtered = products
        .map((product, index) => ({
          ...product,
          originalIndex: index
        }))
        .filter(p => {
          const matchKeyword = (p.name + " " + p.sku + " " + p.brand)
            .toLowerCase().includes(keyword);
          const matchCategory = !category || p.category === category;
          const matchStatus = !status || getStatus(p) === status;
          return matchKeyword && matchCategory && matchStatus;
        });

      document.getElementById("productTable").innerHTML = filtered.length ?
        filtered.map(p => `
                <tr>
                    <td>
                        <div class="product-info">
                            <div class="product-image">
                                ${p.image
                                    ? `<img src="${p.image}" alt="${safe(p.name)}">`
                                    : `<i class="bi ${safe(p.icon || "bi-box-seam")}"></i>`}
                            </div>
                            <div>
                                <div class="product-name">${safe(p.name)}</div>
                                <div class="product-code">SKU: ${safe(p.sku)}</div>
                                <div class="product-code">${safe(p.brand || "Chưa có thương hiệu")}</div>
                            </div>
                        </div>
                    </td>
                    <td>${safe(p.category)}</td>
                    <td>
                        <div class="price">${money(p.price)}</div>
                        ${p.oldPrice > p.price ? `<div class="old-price">${money(p.oldPrice)}</div>` : ""}
                    </td>
                    <td><span class="fw-semibold">${Number(p.stock)}</span></td>
                    <td>${statusBadge(p)}</td>
                    <td>
                        <div class="d-flex justify-content-end gap-1">
                            <button class="action-btn" title="Sửa"
                                onclick="editProduct(${p.originalIndex})">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="action-btn" title="Xóa"
                                onclick="deleteProduct(${p.originalIndex})">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `).join("") :
        '<tr><td colspan="6" class="empty-state"><i class="bi bi-search fs-3 d-block mb-2"></i>Không tìm thấy sản phẩm phù hợp.</td></tr>';

      document.getElementById("resultCount").textContent =
        `Đang hiển thị ${filtered.length} / ${products.length} sản phẩm`;

      document.getElementById("totalProducts").textContent = products.length;
      document.getElementById("activeProducts").textContent =
        products.filter(p => getStatus(p) === "active").length;
      document.getElementById("lowProducts").textContent =
        products.filter(p => getStatus(p) === "low").length;
      document.getElementById("outProducts").textContent =
        products.filter(p => getStatus(p) === "out").length;
    }

    function openAddModal() {
      document.getElementById("productForm").reset();
      document.getElementById("editIndex").value = "-1";
      document.getElementById("modalTitle").textContent = "Thêm sản phẩm mới";
      document.getElementById("imagePreview").innerHTML = "";
      uploadedImage = "";
      modal.show();
    }

    function editProduct(index) {
      const p = products[index];
      document.getElementById("editIndex").value = index;
      document.getElementById("modalTitle").textContent = "Chỉnh sửa sản phẩm";

      document.getElementById("productName").value = p.name;
      document.getElementById("productSku").value = p.sku;
      document.getElementById("productCategory").value = p.category;
      document.getElementById("productBrand").value = p.brand || "";
      document.getElementById("productPrice").value = p.price;
      document.getElementById("productOldPrice").value = p.oldPrice || "";
      document.getElementById("productStock").value = p.stock;
      document.getElementById("productStatus").value = getStatus(p);
      document.getElementById("productDescription").value = p.description || "";

      uploadedImage = p.image || "";
      document.getElementById("productImage").value = "";
      document.getElementById("imagePreview").innerHTML = uploadedImage ?
        `<img src="${uploadedImage}" style="width:90px;height:90px;object-fit:cover;border-radius:12px" alt="Ảnh xem trước">` :
        "";

      modal.show();
    }

    document.getElementById("productForm").addEventListener("submit", function(event) {
      event.preventDefault();

      const index = Number(document.getElementById("editIndex").value);
      const name = document.getElementById("productName").value.trim();
      const sku = document.getElementById("productSku").value.trim();
      const category = document.getElementById("productCategory").value;
      const price = Number(document.getElementById("productPrice").value);
      const oldPrice = Number(document.getElementById("productOldPrice").value || 0);
      const stock = Number(document.getElementById("productStock").value);

      if (!name || !sku || !category || price < 0 || stock < 0) {
        alert("Vui lòng kiểm tra lại các trường bắt buộc.");
        return;
      }

      const duplicate = products.some((p, i) =>
        p.sku.toLowerCase() === sku.toLowerCase() && i !== index
      );

      if (duplicate) {
        alert("Mã SKU đã tồn tại. Vui lòng nhập mã khác.");
        return;
      }

      const product = {
        name,
        sku,
        category,
        brand: document.getElementById("productBrand").value.trim(),
        price,
        oldPrice,
        stock,
        status: stock <= 0 ? "out" : stock <= 5 ? "low" : document.getElementById("productStatus").value,
        description: document.getElementById("productDescription").value.trim(),
        image: uploadedImage,
        icon: "bi-box-seam"
      };

      if (index >= 0) {
        products[index] = product;
      } else {
        products.unshift(product);
      }

      renderProducts();
      modal.hide();
      this.reset();
      uploadedImage = "";
      document.getElementById("imagePreview").innerHTML = "";

      alert("Đã cập nhật giao diện sản phẩm. Dữ liệu hiện chưa lưu vào MySQL.");
    });

    document.getElementById("productImage").addEventListener("change", function() {
      const file = this.files[0];
      if (!file) return;

      if (!file.type.startsWith("image/")) {
        alert("Vui lòng chọn một tệp hình ảnh.");
        this.value = "";
        return;
      }

      if (file.size > 3 * 1024 * 1024) {
        alert("Ảnh quá lớn. Vui lòng chọn ảnh nhỏ hơn 3 MB.");
        this.value = "";
        return;
      }

      const reader = new FileReader();
      reader.onload = function(e) {
        uploadedImage = e.target.result;
        document.getElementById("imagePreview").innerHTML =
          `<img src="${uploadedImage}" alt="Ảnh xem trước" style="width:90px;height:90px;object-fit:cover;border-radius:12px">`;
      };
      reader.readAsDataURL(file);
    });

    function deleteProduct(index) {
      const name = products[index].name;
      if (!confirm(`Bạn có chắc muốn xóa "${name}" khỏi danh sách demo?`)) return;
      products.splice(index, 1);
      renderProducts();
    }

    function resetFilters() {
      document.getElementById("searchInput").value = "";
      document.getElementById("categoryFilter").value = "";
      document.getElementById("statusFilter").value = "";
      renderProducts();
    }

    document.getElementById("searchInput").addEventListener("input", renderProducts);
    document.getElementById("categoryFilter").addEventListener("change", renderProducts);
    document.getElementById("statusFilter").addEventListener("change", renderProducts);

    renderProducts();
  </script>
</body>

</html>