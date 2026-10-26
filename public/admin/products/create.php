<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm sản phẩm | BEAUTY+</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <style>
    :root {
      --pink: #df6b8d;
      --pink-light: #fff1f5;
      --text: #34272d;
      --muted: #91838a;
      --border: #f0e6ea;
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


    .sidebar {
      position: fixed;
      inset: 0 auto 0 0;
      width: 250px;
      padding: 28px 18px;
      background: linear-gradient(180deg, #fff0f5 0%, #fce4ec 100%);
      border-right: 1px solid #f6d5e0;
      z-index: 100;
    }

    .logo {
      padding: 0 12px 30px;
      color: #5c3544;
      font-size: 27px;
      font-weight: 800;
      letter-spacing: -1px;
    }

    .logo span {
      color: #df7f9e;
    }

    .logo small {
      display: block;
      margin-top: 5px;
      color: #aa788a;
      font-size: 9px;
      font-weight: 400;
      letter-spacing: 2px;
    }

    .menu-label {
      padding: 12px;
      color: #bd8b9e;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 1.5px;
    }

    .menu-link {
      display: flex;
      align-items: center;
      gap: 13px;
      padding: 13px 14px;
      margin-bottom: 5px;
      color: #795565;
      text-decoration: none;
      border-radius: 9px;
      transition: all .2s ease;
    }

    .menu-link i {
      font-size: 18px;
    }

    .menu-link:hover {
      color: #c6537a;
      background: #ffe0eb;
    }

    .menu-link.active {
      color: #c6537a;
      background: #fff;
      font-weight: 700;
      box-shadow: 0 3px 10px rgba(210, 115, 149, 0.10);
    }

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
      background: #fff;
      border-bottom: 1px solid var(--border);
    }

    .search {
      width: min(330px, 40vw);
      padding: 10px 15px;
      border: 1px solid var(--border);
      border-radius: 8px;
      background: #faf8f9;
      outline: none;
    }

    .avatar {
      display: grid;
      place-items: center;
      width: 39px;
      height: 39px;
      border-radius: 50%;
      background: #f9dce6;
      color: #b84e72;
      font-weight: 700;
    }

    .content {
      max-width: 1450px;
      padding: 35px 38px;
      margin: auto;
    }

    .breadcrumb-custom {
      margin-bottom: 12px;
      color: var(--muted);
      font-size: 12px;
    }

    .page-title {
      margin: 0;
      font-size: 28px;
      font-weight: 750;
      letter-spacing: -.7px;
    }

    .page-desc {
      margin-top: 9px;
      color: var(--muted);
    }

    .btn-back {
      padding: 10px 16px;
      color: #64545c;
      background: white;
      border: 1px solid var(--border);
      border-radius: 8px;
      text-decoration: none;
    }

    .btn-pink {
      padding: 11px 19px;
      color: white;
      background: var(--pink);
      border: 1px solid var(--pink);
      border-radius: 8px;
      font-weight: 600;
    }

    .btn-pink:hover {
      color: white;
      background: #ca5479;
    }

    .panel {
      overflow: hidden;
      background: white;
      border: 1px solid var(--border);
      border-radius: 13px;
    }

    .panel-heading {
      padding: 20px 24px;
      border-bottom: 1px solid var(--border);
    }

    .panel-heading h5 {
      margin: 0;
      font-size: 15px;
      font-weight: 700;
    }

    .panel-heading p {
      margin: 6px 0 0;
      color: var(--muted);
      font-size: 12px;
    }

    .panel-body {
      padding: 24px;
    }

    .form-label {
      margin-bottom: 9px;
      font-size: 12px;
      font-weight: 700;
    }

    .required {
      color: #dc5f82;
    }

    .form-control,
    .form-select {
      min-height: 44px;
      padding: 10px 13px;
      border-color: #eae1e5;
      border-radius: 8px;
      font-size: 13px;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #e6a1b7;
      box-shadow: 0 0 0 3px #df6b8d17;
    }

    textarea.form-control {
      min-height: 125px;
      resize: vertical;
    }

    .helper {
      margin-top: 7px;
      color: #a3959c;
      font-size: 11px;
    }

    .upload-box {
      min-height: 210px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 25px;
      border: 1px dashed #e4b2c2;
      border-radius: 10px;
      background: #fff9fb;
      text-align: center;
      cursor: pointer;
      transition: .2s;
    }

    .upload-box:hover {
      background: #fff1f5;
    }

    .upload-icon {
      display: grid;
      place-items: center;
      width: 54px;
      height: 54px;
      margin-bottom: 13px;
      border-radius: 50%;
      background: #fbe3eb;
      color: #d45e83;
      font-size: 23px;
    }

    .upload-box strong {
      font-size: 13px;
    }

    .upload-box p {
      margin: 8px 0 0;
      color: var(--muted);
      font-size: 11px;
    }

    #imagePreview {
      display: none;
      width: 100%;
      max-height: 260px;
      margin-top: 15px;
      object-fit: contain;
      border-radius: 8px;
    }

    .preview-card {
      overflow: hidden;
      border: 1px solid var(--border);
      border-radius: 12px;
    }

    .preview-image {
      display: grid;
      min-height: 225px;
      place-items: center;
      background: #faf0f3;
      color: #c9aab5;
      font-size: 54px;
    }

    .preview-image img {
      width: 100%;
      height: 225px;
      object-fit: contain;
    }

    .preview-info {
      padding: 18px;
    }

    .preview-brand {
      color: var(--pink);
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .preview-name {
      margin: 9px 0 14px;
      font-size: 15px;
      font-weight: 600;
    }

    .preview-price {
      color: #d65c7e;
      font-size: 20px;
      font-weight: 800;
    }

    .preview-old {
      margin-left: 8px;
      color: #a99ca2;
      font-size: 12px;
      text-decoration: line-through;
    }

    .preview-stock {
      margin-top: 14px;
      padding-top: 13px;
      border-top: 1px solid var(--border);
      color: #82747b;
      font-size: 12px;
    }

    .tip {
      padding: 16px;
      margin-top: 18px;
      border-radius: 9px;
      background: #fff5f8;
      color: #946174;
      font-size: 12px;
      line-height: 1.7;
    }

    .form-footer {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      padding: 18px 24px;
      background: #fff;
      border-top: 1px solid var(--border);
    }

    .btn-cancel {
      padding: 10px 18px;
      color: #75666d;
      background: white;
      border: 1px solid var(--border);
      border-radius: 8px;
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
        height: 65px;
        padding: 0 12px;
      }

      .search {
        width: 190px;
      }

      .page-title {
        font-size: 23px;
      }

      .panel-body {
        padding: 17px;
      }

      .page-actions .btn-back {
        display: none;
      }
    }
  </style>
</head>

<body>

  <aside class="sidebar">
    <div class="logo">BEAUTY<span>+</span><small>BEAUTY & SKINCARE</small></div>

    <div class="menu-label">TỔNG QUAN</div>
    <a href="#" class="menu-link"><i class="bi bi-grid"></i><span>Dashboard</span></a>

    <div class="menu-label">QUẢN LÝ CỬA HÀNG</div>
    <a href="#" class="menu-link"><i class="bi bi-box-seam"></i><span>Sản phẩm</span></a>
    <a href="#" class="menu-link active"><i class="bi bi-plus-square"></i><span>Thêm sản phẩm</span></a>
    <a href="#" class="menu-link"><i class="bi bi-tags"></i><span>Danh mục</span></a>
    <a href="#" class="menu-link"><i class="bi bi-bookmark-heart"></i><span>Thương hiệu</span></a>
    <a href="#" class="menu-link"><i class="bi bi-bag"></i><span>Đơn hàng</span></a>
    <a href="#" class="menu-link"><i class="bi bi-people"></i><span>Khách hàng</span></a>

    <div class="menu-label">HỆ THỐNG</div>
    <a href="#" class="menu-link"><i class="bi bi-gear"></i><span>Cài đặt</span></a>
  </aside>

  <div class="main">
    <header class="topbar">
      <input class="search" type="search" placeholder="Tìm kiếm...">
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
      <div class="breadcrumb-custom">Quản lý cửa hàng / Sản phẩm / Thêm sản phẩm</div>

      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
        <div>
          <h1 class="page-title">Thêm sản phẩm mới</h1>
          <p class="page-desc mb-0">Điền thông tin để tạo sản phẩm trong cửa hàng của bạn.</p>
        </div>
        <div class="page-actions d-flex gap-2">
          <a href="#" class="btn-back"><i class="bi bi-arrow-left me-2"></i>Quay lại</a>
          <button type="button" class="btn-pink" onclick="previewNotice()">
            <i class="bi bi-check2 me-1"></i> Lưu sản phẩm
          </button>
        </div>
      </div>

      <form id="productForm">
        <div class="row g-4">
          <div class="col-xl-8">
            <section class="panel mb-4">
              <div class="panel-heading">
                <h5><i class="bi bi-info-circle me-2" style="color:var(--pink)"></i>Thông tin cơ bản</h5>
                <p>Thông tin chính để khách hàng nhận biết sản phẩm.</p>
              </div>
              <div class="panel-body">
                <div class="row g-3">
                  <div class="col-md-8">
                    <label class="form-label">Tên sản phẩm <span class="required">*</span></label>
                    <input id="name" class="form-control" placeholder="VD: Serum rau má phục hồi da">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Mã sản phẩm <span class="required">*</span></label>
                    <input id="sku" class="form-control" placeholder="VD: SER-001">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Danh mục <span class="required">*</span></label>
                    <select id="category" class="form-select">
                      <option value="">Chọn danh mục</option>
                      <option>Chăm sóc da</option>
                      <option>Trang điểm</option>
                      <option>Chăm sóc cơ thể</option>
                      <option>Chăm sóc tóc</option>
                      <option>Nước hoa</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Thương hiệu <span class="required">*</span></label>
                    <select id="brand" class="form-select">
                      <option value="">Chọn thương hiệu</option>
                      <option>SKIN1004</option>
                      <option>COSRX</option>
                      <option>La Roche-Posay</option>
                      <option>Some By Mi</option>
                      <option>Beauty of Joseon</option>
                      <option>Khác</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Mô tả sản phẩm</label>
                    <textarea id="description" class="form-control" placeholder="Mô tả công dụng, thành phần và cách sử dụng..."></textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel mb-4">
              <div class="panel-heading">
                <h5><i class="bi bi-currency-dollar me-2" style="color:var(--pink)"></i>Giá bán & Kho hàng</h5>
                <p>Thiết lập giá bán và số lượng sản phẩm hiện có.</p>
              </div>
              <div class="panel-body">
                <div class="row g-3">
                  <div class="col-md-4">
                    <label class="form-label">Giá bán (VNĐ) <span class="required">*</span></label>
                    <input id="price" type="number" min="0" class="form-control" placeholder="250000">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Giá gốc (VNĐ)</label>
                    <input id="oldPrice" type="number" min="0" class="form-control" placeholder="320000">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Số lượng tồn kho <span class="required">*</span></label>
                    <input id="stock" type="number" min="0" class="form-control" placeholder="100">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <div class="panel-heading">
                <h5><i class="bi bi-image me-2" style="color:var(--pink)"></i>Hình ảnh sản phẩm</h5>
                <p>Chọn hình ảnh rõ nét để hiển thị trên cửa hàng.</p>
              </div>
              <div class="panel-body">
                <label class="upload-box w-100" for="image">
                  <div class="upload-icon"><i class="bi bi-cloud-arrow-up"></i></div>
                  <strong>Nhấn để chọn ảnh sản phẩm</strong>
                  <p>Hỗ trợ JPG, PNG, WEBP</p>
                  <p>Khu vực này chỉ xem trước ảnh, chưa tải lên máy chủ.</p>
                  <input id="image" type="file" accept="image/*" hidden>
                  <img id="imagePreview" alt="Xem trước ảnh sản phẩm">
                </label>
              </div>
            </section>
          </div>

          <div class="col-xl-4">
            <section class="panel">
              <div class="panel-heading">
                <h5><i class="bi bi-eye me-2" style="color:var(--pink)"></i>Xem trước sản phẩm</h5>
                <p>Xem nhanh cách sản phẩm hiển thị.</p>
              </div>
              <div class="panel-body">
                <div class="preview-card">
                  <div class="preview-image" id="previewImageBox">
                    <i class="bi bi-droplet-half"></i>
                  </div>
                  <div class="preview-info">
                    <div class="preview-brand" id="previewBrand">BEAUTY+</div>
                    <div class="preview-name" id="previewName">Tên sản phẩm của bạn</div>
                    <div>
                      <span class="preview-price" id="previewPrice">0đ</span>
                      <span class="preview-old" id="previewOld"></span>
                    </div>
                    <div class="preview-stock">
                      <i class="bi bi-box-seam me-2"></i>
                      Tồn kho: <span id="previewStock">0</span> sản phẩm
                    </div>
                  </div>
                </div>
                <div class="tip">
                  <i class="bi bi-lightbulb me-2"></i>
                  <strong>Mẹo nhỏ</strong><br>
                  Sử dụng ảnh vuông, nền sáng và tên sản phẩm ngắn gọn để gian hàng trông chuyên nghiệp hơn.
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="panel mt-4">
          <div class="form-footer">
            <button type="reset" class="btn-cancel">Làm mới</button>
            <button type="button" class="btn-pink" onclick="previewNotice()">
              <i class="bi bi-check2 me-1"></i> Lưu sản phẩm
            </button>
          </div>
        </div>
      </form>

      <p class="text-center mt-4 mb-0" style="color:#ad9da5;font-size:11px">
        © 2026 BEAUTY+ · Hệ thống quản lý cửa hàng mỹ phẩm
      </p>
    </main>
  </div>

  <script>
    const $ = id => document.getElementById(id);

    function formatPrice(value) {
      const number = Number(value);
      return value !== '' && Number.isFinite(number) ?
        number.toLocaleString('vi-VN') + 'đ' :
        '0đ';
    }

    $('name').addEventListener('input', () => {
      $('previewName').textContent = $('name').value || 'Tên sản phẩm của bạn';
    });

    $('brand').addEventListener('change', () => {
      $('previewBrand').textContent = $('brand').value || 'BEAUTY+';
    });

    $('price').addEventListener('input', () => {
      $('previewPrice').textContent = formatPrice($('price').value);
    });

    $('oldPrice').addEventListener('input', () => {
      $('previewOld').textContent = $('oldPrice').value ?
        formatPrice($('oldPrice').value) : '';
    });

    $('stock').addEventListener('input', () => {
      $('previewStock').textContent = $('stock').value || '0';
    });

    $('image').addEventListener('change', event => {
      const file = event.target.files[0];
      if (!file) return;

      if (!file.type.startsWith('image/')) {
        alert('Vui lòng chọn một file ảnh.');
        event.target.value = '';
        return;
      }

      const url = URL.createObjectURL(file);
      $('imagePreview').src = url;
      $('imagePreview').style.display = 'block';
      $('previewImageBox').innerHTML = '';
      const img = document.createElement('img');
      img.src = url;
      img.alt = 'Ảnh sản phẩm xem trước';
      $('previewImageBox').appendChild(img);
    });

    $('productForm').addEventListener('reset', () => {
      setTimeout(() => {
        $('previewName').textContent = 'Tên sản phẩm của bạn';
        $('previewBrand').textContent = 'BEAUTY+';
        $('previewPrice').textContent = '0đ';
        $('previewOld').textContent = '';
        $('previewStock').textContent = '0';
        $('imagePreview').style.display = 'none';
        $('previewImageBox').innerHTML = '<i class="bi bi-droplet-half"></i>';
      }, 0);
    });

    function previewNotice() {
      alert('Đây là giao diện mẫu. Chức năng lưu sản phẩm sẽ được xây dựng ở bước tiếp theo.');
    }
  </script>

</body>

</html>