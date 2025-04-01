<?php 

include_once 'index.php';
include_once 'header.php';

?>
<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="home.php?halaman=home" class="nav-link scrollto"><i class="bx bx-home"></i>
                    <span>Home</span></a></li>
            <li><a href="about.php?halaman=about" class="nav-link scrollto active"><i class="bx bx-user"></i>
                    <span>About</span></a></li>
            <li><a href="resume.php?halaman=resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                    <span>Resume</span></a></li>
            <li><a href="portfolio.php?halaman=portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                    <span>Portfolio</span></a></li>
            <li><a href="skill.php?halaman=skill" class="nav-link scrollto"><i class="bx bx-server"></i>
                    <span>Skill</span></a></li>
            <li><a href="contact.php?halaman=contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                    <span>Contact</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>About Me</h2>
            <p class="text-align: justify">Assalamualaikum Saya Muhammad Nashir Nasution saya adalah seorang fresh
                graduate
                dengan jurusan Teknik
                Informatika saya sangat suka membuat desain untuk tampilan halaman website dengan kata lain saya adalah
                seorang Front end Web Developer, selama kuliah saya pernah membuat sebuah project toko online dengan
                menggunakan html, css dan java script, saya juga pernah membuat sebuah project sederhana dengan
                menggunakan bahasa pemrograman php dan saya juga ahli dalam memperbaiki dan mendiagnosa kerusakan pada
                sebuah perangkat komputer dan laptop, saya juga pernah mengikuti pelatihan bersertifikat Akademi Full
                Stack Web Developer yang di selenggarak oleh PT NCI dan saya juga pernah mengikuti pelatihan
                bersertifikat Android Mobile Application Development yang diselenggarakan oleh Infinete Learning</p>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <img src="assets/img/bg.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
                <h3 align="center">FullStack Web Developer </h3>
                </br>
                <div class="row">
                    <div class="col-lg-6">
                        <ul id="countainer-pkd">
                            <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span>Muhammad Nashir
                                    Nasution</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>23 November
                                    2001</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                <span>https://nashir-nst.github.io/</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Telepon:</strong> <span>088809730430</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Kota:</strong> <span>Depok Jawa Barat</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <?php
// Tanggal lahir (ganti sesuai kebutuhan)
$tanggal_lahir = "2001-11-23"; // Format: YYYY-MM-DD

// Fungsi untuk menghitung umur
function hitungUmur($tanggal_lahir) {
    $tgl_lahir = new DateTime($tanggal_lahir);
    $hari_ini = new DateTime();
    $umur = $hari_ini->diff($tgl_lahir);
    return $umur->y; // Mengambil tahun saja
}

$umur = hitungUmur($tanggal_lahir);
?>

                        <ul id="countainer-pkd">
                            <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span><?php echo $umur; ?>
                                    tahun</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Pendidikan:</strong> <span>S1</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Negara:</strong> <span>Indonesia</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>E-Mail:</strong>
                                <span>nashirnst45@gmail.com</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Bekerja Lepas:</strong>
                                <span>Tersedia</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>