<?php
/**
 * SeaMarket Landing Page
 * Entry point for http://localhost/seamarket
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeaMarket - Platform Pemasaran Hasil Panen Rumput Laut</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/seamarket/assets/css/style.css">
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">SeaMarket</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">Cara Kerja</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-primary ms-2" href="#login">Login</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary ms-2 text-white" href="#register">Daftar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5 bg-light" id="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3" style="color: var(--color-ocean-blue);">Pasarkan Hasil Panen Rumput Laut Anda ke Seluruh Indonesia</h1>
                    <p class="lead mb-4">SeaMarket membantu petani dan penjual rumput laut menjangkau lebih banyak pembeli secara mudah, cepat, dan terpercaya.</p>
                    <a href="#products" class="btn btn-primary btn-lg me-2">Mulai Belanja</a>
                    <a href="#register" class="btn btn-outline-primary btn-lg">Menjadi Penjual</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://via.placeholder.com/500x300?text=Sea+Market+Illustration" class="img-fluid" alt="Illustrasi SeaMarket" />
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan Section -->
    <section class="py-5" id="keunggulan">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center border-0">
                        <div class="card-body">
                            <div class="mb-3 display-4">🌊</div>
                            <h5 class="card-title">Produk Berkualitas</h5>
                            <p class="card-text">Kualitas terjamin dari petani terpercaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center border-0">
                        <div class="card-body">
                            <div class="mb-3 display-4">🚚</div>
                            <h5 class="card-title">Pengiriman Mudah</h5>
                            <p class="card-text">Logistik cepat ke seluruh Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center border-0">
                        <div class="card-body">
                            <div class="mb-3 display-4">💰</div>
                            <h5 class="card-title">Harga Transparan</h5>
                            <p class="card-text">Tidak ada biaya tersembunyi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center border-0">
                        <div class="card-body">
                            <div class="mb-3 display-4">🤝</div>
                            <h5 class="card-title">Transaksi Aman</h5>
                            <p class="card-text">Pembayaran terjamin dan aman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Kerja Section -->
    <section class="py-5 bg-light" id="how-it-works">
        <div class="container">
            <h2 class="text-center mb-5">Cara Kerja</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="display-5 mb-3">①</div>
                        <h5>Daftar Akun</h5>
                        <p>Buat akun gratis dalam hitungan menit.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="display-5 mb-3">②</div>
                        <h5>Pilih Produk</h5>
                        <p>Temukan produk rumput laut yang diinginkan.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="display-5 mb-3">③</div>
                        <h5>Checkout</h5>
                        <p>Lakukan pembayaran dengan metode aman.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="display-5 mb-3">④</div>
                        <h5>Produk Dikirim</h5>
                        <p>Produk tiba tepat waktu di lokasi Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Unggulan Section -->
    <section class="py-5" id="products">
        <div class="container">
            <h2 class="text-center mb-5">Produk Unggulan</h2>
            <div class="row g-4">
                <!-- Repeat 6 times -->
                <div class="col-md-4 col-lg-2">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/300x200?text=Produk+1" class="card-img-top" alt="Produk 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk Rumput Laut A</h5>
                            <p class="card-text mb-1"><strong>Rp 150.000</strong></p>
                            <p class="card-text mb-1">Penjual: Pak Budi</p>
                            <p class="card-text mb-2">Lokasi: Bali</p>
                            <a href="#" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/300x200?text=Produk+2" class="card-img-top" alt="Produk 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk Rumput Laut B</h5>
                            <p class="card-text mb-1"><strong>Rp 200.000</strong></p>
                            <p class="card-text mb-1">Penjual: Ibu Siti</p>
                            <p class="card-text mb-2">Lokasi: Lombok</p>
                            <a href="#" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/300x200?text=Produk+3" class="card-img-top" alt="Produk 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk Rumput Laut C</h5>
                            <p class="card-text mb-1"><strong>Rp 180.000</strong></p>
                            <p class="card-text mb-1">Penjual: Pak Joko</p>
                            <p class="card-text mb-2">Lokasi: Jawa Barat</p>
                            <a href="#" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/300x200?text=Produk+4" class="card-img-top" alt="Produk 4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk Rumput Laut D</h5>
                            <p class="card-text mb-1"><strong>Rp 210.000</strong></p>
                            <p class="card-text mb-1">Penjual: Bu Ani</p>
                            <p class="card-text mb-2">Lokasi: Sulawesi</p>
                            <a href="#" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/300x200?text=Produk+5" class="card-img-top" alt="Produk 5">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk Rumput Laut E</h5>
                            <p class="card-text mb-1"><strong>Rp 175.000</strong></p>
                            <p class="card-text mb-1">Penjual: Pak Dedi</p>
                            <p class="card-text mb-2">Lokasi: Nusa Tenggara</p>
                            <a href="#" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/300x200?text=Produk+6" class="card-img-top" alt="Produk 6">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk Rumput Laut F</h5>
                            <p class="card-text mb-1"><strong>Rp 190.000</strong></p>
                            <p class="card-text mb-1">Penjual: Ibu Rina</p>
                            <p class="card-text mb-2">Lokasi: Kalimantan</p>
                            <a href="#" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About SeaMarket Section -->
    <section class="py-5 bg-light" id="about">
        <div class="container">
            <h2 class="text-center mb-4">Tentang SeaMarket</h2>
            <p class="lead text-center">SeaMarket merupakan platform yang memfasilitasi petani rumput laut untuk memasarkan hasil panen mereka secara digital, menjangkau pasar nasional, meningkatkan pendapatan, dan mengurangi perantara.</p>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="py-5" id="testimonials">
        <div class="container">
            <h2 class="text-center mb-5">Testimoni Pelanggan</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <p class="card-text">"SeaMarket memudahkan saya menemukan pembeli untuk hasil panen rumput laut. Prosesnya cepat dan aman!"</p>
                            <h6 class="card-subtitle mb-2 text-muted">- Budi Santoso</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <p class="card-text">"Saya dapat menjual produk dengan harga yang transparan tanpa takut penipuan. Sangat rekomended!"</p>
                            <h6 class="card-subtitle mb-2 text-muted">- Siti Lestari</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <p class="card-text">"Logistik pengiriman cepat, produk sampai tepat waktu, dan kualitas tetap terjaga."</p>
                            <h6 class="card-subtitle mb-2 text-muted">- Ahmad Fauzi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center py-4 shadow-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">SeaMarket</h5>
                    <p>Platform Pemasaran Hasil Panen Rumput Laut</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Beranda</a></li>
                        <li><a href="#about" class="text-decoration-none">Tentang</a></li>
                        <li><a href="#products" class="text-decoration-none">Produk</a></li>
                        <li><a href="#how-it-works" class="text-decoration-none">Cara Kerja</a></li>
                        <li><a href="#contact" class="text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Kontak</h5>
                    <p>Email: info@seamarket.id</p>
                    <p>Phone: +62 812 3456 7890</p>
                    <div>
                        <a href="#" class="me-2"><img src="https://via.placeholder.com/24?text=F" alt="Facebook" /></a>
                        <a href="#" class="me-2"><img src="https://via.placeholder.com/24?text=I" alt="Instagram" /></a>
                        <a href="#"><img src="https://via.placeholder.com/24?text=T" alt="Twitter" /></a>
                    </div>
                </div>
            </div>
            <hr class="my-4" />
            <p class="mb-0 text-muted">&copy; 2026 SeaMarket. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="/seamarket/assets/js/app.js"></script>
</body>
</html>
