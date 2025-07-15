<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- About Header -->
<section class="bar bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4 fw-bold">About Us</h1>
                <p class="lead">Mengenal lebih dekat dengan perusahaan kami</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Story -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Singo Lapas</h2>
                <p class="lead">Didirikan pada tahun 1987, PT. Singo Lapas ini berasal di polehan yang bernama texas jodipanes.</p>
                <p>Saat ini, kami melayani lebih dari 500 klien dari berbagai industri, mulai dari UMKM hingga perusahaan multinasional.</p>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/singo.jpg') ?>" class="img-fluid rounded shadow" alt="Company Story">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="fas fa-eye fa-3x text-primary"></i>
                        </div>
                        <h3 class="text-center mb-4">Our Vision</h3>
                        <p class="text-center">Menjadi perusahaan teknologi terdepan yang memberikan solusi inovatif untuk memajukan bisnis di Indonesia dan Asia Tenggara.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="fas fa-bullseye fa-3x text-primary"></i>
                        </div>
                        <h3 class="text-center mb-4">Our Mission</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i> Memberikan layanan berkualitas tinggi</li>
                            <li><i class="fas fa-check text-success me-2"></i> Mengembangkan solusi teknologi inovatif</li>
                            <li><i class="fas fa-check text-success me-2"></i> Membangun partnership jangka panjang</li>
                            <li><i class="fas fa-check text-success me-2"></i> Berkontribusi pada kemajuan teknologi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Our Team</h2>
            <p class="lead">Tim profesional yang berpengalaman dan berdedikasi</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center border-0 shadow">
                    <div class="card-body p-4">
                        <img src="<?= base_url('assets/images/iyot.jpg') ?>" class="team-photo mb-3" alt="CEO">
                        <h5 class="card-title">TIO SAPUTRA</h5>
                        <p class="text-muted">Web Development</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center border-0 shadow">
                    <div class="card-body p-4">
                        <img src="<?= base_url('assets/images/peni.jpg') ?>" class="team-photo mb-3" alt="CTO">
                        <h5 class="card-title">ADAM TRI RAMADHANI</h5>
                        <p class="text-muted">Frontend Development</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center border-0 shadow">
                    <div class="card-body p-4">
                        <img src="<?= base_url('assets/images/bima.jpg') ?>" class="team-photo mb-3" alt="Lead Developer">
                        <h5 class="card-title">ARANDA BIMANTARA</h5>
                        <p class="text-muted">Lead Developer</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        
</section>

<!-- Company Values -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Our Values</h2>
            <p class="lead">Nilai-nilai yang menjadi fondasi perusahaan kami</p>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-heart fa-2x"></i>
                    </div>
                    <h4>Integrity</h4>
                    <p>Kami berkomitmen pada kejujuran dan transparansi dalam setiap aspek bisnis.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-lightbulb fa-2x"></i>
                    </div>
                    <h4>Innovation</h4>
                    <p>Kami terus berinovasi untuk memberikan solusi terbaik bagi klien.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h4>Collaboration</h4>
                    <p>Kerjasama tim yang solid adalah kunci kesuksesan kami.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>