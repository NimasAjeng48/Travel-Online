<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
  <head>
    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Travel Online</title>
    <meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Work+Sans:300,400,700')?>" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/bootstrap/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/fonts/ionicons/css/ionicons.min.css')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/owl.carousel.min.css')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/fonts/flaticon/font/flaticon.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/assets/fonts/fontawesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/select2.css')?>">
    

    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/helpers.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/style.css')?>">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('welcome/index')?>">Travel Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/Logout')?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/book2')?>">Booking</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/about2')?>">About</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/contact2')?>">Contact</a></li>
            <a href="<?php echo site_url('welcome/authentication')?>" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Login</a>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url('assets/assets/images/header.jpg')?>" data-stellar-background-ratio="0.5"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Travel Online</h2>
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
              <a href="<?php echo site_url('authentication/auth/logout')?>" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Log Out</a> 
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->

    <section class="probootstrap_section" id="section-city-guides">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Top Places Around The World</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="<?php echo base_url('assets/assets/images/img_1.jpg')?>" alt="images" class="img-fluid">
              <div class="probootstrap-text">
                <h3>Buena</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="<?php echo base_url('assets/assets/images/img_2.jpg')?>" alt="images" class="img-fluid">
              <h3>Road</h3>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="<?php echo base_url('assets/assets/images/img_3.jpg')?>" alt="images" class="img-fluid">
              <h3>Australia</h3>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="<?php echo base_url('assets/assets/images/img_4.jpg')?>" alt="images" class="img-fluid">
              <h3>Japan</h3>
            </a>
          </div>
        </div>
      </div>
    </section>
    
  

    <section class="probootstrap_section">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">About</h2>
          </div>
        </div>
      </div>
    </section>
        
        
    <section class="probootstrap-section-half d-md-flex" id="section-about">
      <div class="probootstrap-image probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url('<?php echo base_url ('assets/assets/images/img_2.jpg')?>')"></div>
      <div class="probootstrap-text">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInRight">
          <h2 class="heading mb-4">Customer Service</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href="#" class="btn btn-primary">Read More</a></p>
        </div>
      </div>
    </section>


    <section class="probootstrap-section-half d-md-flex">
      <div class="probootstrap-image order-2 probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url('<?php echo base_url('assets/assets/images/img_3.jpg')?>')"></div>
      <div class="probootstrap-text order-1">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInLeft">
          <h2 class="heading mb-4">Payment Options</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href="#" class="btn btn-primary">Learn More</a></p>
        </div>
      </div>
    </section>
    <!-- END section -->

    <footer class="probootstrap_section probootstrap-border-top">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">
              <center>Quick Links</center></h2>
          </div>
            <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">
            <a href="<?php echo site_url('welcome/index')?>"> HOME </a></h3>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">
            <a href="<?php echo site_url('welcome/about')?>"> ABOUT</h3>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">
            <a href="<?php echo site_url('welcome/book')?>">BOOKING</h3>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">
              <a href="<?php echo site_url('welcome/contact')?>">CONTACT</h3>
          </div>
        </div>
      </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center">
            <p class="probootstrap_font-14">&copy; 2017. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://probootstrap.com/" target="_blank">ProBootstrap</a><small> (Don't remove credit link on this footer. See <a href="<?php echo base_url('https://probootstrap.com/license/')?>">license</a>)</small></p>
            <p class="probootstrap_font-14">Demo Images: <a href="<?php echo base_url('https://unsplash.com/')?>" target="_blank">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="<?php echo base_url('assets/assets/js/jquery.min.js')?>"></script>
    
    <script src="<?php echo base_url('assets/assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/assets/js/owl.carousel.min.js')?>"></script>

    <script src="<?php echo base_url('assets/assets/js/bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo base_url('assets/assets/js/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/assets/js/jquery.easing.1.3.js')?>"></script>

    <script src="<?php echo base_url('assets/assets/js/select2.min.js')?>"></script>

    <script src="<?php echo base_url('assets/assets/js/main.js')?>"></script>
      </center>
    </form>
  </body>
</html>
