<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold">Selamat Datang di Perusahaan Kami</h1>
                <p class="lead">Kami adalah perusahaan yang menyediakan, memberikan solusi IT terbaik untuk kebutuhan bisnis anda dalam masa digital yang terus berkembang. Kami telah berhasil membantu banyak perusahaan di Indonesia.</p>
                <div class="d-flex gap-3">
                    <a href="<?= base_url('about') ?>" class="btn btn-light btn-lg">Pelajari lebih lanjut</a>
                    <a href="<?= base_url('contact') ?>" class="btn btn-outline-light btn-lg">Hubungi Kami</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/gedung.png') ?>" class="img-fluid rounded" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Our Services</h2>
            <p class="lead">Layanan unggulan yang kami tawarkan</p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-laptop-code fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Pengembangan website profesional dengan teknologi terkini.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Mobile Apps</h5>
                        <p class="card-text">Aplikasi mobile Android dan OS yang user-friendly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">Strategi pemasaran digital untuk mengembangkan bisnis Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/team work.png') ?>" class="img-fluid rounded" alt="About Us">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold">Tentang Perusahaan Kami</h2>
                <p class="lead">Dengan pengalaman lebih dari 10 tahun, kami telah membantu ratusan klien mencapai tujuan bisnis mereka.</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-success me-2"></i> Tim profesional berpengalaman</li>
                    <li><i class="fas fa-check text-success me-2"></i> Teknologi terdepan</li>
                    <li><i class="fas fa-check text-success me-2"></i> Pelayanan 24/7</li>
                    <li><i class="fas fa-check text-success me-2"></i> Garansi kepuasan pelanggan</li>
                </ul>
                <a href="<?= base_url('about') ?>" class="btn btn-primary btn-lg">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>