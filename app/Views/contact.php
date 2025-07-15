<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Contact Header -->
<section class="bar bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4 fw-bold">Contact Us</h1>
                <p class="lead">Hubungi kami untuk diskusi lebih lanjut tentang proyek Anda</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-8 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body p-5">
                        <h3 class="mb-4">Kirim Surat</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nama Lengkap *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Alamat Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="company" class="form-label">Perusahaan </label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Keterangan *</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="service" class="form-label">Layanan</label>
                                <select class="form-select" id="service" name="service">
                                    <option value="">Pilih layanan</option>
                                    <option value="web-development">Web Development</option>
                                    <option value="mobile-development">Mobile Development</option>
                                    <option value="digital-marketing">Digital Marketing</option>
                                    <option value="ui-ux-design">UI/UX Design</option>
                                    <option value="cloud-services">Cloud Services</option>
                                    <option value="it-consulting">IT Consulting</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-5">
                        <h3 class="mb-4">Hubungi</h3>
                        
                        <div class="mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Alamat</h6>
                                    <p class="text-muted mb-0">Jl. Tadan No. 13, Solo</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-phone text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Kontak</h6>
                                    <p class="text-muted mb-0">+62 21 1234 5678</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Email</h6>
                                    <p class="text-muted mb-0">info@company.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-clock text-primary me-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Jam Kerja</h6>
                                    <p class="text-muted mb-0">Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 9:00 AM - 1:00 PM</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="mb-3">Ikuti Kami</h6>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center mb-4">Lokasi Kami</h3>
                <div class="card border-0 shadow">
                    <div class="card-body p-0">
                        <div class="ratio ratio-21x9">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.222981734122!2d110.8123114!3d-7.5657198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a142346d5a4a5%3A0x6a2a4fb364c0758d!2sGladag%20Roundabout!5e0!3m2!1sen!2sid!4v1710000000000!5m2!1sen!2sid" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Pertanyaann Yang Sering Diajukan Klien Kami</h2>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion"
                <div class="accordion" id="faqAccordion">
                   <div class="accordion-item">
                       <h2 class="accordion-header" id="faq1">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                               Berapa lama waktu pengembangan website?
                           </button>
                       </h2>
                       <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                           <div class="accordion-body">
                               Waktu pengembangan website bervariasi tergantung kompleksitas proyek. Untuk website sederhana biasanya 2-4 minggu, sedangkan untuk aplikasi web yang kompleks bisa 2-6 bulan. Kami akan memberikan estimasi yang akurat setelah analisis kebutuhan.
                           </div>
                       </div>
                   </div>
                   
                   <div class="accordion-item">
                       <h2 class="accordion-header" id="faq2">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                               Apakah ada garansi untuk layanan yang diberikan?
                           </button>
                       </h2>
                       <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                           <div class="accordion-body">
                               Ya, kami memberikan garansi untuk semua layanan kami. Garansi bug fixing selama 3 bulan setelah project selesai, dan dukungan teknis selama 1 tahun. Kami juga menyediakan maintenance package untuk kebutuhan jangka panjang.
                           </div>
                       </div>
                   </div>
                   
                   <div class="accordion-item">
                       <h2 class="accordion-header" id="faq3">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                               Bagaimana sistem pembayaran yang tersedia?
                           </button>
                       </h2>
                       <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                           <div class="accordion-body">
                               Kami menerima pembayaran secara bertahap (milestone-based). Biasanya 30% di awal, 40% saat development, dan 30% setelah selesai. Pembayaran dapat dilakukan melalui transfer bank, atau payment gateway yang tersedia.
                           </div>
                       </div>
                   </div>
                   
                   <div class="accordion-item">
                       <h2 class="accordion-header" id="faq4">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                               Apakah bisa revisi desain selama proses development?
                           </button>
                       </h2>
                       <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                           <div class="accordion-body">
                               Tentu saja! Kami menyediakan 3 kali revisi gratis untuk setiap tahap development. Revisi tambahan akan dikenakan biaya sesuai dengan kompleksitas perubahan yang diminta.
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>

<?= $this->endSection() ?>