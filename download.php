<?php
include 'dbConfig.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TNH Photograph</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.1.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container">
    <div class="header-container d-flex align-items-center">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>TNH Photography</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html#header">Home</a></li>
            <li><a href="index.html#about">About</a></li>
            <li><a href="index.html#services">Services</a></li>
            <li><a href="portfolio-details.html">Portfolio</a></li>
          
          
          <li><a href="contact.php">Contact</a></li>

          <li class="get-started"><a href="download.php">View your Photos</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div><!-- End Header Container -->
<body>

<form action="downloading.php" method="post" enctype="multipart/form-data">
  <labe>Name of the file</label>
  <input type="text" name="picture" placeholder = "order number">
  </br>
  </br>
  
  <input type="submit" name="submit" value = "Get File">
</form>

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
          <h3>TNH Photography</h3>
          <p>
            Toronto <br>
            New York<br>
            Hamilton<br><br>
            
            <strong>Email:</strong> tnhphotos2018@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="index.html#header">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="index.html#about">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="index.html#services">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="portfolio-details.html">Portfolio</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="photos.php">Admin Login</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Travel Photographer</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Freelance Photographer</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Event Photographer</a></li>
          </ul>
        </div>

        

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" target = "_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="https://www.facebook.com/bina.persaud.7" target = "_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="https://www.instagram.com/tnh_photos/" target = "_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
      <!--<a href="#" target = "_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>