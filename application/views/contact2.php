<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
      <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Travel Online</title>
		<meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    
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
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/book2')?>">Booking</a></li>s
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/contact2')?>">Contact</a></li>
             <a href="<?php echo site_url('welcome/authentication')?>" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Login</a>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url('assets/assets/images/header.jpg')?>')" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">CONTACT</h2>
             
            <p class="lead mb-5 probootstrap-animate">
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    
    
    <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">CONTACT</h2>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
           
            <div class="row">
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-paper-airplane"></span> Email</span>
                    Ananda_Airlines@gmail.com
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> Phone</span>
                    +62 822 3137 6661
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> Fax</span>
                    031 897962
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-location"></span> Address</span>
                    Sidoarjo, 61271 <br>
                    Jawa Timur <br>
                    Indonesia
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6  probootstrap-animate">
            <form action="#" method="post" class="probootstrap-form probootstrap-form-box mb60">
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname" class="sr-only sr-only-focusable">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname" class="sr-only sr-only-focusable">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only sr-only-focusable">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only sr-only-focusable">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
              </div>
            </form>
          </div>
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
            <a href="<?php echo site_url('welcome/about')?>"> ABOUT </a></h3>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">
            <a href="<?php echo site_url('welcome/book')?>"> BOOKING </a></h3>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3"> 
            <a href="<?php echo site_url('welcome/contact')?>"> CONTACT </a></h3>
          </div>
        </div>
      </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center">
            <p class="probootstrap_font-14">Nimas Risky &copy;2018<br></p>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="<?php echo base_url('assets/assets/js/jquery.min.js')?>"></script>
    
    <script src="<?php echo base_url('assets/assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/assets/js/owl.carousel.min.js')?>"></script>
    
    <script src="<?php echo base_url('assets/assets/js/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/assets/js/jquery.easing.1.3.js')?>"></script>

    <script src="<?php echo base_url('assets/assets/js/select2.min.js')?>"></script>

    <script src="<?php echo base_url('assets/assets/js/main.js')?>"></script>
	</body>
</html>