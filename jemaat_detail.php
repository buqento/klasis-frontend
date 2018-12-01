<?php
include("fun.php");

$jmlPaud = getJmlJiwaByPendidikan(16, 1, $con);
$jmlSd = getJmlJiwaByPendidikan(16, 2, $con);
$jmlSmp = getJmlJiwaByPendidikan(16, 3, $con);
$jmlSma = getJmlJiwaByPendidikan(16, 4, $con);
$jmlS1 = getJmlJiwaByPendidikan(16, 5, $con);
$jmlS2 = getJmlJiwaByPendidikan(16, 6, $con);
$jmlS3 = getJmlJiwaByPendidikan(16, 7, $con);

$jmlByRange03 = getJmlJiwaByUmur(0, 3, 1, 16, $con); 
$jmlByRange46 = getJmlJiwaByUmur(4, 6, 1, 16, $con); 
$jmlByRange79 = getJmlJiwaByUmur(7, 9, 1, 16, $con); 
$jmlByRange1012 = getJmlJiwaByUmur(10, 12, 1, 16, $con); 
$jmlByRange1315 = getJmlJiwaByUmur(13, 15, 1, 16, $con); 
$jmlByRange1645 = getJmlJiwaByUmur(16, 45, 1, 16, $con);
$jmlByRange4659 = getJmlJiwaByUmur(46, 59, 1, 16, $con); 
$jmlByRange6085 = getJmlJiwaByUmur(60, 85, 1, 16, $con); 
$jmlByRange86120 = getJmlJiwaByUmur(86, 120, 1, 16, $con); 

$jmlTunaRungu = getJmlJiwaByDisabilitas(16, 2, $con);
$jmlTunaWicara = getJmlJiwaByDisabilitas(16, 3, $con);
$jmlTunaDaksa = getJmlJiwaByDisabilitas(16, 4, $con); 
$jmlTunaGrahita = getJmlJiwaByDisabilitas(16, 5, $con); 
$jmlTunaLaras = getJmlJiwaByDisabilitas(16, 6, $con);
$jmlTunaGanda = getJmlJiwaByDisabilitas(16, 7, $con);
$jmlTunaNetra = getJmlJiwaByDisabilitas(16, 8, $con);

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
          <li><a href="index.php">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#">Produk</a></li>
          <li class="menu-active"><a href="#">Jemaat</a></li>
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
      <h1>Jemaat Sion</h1>
      <!-- <h2>Kamu adalah Garam dan Terang Dunia</h2> -->
      <a href="#facts" class="btn-get-started">Data Jiwa</a>
    </div>
  </section><!-- #hero -->

  <main id="main">



    <!--==========================
      pelayanan Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Jumlah Jiwa</h3>
          <p class="section-description">Jumlah keseluruhan jiwa jemaat Sion.</p>
        </div>
        <div class="row counters">

  				<div class="col-lg-4 col-sm-12 text-center">
            <span data-toggle="counter-up"><?= getJmlJiwaByStatusPernikahan(16, 1, $con) ?></span>
            <p>Kepala Keluarga</p>
  				</div>

          <div class="col-lg-4 col-sm-12 text-center">
            <span data-toggle="counter-up"><?= getJmlJiwaByJemaat(16, 1, $con) ?></span>
            <p>Laki-Laki</p>
  				</div>

          <div class="col-lg-4 col-sm-12 text-center">
            <span data-toggle="counter-up"><?= getJmlJiwaByJemaat(16, 2, $con) ?></span>
            <p>Perempuan</p>
  				</div>

  			</div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Sakramen Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Sakramen Baptisan</h3>
          <p class="section-description">Data jumlah baptisan dikelompokkan berdasarkan jenis kelamin.</p>
        </div>
        <div class="row">
 
          <div class="col-md-6 col-sm-12">
            <h3>Laki-laki</h3>
            <canvas id="chartBaptisLaki" width="400" height="400"></canvas>
            <br>
          </div>

          <div class="col-md-6 col-sm-12">
            <h3>Perempuan</h3>
            <canvas id="myPieChart" width="400" height="400"></canvas>
          </div>

        </div>

      </div>
    </section><!-- #facts -->



    <!--==========================
      Pendidikan Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Pendidikan</h3>
          <p class="section-description">Data jumlah jiwa dikelompokkan berdasarkan pendidikan terakhir.</p>
        </div>
        <div class="row">

          <div class="col-md-6 col-sm-12">

            <table class="table">

                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Jenis Pendidikan</th>
                  <th scope="col">Jumlah</th>
                </tr>

                <?php
                $num = 1;
                $sql = "select count(biodata.id) as jumlah, pendidikan.name from biodata inner join pendidikan on biodata.pendidikan_id = pendidikan.id group by biodata.pendidikan_id";
                $result = $con->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $jumlah = $row['jumlah'];
                    $name = $row['name'];


                ?>
                <tr>
                  <th scope="row"><?= $num++ ?></th>
                  <td><?= $name ?></td>
                  <td><?= $jumlah ?></td>
                </tr>

                <?php } ?>

            </table>

          </div>

          <div class="col-md-6 col-sm-12">
            <canvas id="chartPendidikan" height="300"></canvas>
          </div>


        </div>

      </div>
    </section><!-- #facts -->
    
    <!--==========================
      Pendidikan Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Pekerjaan</h3>
          <p class="section-description">Data jumlah jiwa dikelompokkan berdasarkan pekerjaan utama.</p>
        </div>
        <div class="row">

          <div class="col-md-4 col-sm-12">

            <table class="table">

                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Jenis Pekerjaan</th>
                  <th scope="col">Jumlah</th>
                </tr>

                <?php



                $num = 1;
                $sql = "select count(biodata.id) as jumlah, pekerjaan.name from biodata inner join pekerjaan on biodata.pekerjaan_id = pekerjaan.id group by biodata.pekerjaan_id";
                $result = $con->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $jumlah = $row['jumlah'];
                    $name = $row['name'];
                ?>
                <tr>
                  <th scope="row"><?= $num++ ?></th>
                  <td><?= $name ?></td>
                  <td><?= $jumlah ?></td>
                </tr>

                <?php } ?>

            </table>
          </div>

          <div class="col-md-8 col-sm-12">
            <canvas id="chartPekerjaan" height="300"></canvas>
          </div>

        </div>

      </div>
    </section><!-- #facts -->
    


    <!--==========================
      Bina Umat Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Bina Umat</h3>
          <p class="section-description">Data jumlah jiwa dikelompokkan berdasarkan range umur.</p>
        </div>
        <div class="row">

          <div class="col-md-6 col-sm-12">

            <table class="table">

                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Range (Tahun)</th>
                  <th scope="col">Jumlah</th>
                </tr>

                <tr>
                  <th scope="row">1</th>
                  <td>0-3</td>
                  <td><?= $jmlByRange03 ?></td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>4-6</td>
                  <td><?= $jmlByRange46 ?></td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>7-9</td>
                  <td><?= $jmlByRange79 ?></td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>10-12</td>
                  <td><?= $jmlByRange1012 ?></td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td>13-15</td>
                  <td><?= $jmlByRange1315 ?></td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>16-45</td>
                  <td><?= $jmlByRange1645 ?></td>
                </tr>

                <tr>
                  <th scope="row">7</th>
                  <td>46-59</td>
                  <td><?= $jmlByRange4659 ?></td>
                </tr>

                <tr>
                  <th scope="row">8</th>
                  <td>60-85</td>
                  <td><?= $jmlByRange6085 ?></td>
                </tr>

                <tr>
                  <th scope="row">9</th>
                  <td>>=86</td>
                  <td><?= $jmlByRange86120 ?></td>
                </tr>

            </table>

          </div>


          <div class="col-md-6 col-sm-12">
            <canvas id="chartBinaUmat" height="300"></canvas>
          </div>

        </div>

      </div>
    </section><!-- #facts -->


    <!--==========================
      Difable Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Disabilitas</h3>
          <p class="section-description">Data jumlah jiwa penyandang disabilitas (cacat tubuh).</p>
        </div>
        <div class="row counters">

          <div class="col-md-6 col-sm-12">

            <table class="table">

                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Jumlah</th>
                </tr>

                <?php
                $num = 1;
                $sql = "select count(biodata.id) as jumlah, cacat.name from biodata inner join cacat on biodata.cacat_id = cacat.id group by biodata.cacat_id";
                $result = $con->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $jumlah = $row['jumlah'];
                    $name = $row['name'];


                ?>
                <tr>
                  <th scope="row"><?= $num++ ?></th>
                  <td><?= $name ?></td>
                  <td><?= $jumlah ?></td>
                </tr>

                <?php } ?>

            </table>

          </div>

          <div class="col-md-6 col-sm-12">
            <canvas id="chartDisabilitas" height="300"></canvas>
          </div>

        </div>

      </div>
    </section><!-- #facts -->


    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Penatua & Diaken</h3>
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

  <?php

                $dL = "1,2,3,4,5,6";
                $rL = explode(",",$dL);
                print_r($rL);
  ?>

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

  var jmlLakiBaptis = <?= getJmlJiwaByBaptisJenkel(16, 1, 1, $con); ?>;
  var jmlLakiBelumBaptis = <?= getJmlJiwaByBaptisJenkel(16, 0, 1, $con); ?>;

  var ctx = document.getElementById("chartBaptisLaki");
  var chartBaptisLaki = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: ["Sudah Baptis", "Belum Baptis"],
          datasets: [{
              label: '# of Votes',
              data: [jmlLakiBaptis, jmlLakiBelumBaptis],
              backgroundColor: ['#003f5c','#bc5090','#ffa600'],
              borderColor: ['#003f5c','#bc5090','#ffa600'],
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

  var jmlPerempuanBaptis = <?= getJmlJiwaByBaptisJenkel(16, 1, 2, $con); ?>;
  var jmlPerempuanBelumBaptis = <?= getJmlJiwaByBaptisJenkel(16, 0, 2, $con); ?>;

  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: ["Sudah Baptis", "Belum Baptis"],
          datasets: [{
              label: '# of Votes',
              data: [jmlPerempuanBaptis, jmlPerempuanBelumBaptis],
              backgroundColor: ['#003f5c','#bc5090','#ffa600'],
              borderColor: ['#003f5c','#bc5090','#ffa600'],
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


  var jmlPaud = <?= $jmlPaud ?>;
  var jmlSd = <?= $jmlSd ?>;
  var jmlSmp = <?= $jmlSmp ?>;
  var jmlSma = <?= $jmlSma ?>;
  var jmlS1 = <?= $jmlS1 ?>;
  var jmlS2 = <?= $jmlS2 ?>;
  var jmlS3 = <?= $jmlS3 ?>;
  var ctx = document.getElementById("chartPendidikan");
  var chartPendidikan = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: ["PAUD", "SD", "SMP", "SMU", "S1", "S2", "S3"],
          datasets: [{
              label: false,
              data: [jmlPaud, jmlSd, jmlSmp, jmlSma, jmlS1, jmlS2, jmlS3],
              backgroundColor: ['#004c6d','#32607e','#517590','#6e8ba1','#8aa1b4','#a7b8c6','#c4cfd9','#e1e7ec','#ffffff'],
              borderColor: ['#004c6d','#32607e','#517590','#6e8ba1','#8aa1b4','#a7b8c6','#c4cfd9','#e1e7ec','#ffffff'],
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
  

  var jmlPekerjaanLainnya = <?= getJmlJiwaByPekerjaan(16, 1, $con); ?>;
  var jmlPekerjaanPns = <?= getJmlJiwaByPekerjaan(16, 2, $con); ?>;
  var jmlPekerjaanHonor = <?= getJmlJiwaByPekerjaan(16, 3, $con); ?>;
  var jmlPekerjaanGuru = <?= getJmlJiwaByPekerjaan(16, 4, $con); ?>;
  var jmlPekerjaanTniPolri = <?= getJmlJiwaByPekerjaan(16, 5, $con); ?>;
  var jmlPekerjaanWiraswasta = <?= getJmlJiwaByPekerjaan(16, 6, $con); ?>;
  var jmlPekerjaanBumn = <?= getJmlJiwaByPekerjaan(16, 7, $con); ?>;
  var jmlPekerjaanDosen = <?= getJmlJiwaByPekerjaan(16, 8, $con); ?>;
  var jmlPekerjaanPengacara = <?= getJmlJiwaByPekerjaan(16, 9, $con); ?>;
  var jmlPekerjaanDokter = <?= getJmlJiwaByPekerjaan(16, 10, $con); ?>;
  var jmlPekerjaanPerawat = <?= getJmlJiwaByPekerjaan(16, 11, $con); ?>;
  var jmlPekerjaanPendeta = <?= getJmlJiwaByPekerjaan(16, 12, $con); ?>;
  var jmlPekerjaanNotaris = <?= getJmlJiwaByPekerjaan(16, 13, $con); ?>;
  var jmlPekerjaanArsitek = <?= getJmlJiwaByPekerjaan(16, 14, $con); ?>;
  var jmlPekerjaanOjek = <?= getJmlJiwaByPekerjaan(16, 15, $con); ?>;
  var jmlPekerjaanSopir = <?= getJmlJiwaByPekerjaan(16, 16, $con); ?>;
  var jmlPekerjaanBecak = <?= getJmlJiwaByPekerjaan(16, 17, $con); ?>;
  var jmlPekerjaanPensiunan = <?= getJmlJiwaByPekerjaan(16, 18, $con); ?>;
  var jmlPekerjaanNelayan = <?= getJmlJiwaByPekerjaan(16, 19, $con); ?>;

  var ctx = document.getElementById("chartPekerjaan");
  var chartPekerjaan = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["Lain", "PNS", "Honorer", "Guru", "TNI/Polri", "Wiraswasta", "BUMN", "Dosen", "Pengacara", "Dokter", "Perawat", "Pendeta", "Notaris", "Arsitek", "Ojek", "Sopir", "Becak", "Pensiunan", "Nelayan"],
          datasets: [{
              label: "Data Pekerjaan",
              data: [jmlPekerjaanLainnya, jmlPekerjaanPns, jmlPekerjaanHonor, jmlPekerjaanGuru, jmlPekerjaanTniPolri, jmlPekerjaanWiraswasta, jmlPekerjaanBumn, jmlPekerjaanDosen, jmlPekerjaanPengacara, jmlPekerjaanDokter, jmlPekerjaanPerawat, jmlPekerjaanPendeta, jmlPekerjaanNotaris, jmlPekerjaanArsitek, jmlPekerjaanOjek, jmlPekerjaanSopir, jmlPekerjaanBecak, jmlPekerjaanPensiunan, jmlPekerjaanNelayan],
              backgroundColor: [
'#488f31',
'#6a9832',
'#88a037',
'#a5a73f',
'#c0af4a',
'#dbb659',
'#f4bd6a',
'#f2a95e',
'#ef9556',
'#eb8050',
'#e56b4e',
'#dd554f',
'#d43d51',

'#003f5c',
'#2f4b7c',
'#665191',
'#a05195',
'#d45087',
'#f95d6a',
'#ff7c43',
'#ffa600'
              ],
              borderColor: [
'#488f31',
'#6aa040',
'#89b050',
'#a7c162',
'#c5d275',
'#e2e489',
'#fff59f',
'#fcd983',
'#f8bc6c',
'#f49e5c',
'#ec8052',
'#e2604f',
'#d43d51',
'#003f5c',
'#2f4b7c',
'#665191',
'#a05195',
'#d45087',
'#f95d6a',
'#ff7c43',
'#ffa600'
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

  var jmlByRange03 = <?= $jmlByRange03 ?>;
  var jmlByRange46 = <?= $jmlByRange46 ?>;
  var jmlByRange79 = <?= $jmlByRange79 ?>;
  var jmlByRange1012 = <?= $jmlByRange1012 ?>;
  var jmlByRange1315 = <?= $jmlByRange1315 ?>;
  var jmlByRange1645 = <?= $jmlByRange1645 ?>;
  var jmlByRange4659 = <?= $jmlByRange4659 ?>;
  var jmlByRange6085 = <?= $jmlByRange6085 ?>;
  var jmlByRange86120 = <?= $jmlByRange86120 ?>;

  var ctx = document.getElementById("chartBinaUmat");
  var chartBinaUmat = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["0-3", "4-6", "7-9", "10-12", "13-15", "16-45", "46-59", "60-85", ">= 86"],
          datasets: [{
              label: '# Jiwa',
              data: [jmlByRange03, jmlByRange46, jmlByRange79, jmlByRange1012, jmlByRange1315, jmlByRange1645, jmlByRange4659, jmlByRange6085, jmlByRange86120],
              backgroundColor: [
'#10006d',
'#3c167e',
'#5c2d8e',
'#7945a0',
'#955db2',
'#b076c4',
'#cb91d7',
'#e5aceb',
'#ffc8ff'
              ],
              borderColor: [
'#10006d',
'#3b207f',
'#593d91',
'#765ba3',
'#917ab5',
'#ad9ac8',
'#c8bada',
'#e3dcec',
'#ffffff'
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


  var jmlTunaRungu = <?= $jmlTunaRungu ?>;
  var jmlTunaWicara = <?= $jmlTunaWicara ?>;
  var jmlTunaDaksa = <?= $jmlTunaDaksa ?>;
  var jmlTunaGrahita = <?= $jmlTunaGrahita ?>;
  var jmlTunaLaras = <?= $jmlTunaLaras ?>;
  var jmlTunaGanda = <?= $jmlTunaGanda ?>;
  var jmlTunaNetra = <?= $jmlTunaNetra ?>;

  var ctx = document.getElementById("chartDisabilitas");
  var chartDisabilitas = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: ["Tuna Rungu", "Tuna Wicara", "Tuna Daksa", "Tuna Grahita", "Tuna Laras", "Tuna Ganda", "Tuna Netra"],
          datasets: [{
              label: false,
              data: [jmlTunaRungu, jmlTunaWicara, jmlTunaDaksa, jmlTunaGrahita, jmlTunaLaras, jmlTunaGanda, jmlTunaNetra],
              backgroundColor: [
'#003f5c',
'#374c80',
'#7a5195',
'#bc5090',
'#ef5675',
'#ff764a',
'#ffa600'
              ],
              borderColor: [
'#003f5c',
'#374c80',
'#7a5195',
'#bc5090',
'#ef5675',
'#ff764a',
'#ffa600'
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