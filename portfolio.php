<?php

include_once 'index.php';
include_once 'header.php';

?>

<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="home.php?halaman=home" class="nav-link scrollto"><i class="bx bx-home"></i>
                    <span>Home</span></a></li>
            <li><a href="about.php?halaman=about" class="nav-link scrollto"><i class="bx bx-user"></i>
                    <span>About</span></a></li>
            <li><a href="resume.php?halaman=resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                    <span>Resume</span></a></li>
            <li><a href="portfolio.php?halaman=portfolio" class="nav-link scrollto active"><i
                        class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="skill.php?halaman=skill" class="nav-link scrollto"><i
                        class="bx bx-server"></i><span>Skill</span>
            <li><a href="contact.php?halaman=contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                    <span>Contact</span></a></li>
            </a></li>
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-blog">Blog</li>
                    <li data-filter=".filter-sertifikat">Sertifikat</li>
                    <li data-filter=".filter-web">Project</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-blog">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/Blog1.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Blog1 1</h4>
                        <p>Apa Itu Teknologi Informasi</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/Blog1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Blog 1">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="https://nashirnst.blogspot.com/2021/07/apa-itu-teknologi-informasi.html"
                                class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- website -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/web.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Project 1</h4>
                        <p>Project 1</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/web.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Web">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="https://nashir-nst.github.io/tigabateraicorporate/index.html"
                                class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Project 2</h4>
                        <p>Project 2</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/web2.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Web">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="http://localhost/praktek/tokonst/" class="portfolio-details-lightbox"
                                data-glightbox="type: external" title="Portfolio Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/web3.png" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Project 3</h4>
                        <p>Project 3</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/web3.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Web">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="" class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- blog -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-blog">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/blog2.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Blog2</h4>
                        <p>Mengenal Bug Bounty dan Bug Hunter</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/blog2.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Blog 2">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="https://nashirnst.blogspot.com/2021/07/mengenal-bug-bounty-dan-bug-hunter.html"
                                class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-blog">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/blog3.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Blog3</h4>
                        <p>Penerapan AI di E-Commerce Rekomendasi Produk</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/blog3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Blog 3">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                data-glightbox="type: external" title="Portfolio Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-blog">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/blog4.jpeg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Blog4</h4>
                        <p>Mengenal Nmap</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/blog4.jpeg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Blog 4">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="https://nashirnst.blogspot.com/2021/01/mengenal-nmap-assalamualaikum-wr.html"
                                class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-blog">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/blog5.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Blog5</h4>
                        <p>Mengenal Ubuntu</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/blog5.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Blog 5">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="https://nashirnst.blogspot.com/2020/12/mengenal-ubuntu-assalamualaikum-wr-wb.html"
                                class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sertifikat -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-sertifikat">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/sertifikat1.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <p>Sertikat Kehadiran Seminar Bright Future Cyber Security Talent</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/sertifikat1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sertifikat">
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-sertifikat">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/sertifikat2.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <p>Sertifikat Belajar Cyber Security Untuk Pemula</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/sertifikat2.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="sertifikat">
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-sertifikat">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/sertifikat3.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <p>Menguasai Fundamental Jaringan Komputer</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/sertifikat3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="sertifikat">
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-sertifikat">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/sertifikat4.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <p>Memulai Pemrograman degan Java</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/sertifikat4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="sertifikat">
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-sertifikat">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/sertifikat5.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <p>Memulai Pemrograman degan C</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/sertifikat5.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="sertifikat">
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-sertifikat">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/sertifikat6.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <p>Belajar Prinsip Pemrograman Solid</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/sertifikat6.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="sertifikat">
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-sertifikat">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/sertifikat7.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <p>Akademi FullStack Web Developer</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/sertifikat7.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="sertifikat">
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-sertifikat">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/sertifikat8.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <p>Akademi FullStack Web Developer</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/sertifikat8.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="sertifikat">
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-lg-4 col-md-6 portfolio-item filter-blog">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/blog6.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Blog6</h4>
                        <p>Mengenal kali linux</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/blog6.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Blog 6">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="https://nashirnst.blogspot.com/2020/12/apa-itu-kali-linux.html"
                                class="portfolio-details-lightbox" data-glightbox="type: external"
                                title="Portfolio Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Section -->

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