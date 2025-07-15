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
                <h2 class="display-5 fw-bold mb-4">PT. Mekar Jaya Teknologi</h2>
                <p class="lead">Didirikan pada tahun 1987, PT. Mekar Jaya Teknologi merupakan perusahaan yang berkomitmen dalam menyediakan solusi teknologi dan layanan terbaik bagi dunia industri di Indonesia. 
                                Berkantor pusat di Solo, tepatnya di Jl. Tadan No. 13, kami memulai perjalanan ini dengan tekad untuk menjadi mitra terpercaya dalam menjawab kebutuhan teknis dan operasional berbagai sektor usaha.
                                Dengan pengalaman lebih dari tiga dekade, PT. Mekar Jaya Teknologi terus berkembang dan berinovasi, membangun reputasi sebagai perusahaan yang adaptif, profesional, dan berorientasi pada kepuasan klien.</p>
                <p>Saat ini, kami telah dipercaya oleh lebih dari 500 klien dari beragam industri mulai dari Usaha Mikro, Kecil, dan Menengah (UMKM) hingga perusahaan multinasional berskala besar. 
                Kepercayaan ini menjadi bukti nyata dari dedikasi kami terhadap kualitas, ketepatan, dan layanan yang berkelanjutan.</p>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/IT.jpeg') ?>" class="img-fluid rounded shadow" alt="Company Story">
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
            <h2 class="display-5 fw-bold">Tim Kami</h2>
            <p class="lead">Tim profesional yang berpengalaman dan berdedikasi</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center border-0 shadow">
                    <div class="card-body p-4">
                        <img src="<?= base_url('assets/images/tio.jpg') ?>" class="team-photo mb-3" alt="CEO">
                        <h5 class="card-title">Tio Saputra</h5>
                        <p class="text-muted">Web Development</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="https://www.instagram.com/tiosaputraa._/" class="btn btn-outline-primary btn-sm"><i class="fab fa-instagram"></i></a>
                            <a href="https://github.com/TioSaputra666" class="btn btn-outline-primary btn-sm"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center border-0 shadow">
                    <div class="card-body p-4">
                        <img src="<?= base_url('assets/images/adam.png') ?>" class="team-photo mb-3" alt="CTO">
                        <h5 class="card-title">Adam Tri Ramadhani</h5>
                        <p class="text-muted">Frontend Development</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="https://www.instagram.com/___adam.tri/" class="btn btn-outline-primary btn-sm"><i class="fab fa-instagram"></i></a>
                            <a href="https://github.com/adamtri10" class="btn btn-outline-primary btn-sm"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center border-0 shadow">
                    <div class="card-body p-4">
                        <img src="<?= base_url('assets/images/bima.png') ?>" class="team-photo mb-3" alt="Lead Developer">
                        <h5 class="card-title">Aranda Bimantara</h5>
                        <p class="text-muted">Lead Developer</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="https://www.instagram.com/arandabima_/" class="btn btn-outline-primary btn-sm"><i class="fab fa-instagram"></i></a>
                            <a href="https://github.com/arandabima" class="btn btn-outline-primary btn-sm"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        
</section>

<!-- Company Values -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Nilai Kita</h2>
            <p class="lead">Nilai-nilai yang menjadi fondasi perusahaan kami</p>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-heart fa-2x"></i>
                    </div>
                    <h4>Integritas</h4>
                    <p>Kami berkomitmen pada kejujuran dan transparansi dalam setiap aspek bisnis.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-lightbulb fa-2x"></i>
                    </div>
                    <h4>Inovasi</h4>
                    <p>Kami terus berinovasi untuk memberikan solusi terbaik bagi klien.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h4>Kolaborasi</h4>
                    <p>Kerjasama tim yang solid adalah kunci kesuksesan kami.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>