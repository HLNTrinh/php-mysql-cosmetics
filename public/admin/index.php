<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Cosmetics Beauty</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
      position: fixed;
      inset: 0 auto 0 0;
      width: 250px;
      padding: 26px 16px;
      background: linear-gradient(180deg, #fff0f5, #fce4ec);
      border-right: 1px solid #f4dce5;
      overflow-y: auto;
      z-index: 100;
    }

    .brand {
      padding: 0 12px;
      margin-bottom: 34px;
      color: #5c3544;
      font-size: 21px;
      font-weight: 800;
      letter-spacing: .5px;
    }

    .brand span {
      color: #df7f9e;
    }

    .menu-label {
      margin: 22px 12px 10px;
      color: #bd8b9e;
      font-size: 10px;
      font-weight: bold;
      letter-spacing: 1.3px;
    }

    .menu-link {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 12px 14px;
      margin-bottom: 5px;
      color: #795565;
      text-decoration: none;
      border-radius: 11px;
      transition: .2s;
    }

    .menu-link i {
      font-size: 17px;
    }

    .menu-link:hover,
    .menu-link.active {
      color: var(--pink-dark);
      background: white;
      box-shadow: 0 4px 14px #d96c9112;
    }

    .menu-link.active {
      font-weight: 700;
    }

    .main {
      margin-left: 250px;
      padding: 28px 32px 36px;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 18px;
      margin-bottom: 28px;
    }

    .page-title {
      margin: 0 0 7px;
      font-size: 27px;
      font-weight: 800;
    }

    .muted {
      color: var(--muted);
    }

    .admin-info {
      display: flex;
      align-items: center;
      gap: 11px;
    }

    .avatar {
      display: grid;
      place-items: center;
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: #f8dce7;
      color: var(--pink-dark);
      font-size: 19px;
    }

    .date-chip {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 13px;
      background: white;
      border: 1px solid var(--border);
      border-radius: 10px;
      color: var(--muted);
    }

    .stat-card {
      position: relative;
      height: 100%;
      padding: 20px;
      overflow: hidden;
      background: white;
      border: 1px solid var(--border);
      border-radius: 16px;
      box-shadow: 0 4px 18px #a95c780a;
    }

    .stat-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
    }

    .stat-icon {
      display: grid;
      place-items: center;
      width: 44px;
      height: 44px;
      border-radius: 13px;
      background: var(--pink-light);
      color: var(--pink-dark);
      font-size: 20px;
    }

    .stat-number {
      margin: 17px 0 7px;
      font-size: 28px;
      font-weight: 800;
      letter-spacing: -.6px;
    }

    .stat-label {
      color: var(--muted);
    }

    .trend {
      padding: 5px 8px;
      color: #28825b;
      background: #e7f7ee;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 700;
    }

    .trend.neutral {
      color: #99727f;
      background: #fff0f5;
    }

    .panel {
      padding: 22px;
      margin-top: 24px;
      background: white;
      border: 1px solid var(--border);
      border-radius: 16px;
      box-shadow: 0 4px 18px #a95c7808;
    }

    .panel-title {
      margin: 0;
      font-size: 16px;
      font-weight: 800;
    }

    .panel-subtitle {
      margin-top: 6px;
      color: var(--muted);
      font-size: 12px;
    }

    .btn-pink {
      padding: 9px 14px;
      color: white;
      background: var(--pink);
      border: 1px solid var(--pink);
      border-radius: 10px;
      font-weight: 600;
    }

    .btn-pink:hover {
      color: white;
      background: var(--pink-dark);
    }

    .chart-wrap {
      position: relative;
      height: 290px;
      margin-top: 22px;
    }

    .mini-stat {
      padding: 15px;
      background: #fff8fb;
      border: 1px solid #f6e8ee;
      border-radius: 12px;
    }

    .mini-stat strong {
      display: block;
      margin-top: 7px;
      font-size: 19px;
    }

    .table {
      margin-bottom: 0;
      vertical-align: middle;
    }

    .table thead th {
      padding: 14px 12px;
      color: #987f8a;
      background: #fff7fa;
      border-bottom: 1px solid var(--border);
      font-size: 10px;
      letter-spacing: .4px;
      white-space: nowrap;
    }

    .table tbody td {
      padding: 14px 12px;
      border-color: #f5edf0;
    }

    .status {
      display: inline-block;
      padding: 6px 10px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 700;
      white-space: nowrap;
    }

    .status.done {
      color: #28825b;
      background: #e7f7ee;
    }

    .status.pending {
      color: #b87819;
      background: #fff2d9;
    }

    .status.shipping {
      color: #8262bd;
      background: #f0eaff;
    }

    .product-row {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .product-thumb {
      display: grid;
      place-items: center;
      flex-shrink: 0;
      width: 44px;
      height: 46px;
      color: var(--pink-dark);
      background: linear-gradient(135deg, #fff0f5, #f8dce7);
      border-radius: 10px;
      font-size: 20px;
    }

    .product-name {
      font-weight: 700;
    }

    .product-meta {
      margin-top: 5px;
      color: var(--muted);
      font-size: 11px;
    }

    .quick-link {
      display: flex;
      align-items: center;
      gap: 13px;
      padding: 14px;
      color: var(--text);
      text-decoration: none;
      border: 1px solid var(--border);
      border-radius: 12px;
      transition: .2s;
    }

    .quick-link:hover {
      background: var(--pink-light);
      border-color: #edc6d4;
      color: var(--pink-dark);
    }

    .quick-icon {
      display: grid;
      place-items: center;
      width: 40px;
      height: 40px;
      flex-shrink: 0;
      color: var(--pink-dark);
      background: var(--pink-light);
      border-radius: 11px;
      font-size: 18px;
    }

    .quick-link .arrow {
      margin-left: auto;
      color: #bd8b9e;
    }

    .progress {
      height: 7px;
      background: #f7eaf0;
      border-radius: 10px;
    }

    .progress-bar {
      background: var(--pink);
      border-radius: 10px;
    }

    .footer-note {
      margin-top: 25px;
      color: #b39ca6;
      text-align: center;
      font-size: 11px;
    }

    @media (max-width: 992px) {
      .sidebar {
        width: 76px;
        padding: 22px 9px;
      }

      .brand {
        padding: 0;
        text-align: center;
        font-size: 0;
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

      .admin-text,
      .date-chip {
        display: none;
      }

      .panel {
        padding: 15px;
      }

      .chart-wrap {
        height: 240px;
      }
    }
  </style>
</head>

<body>
  <aside class="sidebar">
    <div class="brand">Cosmetics <span>BEAUTY</span></div>

    <div class="menu-label">TỔNG QUAN</div>
    <a class="menu-link active" href="../admin/index.php">
      <i class="bi bi-grid"></i><span>Dashboard</span>
    </a>

    <div class="menu-label">QUẢN LÝ CỬA HÀNG</div>
    <a class="menu-link" href="./categories/index.php">
      <i class="bi bi-tags"></i><span>Danh mục</span>
    </a>
    <a class="menu-link" href="./products/index.php">
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
        <h1 class="page-title">Dashboard</h1>
        <div class="muted">Chào mừng bạn quay lại! Đây là tình hình cửa hàng hôm nay.</div>
      </div>

      <div class="d-flex align-items-center gap-3">
        <div class="date-chip">
          <i class="bi bi-calendar3"></i>
          <span id="currentDate"></span>
        </div>
        <div class="admin-info">
          <div class="avatar"><i class="bi bi-person"></i></div>
          <div class="admin-text">
            <div class="fw-bold">Quản trị viên</div>
            <small class="muted">Administrator</small>
          </div>
        </div>
      </div>
    </header>

    <!-- Thẻ thống kê -->
    <section class="row g-3">
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="stat-top">
            <div class="stat-icon"><i class="bi bi-currency-dollar"></i></div>
            <span class="trend"><i class="bi bi-arrow-up-right"></i> 12,8%</span>
          </div>
          <div class="stat-number">24,8 triệu</div>
          <div class="stat-label">Doanh thu tháng này</div>
        </div>
      </div>

      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="stat-top">
            <div class="stat-icon"><i class="bi bi-receipt"></i></div>
            <span class="trend"><i class="bi bi-arrow-up-right"></i> 8,2%</span>
          </div>
          <div class="stat-number">186</div>
          <div class="stat-label">Tổng đơn hàng</div>
        </div>
      </div>

      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="stat-top">
            <div class="stat-icon"><i class="bi bi-box-seam"></i></div>
            <span class="trend neutral">Kho hàng</span>
          </div>
          <div class="stat-number">124</div>
          <div class="stat-label">Sản phẩm đang quản lý</div>
        </div>
      </div>

      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="stat-top">
            <div class="stat-icon"><i class="bi bi-people"></i></div>
            <span class="trend"><i class="bi bi-arrow-up-right"></i> 5,4%</span>
          </div>
          <div class="stat-number">892</div>
          <div class="stat-label">Khách hàng</div>
        </div>
      </div>
    </section>

    <!-- Biểu đồ doanh thu -->
    <section class="row g-3">
      <div class="col-xl-8">
        <div class="panel">
          <div class="d-flex justify-content-between align-items-start gap-3 flex-wrap">
            <div>
              <h2 class="panel-title">Tổng quan doanh thu</h2>
              <div class="panel-subtitle">Theo dõi doanh thu trong 7 tháng gần nhất</div>
            </div>
            <select class="form-select" id="chartPeriod" style="width:auto;min-height:38px">
              <option value="7">7 tháng</option>
              <option value="6">6 tháng</option>
              <option value="3">3 tháng</option>
            </select>
          </div>

          <div class="chart-wrap">
            <canvas id="revenueChart"></canvas>
          </div>
        </div>
      </div>

      <div class="col-xl-4">
        <div class="panel h-100">
          <h2 class="panel-title">Tình trạng đơn hàng</h2>
          <div class="panel-subtitle">Phân bổ đơn hàng theo trạng thái</div>

          <div class="chart-wrap" style="height:220px">
            <canvas id="orderChart"></canvas>
          </div>

          <div class="d-flex flex-column gap-3 mt-3">
            <div>
              <div class="d-flex justify-content-between mb-2">
                <span class="muted"><i class="bi bi-circle-fill me-2" style="color:#d96c91"></i>Hoàn thành</span>
                <strong>112 đơn</strong>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width:60%"></div>
              </div>
            </div>
            <div>
              <div class="d-flex justify-content-between mb-2">
                <span class="muted"><i class="bi bi-circle-fill me-2" style="color:#f1b6cb"></i>Đang xử lý</span>
                <strong>48 đơn</strong>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width:26%;opacity:.65"></div>
              </div>
            </div>
            <div>
              <div class="d-flex justify-content-between mb-2">
                <span class="muted"><i class="bi bi-circle-fill me-2" style="color:#eadfe5"></i>Đã hủy</span>
                <strong>26 đơn</strong>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width:14%;background:#cbbbc3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Đơn hàng gần đây -->
    <section class="panel">
      <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
        <div>
          <h2 class="panel-title">Đơn hàng gần đây</h2>
          <div class="panel-subtitle">Theo dõi các đơn hàng mới nhất của cửa hàng</div>
        </div>
        <a href="orders.php" class="btn btn-pink">
          Xem tất cả <i class="bi bi-arrow-right ms-1"></i>
        </a>
      </div>

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>MÃ ĐƠN</th>
              <th>KHÁCH HÀNG</th>
              <th>NGÀY ĐẶT</th>
              <th>TỔNG TIỀN</th>
              <th>TRẠNG THÁI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold">#LB1026</td>
              <td>
                <div class="fw-semibold">Nguyễn Minh Anh</div>
                <small class="muted">minhanh@example.com</small>
              </td>
              <td>26/10/2026</td>
              <td class="fw-bold">589.000 đ</td>
              <td><span class="status done">Hoàn thành</span></td>
            </tr>
            <tr>
              <td class="fw-bold">#LB1025</td>
              <td>
                <div class="fw-semibold">Trần Ngọc Hà</div>
                <small class="muted">ngocha@example.com</small>
              </td>
              <td>26/10/2026</td>
              <td class="fw-bold">429.000 đ</td>
              <td><span class="status pending">Chờ xử lý</span></td>
            </tr>
            <tr>
              <td class="fw-bold">#LB1024</td>
              <td>
                <div class="fw-semibold">Lê Thu Trang</div>
                <small class="muted">thutrang@example.com</small>
              </td>
              <td>25/10/2026</td>
              <td class="fw-bold">799.000 đ</td>
              <td><span class="status shipping">Đang giao</span></td>
            </tr>
            <tr>
              <td class="fw-bold">#LB1023</td>
              <td>
                <div class="fw-semibold">Phạm Quỳnh Mai</div>
                <small class="muted">quynhmai@example.com</small>
              </td>
              <td>25/10/2026</td>
              <td class="fw-bold">315.000 đ</td>
              <td><span class="status done">Hoàn thành</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Sản phẩm bán chạy và truy cập nhanh -->
    <section class="row g-3">
      <div class="col-xl-7">
        <div class="panel">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <h2 class="panel-title">Sản phẩm nổi bật</h2>
              <div class="panel-subtitle">Một số sản phẩm bán chạy trong cửa hàng</div>
            </div>
            <a href="products.php" class="text-decoration-none" style="color:var(--pink-dark)">Xem thêm</a>
          </div>

          <div class="d-flex flex-column gap-3">
            <div class="d-flex align-items-center justify-content-between gap-3">
              <div class="product-row">
                <div class="product-thumb"><i class="bi bi-droplet"></i></div>
                <div>
                  <div class="product-name">Serum Madagascar Centella</div>
                  <div class="product-meta">Skin1004 · Chăm sóc da</div>
                </div>
              </div>
              <div class="text-end">
                <div class="fw-bold">289.000 đ</div>
                <small class="muted">86 lượt bán</small>
              </div>
            </div>

            <hr class="my-0" style="border-color:var(--border)">

            <div class="d-flex align-items-center justify-content-between gap-3">
              <div class="product-row">
                <div class="product-thumb"><i class="bi bi-sun"></i></div>
                <div>
                  <div class="product-name">Kem chống nắng Hyalu-Cica</div>
                  <div class="product-meta">Skin1004 · Chăm sóc da</div>
                </div>
              </div>
              <div class="text-end">
                <div class="fw-bold">259.000 đ</div>
                <small class="muted">72 lượt bán</small>
              </div>
            </div>

            <hr class="my-0" style="border-color:var(--border)">

            <div class="d-flex align-items-center justify-content-between gap-3">
              <div class="product-row">
                <div class="product-thumb"><i class="bi bi-palette"></i></div>
                <div>
                  <div class="product-name">Son kem Velvet Tint</div>
                  <div class="product-meta">Romand · Trang điểm</div>
                </div>
              </div>
              <div class="text-end">
                <div class="fw-bold">179.000 đ</div>
                <small class="muted">64 lượt bán</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-5">
        <div class="panel">
          <h2 class="panel-title mb-1">Truy cập nhanh</h2>
          <div class="panel-subtitle mb-4">Các chức năng quản lý thường dùng</div>

          <div class="d-flex flex-column gap-3">
            <a href="products.php" class="quick-link">
              <div class="quick-icon"><i class="bi bi-plus-square"></i></div>
              <div>
                <div class="fw-bold">Quản lý sản phẩm</div>
                <small class="muted">Thêm mới và cập nhật sản phẩm</small>
              </div>
              <i class="bi bi-chevron-right arrow"></i>
            </a>

            <a href="categories.php" class="quick-link">
              <div class="quick-icon"><i class="bi bi-tags"></i></div>
              <div>
                <div class="fw-bold">Quản lý danh mục</div>
                <small class="muted">Sắp xếp các nhóm mỹ phẩm</small>
              </div>
              <i class="bi bi-chevron-right arrow"></i>
            </a>

            <a href="orders.php" class="quick-link">
              <div class="quick-icon"><i class="bi bi-receipt"></i></div>
              <div>
                <div class="fw-bold">Quản lý đơn hàng</div>
                <small class="muted">Kiểm tra và xử lý đơn hàng</small>
              </div>
              <i class="bi bi-chevron-right arrow"></i>
            </a>

            <a href="customers.php" class="quick-link">
              <div class="quick-icon"><i class="bi bi-person-lines-fill"></i></div>
              <div>
                <div class="fw-bold">Quản lý khách hàng</div>
                <small class="muted">Xem danh sách khách hàng</small>
              </div>
              <i class="bi bi-chevron-right arrow"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="footer-note">
      © 2026 Lumière Beauty · Trang quản trị cửa hàng mỹ phẩm
    </div>
  </main>

  <script>
    // Hiển thị ngày hiện tại theo máy người dùng
    document.getElementById("currentDate").textContent =
      new Date().toLocaleDateString("vi-VN", {
        day: "2-digit",
        month: "2-digit",
        year: "numeric"
      });

    // Dữ liệu doanh thu minh họa, đơn vị: triệu đồng
    const revenueLabels = ["Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10"];
    const revenueValues = [12.5, 16.8, 14.2, 19.6, 18.4, 22.1, 24.8];

    const revenueCanvas = document.getElementById("revenueChart");
    const revenueChart = new Chart(revenueCanvas, {
      type: "line",
      data: {
        labels: revenueLabels,
        datasets: [{
          label: "Doanh thu",
          data: revenueValues,
          borderColor: "#d96c91",
          backgroundColor: "rgba(217,108,145,0.12)",
          fill: true,
          tension: 0.4,
          borderWidth: 3,
          pointRadius: 4,
          pointHoverRadius: 6,
          pointBackgroundColor: "#fff",
          pointBorderColor: "#d96c91",
          pointBorderWidth: 2
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: context => " " + context.parsed.y.toLocaleString("vi-VN") + " triệu đồng"
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: {
              color: "#f5edf0"
            },
            ticks: {
              callback: value => value + " tr"
            }
          },
          x: {
            grid: {
              display: false
            }
          }
        }
      }
    });

    document.getElementById("chartPeriod").addEventListener("change", function() {
      const count = Number(this.value);
      revenueChart.data.labels = revenueLabels.slice(-count);
      revenueChart.data.datasets[0].data = revenueValues.slice(-count);
      revenueChart.update();
    });

    // Biểu đồ trạng thái đơn hàng minh họa
    new Chart(document.getElementById("orderChart"), {
      type: "doughnut",
      data: {
        labels: ["Hoàn thành", "Đang xử lý", "Đã hủy"],
        datasets: [{
          data: [112, 48, 26],
          backgroundColor: ["#d96c91", "#f1b6cb", "#eadfe5"],
          borderWidth: 0,
          hoverOffset: 5
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: "72%",
        plugins: {
          legend: {
            display: false
          }
        }
      }
    });
  </script>
</body>

</html>