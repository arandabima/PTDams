<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mekar Jaya Teknologi Profile</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <i class="fas fa-building"></i> PT. Mekar Jaya Teknologi
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($active ?? '') == 'home' ? 'active' : '' ?>" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($active ?? '') == 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($active ?? '') == 'services' ? 'active' : '' ?>" href="<?= base_url('services') ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($active ?? '') == 'contact' ? 'active' : '' ?>" href="<?= base_url('contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
            
        </div>
    </nav>

    <!-- Main Content -->
    <main style="margin-top: 76px;">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>PT.Mekar Jaya</h5>
                    <p>Alamat: Jl. Tadan No. 13, Solo</p>
                    <p>Email: info@company.com</p>
                    <p>Phone: (021) 123-4567</p>
                </div>
                <div class="col-md-6">
                    <h5>Follow Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; <?= date('Y') ?> PT. Mekar Jaya. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>