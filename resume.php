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
            <li><a href="resume.php?halaman=resume" class="nav-link scrollto active"><i class="bx bx-file-blank"></i>
                    <span>Resume</span></a></li>
            <li><a href="portfolio.php?halaman=portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                    <span>Portfolio</span></a></li>
            <li><a href="skill.php?halaman=skill" class="nav-link scrollto"><i class="bx bx-server"></i>
                    <span>Skill</span></a></li>
            <li><a href="contact.php?halaman=contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                    <span>Contact</span></a></li>
        </ul>
    </nav>
</header>

<section id="resume" class="resume py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
            <h2 class="text-primary">Resume</h2>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-4 text-secondary">My Education</h3>
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-right">
                        <span class="icon"><i class="fas fa-graduation-cap"></i></span>
                        <h5>Sekolah Dasar</h5>
                        <p><strong>SDN 1 cisalak Depok & SDN 096915 Siantar</strong> | 2008 - 2013</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-right">
                        <span class="icon"><i class="fas fa-school"></i></span>
                        <h5>MTS</h5>
                        <p><strong>MTS NASYATUL KHARI DEPOK</strong> | 2014 - 2017</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-right">
                        <span class="icon"><i class="fas fa-school"></i></span>
                        <h5>SMK</h5>
                        <p><strong>SMK YPPD DEPOK</strong> | 2017 - 2020</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-right">
                        <span class="icon"><i class="fas fa-university"></i></span>
                        <h5>S1</h5>
                        <p><strong>STTNF</strong> | 2020 - 2024</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h3 class="mb-4 text-secondary">My Experience</h3>
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-left">
                        <span class="icon"><i class="fas fa-tools"></i></span>
                        <h5>Teknisi Komputer</h5>
                        <p><strong>Casscom</strong> | 2018 - 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
AOS.init();
</script>

<!-- CSS tambahan -->
<style>
.timeline-item {
    background: #fff;
    border-left: 4px solid #007bff;
    padding: 15px;
    margin-bottom: 20px;
    position: relative;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.timeline-item .icon {
    position: absolute;
    left: -28px;
    top: 10px;
    background: #007bff;
    color: #fff;
    padding: 8px;
    border-radius: 50%;
    font-size: 16px;
}
</style>