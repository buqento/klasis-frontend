<?php
include("fun.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Klasis Ambon</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> -->
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#hero">Klasis</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#">Produk</a></li>
          <li><a href="jemaat_detail.php">Jemaat</a></li>
          <li><a href="#portfolio">Gallery</a></li>
          <li><a href="#">Event</a></li>
          <li><a href="#">Artikel</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Klasis Ambon</h1>
      <h2>Kamu adalah Garam dan Terang Dunia</h2>
      <a href="#about" class="btn-get-started">Visi & Misi</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      Tentang kami Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Visi & Misi</h2>
            <p>
              Menjadi Klasis Yang Dibangun di Dalam Yesus Kristus Untuk Mewujudkan Kualitas Hidup Semua Ciptaan Dalam Konteks Kota Yang Damai, Adil, Sejahterah dan Lestari.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-check"></i></div>
              <h4 class="title"><a href="">Mengembangkan</a></h4>
              <p class="description">Mengembangkan Teologi Kontekstual dan Spritualitas Yang Berpihak Kepada Hidup.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-check"></i></div>
              <h4 class="title"><a href="">Mengupayakan</a></h4>
              <p class="description">Mengupayakan Tegaknya Keadilan, Perdamaian dan Kesejahtreraan Umat Serta Kelestarian Lingkungan.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-check"></i></div>
              <h4 class="title"><a href="">Membangun</a></h4>
              <p class="description">Membangun Wilayah Pelayanan Klasis GPM Kota Ambon Sebagai Rumah Bersama.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-check"></i></div>
              <h4 class="title"><a href="">Mengembangkan</a></h4>
              <p class="description">Mengembangkan Fungsi Penatalayanan Klasis Secara Efektif Dan Berkelanjutan.</p>
            </div>

            

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      pelayanan Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Pelayanan</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-sm-12 text-center">
            <span data-toggle="counter-up"><?= getJmlJemaat($con) ?></span>
            <p>Jemaat</p>
  				</div>

          <div class="col-lg-3 col-sm-12 text-center">
            <span data-toggle="counter-up"><?= getJmlUnit($con) ?></span>
            <p>Unit Pelayanan</p>
  				</div>

          <div class="col-lg-3 col-sm-12 text-center">
            <span data-toggle="counter-up"><?= getJmlPelayan($con) ?></span>
            <p>Pelayan</p>
  				</div>

          <div class="col-lg-3 col-sm-12 text-center">
            <span data-toggle="counter-up"><?= getJmlJiwa($con) ?></span>
            <p>Jiwa</p>
  				</div>

  			</div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Produk Kelembagaan</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Rencana Strategi</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-balance-scale"></i></a></div>
              <h4 class="title"><a href="">Persidangan</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-file"></i></a></div>
              <h4 class="title"><a href="">Surat Keputusan</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-book"></i></a></div>
              <h4 class="title"><a href="">Himpunan Materi</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Layanan Doa</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Layanan Doa</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Sidang Klasis</li>
              <li data-filter=".filter-card">Ibadah Raya</li>
              <li data-filter=".filter-logo">Pernikahan</li>
              <li data-filter=".filter-web">Lainnya</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/gallery/app1.JPG" alt="">
              <div class="details">
                <h4>App 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/gallery/app2.JPG" alt="">
              <div class="details">
                <h4>Web 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/gallery/app3.JPG" alt="">
              <div class="details">
                <h4>App 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/gallery/app4.JPG" alt="">
              <div class="details">
                <h4>Card 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/gallery/app5.JPG" alt="">
              <div class="details">
                <h4>Card 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/gallery/app6.JPG" alt="">
              <div class="details">
                <h4>Web 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/gallery/app7.JPG" alt="">
              <div class="details">
                <h4>Card 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/gallery/app8.JPG" alt="">
              <div class="details">
                <h4>App 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/gallery/app9.JPG" alt="">
              <div class="details">
                <h4>Logo 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/gallery/app10.JPG" alt="">
              <div class="details">
                <h4>Logo 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/gallery/app11.JPG" alt="">
              <div class="details">
                <h4>Web 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/gallery/app12.JPG" alt="">
              <div class="details">
                <h4>Logo 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Majelis</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Penatua</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Diaken</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>Penatua</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <h4>John Jepson</h4>
              <span>Penatua</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Kontak Kami</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.376343847397!2d128.18062837127212!3d-3.6992523395574484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce848cc0eb2b1%3A0xb5e96020f77c5e07!2sJl.+Diponegoro+No.25%2C+Kel+Ahusen%2C+Sirimau%2C+Kota+Ambon%2C+Maluku!5e0!3m2!1sen!2sid!4v1542601450400" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

        </div>

      </div>

    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Klasis Ambon</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Powered by <a href="https://buqento.com/" target="_BLANK">bvqento</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <script src="js/Chart.js"></script>
  <script>
  var ctx = document.getElementById("myBarChart");
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["Sudah Baptis", "Belum Baptis"],
          datasets: [{
              label: "",
              data: [125, 198],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });


  var ctx = document.getElementById("myDoughnutChart");
  var myDoughnutChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: ["Sudah Baptis", "Belum Baptis"],
          datasets: [{
              label: false,
              data: [12, 19],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });

  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ["Sudah Baptis", "Belum Baptis"],
          datasets: [{
              label: '# s',
              data: [12, 19],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });
  </script>

</body>
</html>
