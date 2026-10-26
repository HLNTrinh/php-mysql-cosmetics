<?php
$appName = "Beauty Cosmetics";
$products = [
    [
        "name" => "Serum rau má phục hồi da",
        "brand" => "SKIN1004",
        "price" => 336000,
        "old_price" => 495000,
        "image" => "https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=600&q=80",
        "tag" => "-32%"
    ],
    [
        "name" => "Kem dưỡng ẩm chuyên sâu",
        "brand" => "COSRX",
        "price" => 289000,
        "old_price" => 398000,
        "image" => "https://images.unsplash.com/photo-1601049541289-9b1b7bbbfe19?auto=format&fit=crop&w=600&q=80",
        "tag" => "-27%"
    ],
    [
        "name" => "Nước hoa hồng dưỡng da",
        "brand" => "DEAR KLAIRS",
        "price" => 295000,
        "old_price" => 435000,
        "image" => "https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=600&q=80",
        "tag" => "-32%"
    ],
    [
        "name" => "Sữa rửa mặt dịu nhẹ",
        "brand" => "BEPLAIN",
        "price" => 198000,
        "old_price" => 250000,
        "image" => "https://images.unsplash.com/photo-1556229010-6c3f2c9ca5f8?auto=format&fit=crop&w=600&q=80",
        "tag" => "-21%"
    ]
];

function formatPrice($price)
{
    return number_format($price, 0, ',', '.') . 'đ';
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($appName) ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS của dự án -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <!-- Thanh thông báo -->
    <div class="topbar text-center">
        Mỹ phẩm chính hãng - Ưu đãi hấp dẫn mỗi ngày
    </div>

    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <div class="row align-items-center g-3 py-3">
                <div class="col-6 col-lg-3">
                    <a href="index.php" class="logo">
                        BEAUTY<span>+</span>
                    </a>
                    <div class="logo-caption">BEAUTY & SKINCARE</div>
                </div>

                <div class="col-12 col-lg-6 order-3 order-lg-2">
                    <form class="search-box" action="index.php" method="get">
                        <input type="search" name="q"
                            placeholder="Bạn đang tìm mỹ phẩm gì?"
                            aria-label="Tìm kiếm sản phẩm">
                        <button type="submit" aria-label="Tìm kiếm">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>

                <div class="col-6 col-lg-3 order-2 order-lg-3">
                    <div class="header-actions">
                        <a href="#" class="header-action">
                            <i class="bi bi-person"></i>
                            <span>Tài khoản</span>
                        </a>
                        <a href="#" class="header-action">
                            <i class="bi bi-bag"></i>
                            <span>Giỏ hàng</span>
                            <b id="cart-count">0</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu danh mục -->
        <nav class="category-nav">
            <div class="container">
                <div class="nav-list">
                    <a href="#products">Trang chủ</a>
                    <a href="#products">Khuyến mãi</a>
                    <a href="#products">Chăm sóc da</a>
                    <a href="#products">Trang điểm</a>
                    <a href="#products">Chăm sóc cơ thể</a>
                    <a href="#products">Chăm sóc tóc</a>
                    <a href="#brands">Thương hiệu</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Banner -->
        <section class="container my-4">
            <div class="hero-banner">
                <div class="hero-content">
                    <span class="hero-label">BEAUTY SALE</span>
                    <h1>Yêu làn da.<br>Yêu chính mình.</h1>
                    <p>Khám phá bí quyết chăm sóc da mỗi ngày.</p>
                    <a href="#products" class="btn btn-dark rounded-pill px-4 py-2">
                        MUA SẮM NGAY
                    </a>
                </div>
            </div>
        </section>

        <!-- Cam kết -->
        <section class="container service-section">
            <div class="row g-3">
                <div class="col-12 col-md-4">
                    <div class="service-item">
                        <i class="bi bi-patch-check"></i>
                        <div>
                            <h6>Chính hãng</h6>
                            <p>An tâm nguồn gốc sản phẩm</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="service-item">
                        <i class="bi bi-truck"></i>
                        <div>
                            <h6>Giao hàng tiện lợi</h6>
                            <p>Mua sắm ngay tại nhà</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="service-item">
                        <i class="bi bi-gift"></i>
                        <div>
                            <h6>Ưu đãi mỗi ngày</h6>
                            <p>Nhiều sản phẩm giá tốt</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sản phẩm -->
        <section class="container product-section" id="products">
            <div class="section-heading">
                <div>
                    <span class="section-subtitle">ĐƯỢC YÊU THÍCH</span>
                    <h2>SẢN PHẨM BÁN CHẠY</h2>
                </div>
                <a href="#products" class="view-all">Xem tất cả <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="row g-3 g-lg-4">
                <?php
                $keyword = trim($_GET['q'] ?? '');
                $shown = 0;

                foreach ($products as $product):
                    if (
                        $keyword !== '' &&
                        stripos($product['name'], $keyword) === false &&
                        stripos($product['brand'], $keyword) === false
                    ) {
                        continue;
                    }
                    $shown++;
                ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <article class="product-card">
                            <div class="product-image-wrap">
                                <span class="discount-tag">
                                    <?= htmlspecialchars($product['tag']) ?>
                                </span>
                                <img
                                    src="<?= htmlspecialchars($product['image']) ?>"
                                    alt="<?= htmlspecialchars($product['name']) ?>"
                                    class="product-image"
                                    loading="lazy">
                                <button class="quick-add"
                                    type="button"
                                    aria-label="Thêm vào giỏ hàng"
                                    onclick="addToCart()">
                                    <i class="bi bi-bag-plus"></i>
                                </button>
                            </div>

                            <div class="product-info">
                                <div class="product-brand">
                                    <?= htmlspecialchars($product['brand']) ?>
                                </div>
                                <h3 class="product-name">
                                    <?= htmlspecialchars($product['name']) ?>
                                </h3>
                                <div class="price-row">
                                    <span class="current-price">
                                        <?= formatPrice($product['price']) ?>
                                    </span>
                                </div>
                                <div class="old-price">
                                    <?= formatPrice($product['old_price']) ?>
                                </div>
                                <button class="btn-add-cart" type="button"
                                    onclick="addToCart()">
                                    <i class="bi bi-cart-plus"></i> Thêm vào giỏ
                                </button>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>

                <?php if ($shown === 0): ?>
                    <div class="col-12 text-center py-5">
                        Không tìm thấy sản phẩm phù hợp với
                        "<?= htmlspecialchars($keyword) ?>".
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Thương hiệu -->
        <section class="container brands-section" id="brands">
            <div class="section-heading">
                <div>
                    <span class="section-subtitle">LỰA CHỌN CỦA BẠN</span>
                    <h2>THƯƠNG HIỆU NỔI BẬT</h2>
                </div>
            </div>

            <div class="brand-list">
                <span>SKIN1004</span>
                <span>COSRX</span>
                <span>BEPLAIN</span>
                <span>DEAR KLAIRS</span>
                <span>MEDIHEAL</span>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <a href="index.php" class="logo footer-logo">
                        BEAUTY<span>+</span>
                    </a>
                    <p class="mt-3">
                        Đồng hành cùng bạn trên hành trình chăm sóc và yêu thương bản thân.
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <h5>HỖ TRỢ KHÁCH HÀNG</h5>
                    <p>Hướng dẫn mua hàng</p>
                    <p>Chính sách giao hàng</p>
                    <p>Chính sách đổi trả</p>
                </div>
                <div class="col-6 col-md-4">
                    <h5>LIÊN HỆ</h5>
                    <p><i class="bi bi-telephone"></i> 1900 0000</p>
                    <p><i class="bi bi-envelope"></i> support@beauty.local</p>
                    <p><i class="bi bi-geo-alt"></i> Việt Nam</p>
                </div>
            </div>
            <hr>
            <p class="text-center mb-0 small">
                © <?= date('Y') ?> Beauty+ | Website thực hành PHP & MySQL
            </p>
        </div>
    </footer>

    <script>
        let cartCount = 0;

        function addToCart() {
            cartCount++;
            document.getElementById('cart-count').textContent = cartCount;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>