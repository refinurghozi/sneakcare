<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SNEACKARE.LAB | PREMIUM SHOES TREATMENT</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/freelancer.min.css')?>" rel="stylesheet">

  </head>


<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

  .login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  }
  .form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  }
  .form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  }
  .form button:hover,.form button:active,.form button:focus {
  background: #43A047;
  }
  .form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
  }
  .form .message a {
  color: #4CAF50;
  text-decoration: none;
  }
  .form .register-form {
  display: none;
  }
  .container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
  }
  .container:before, .container:after {
  content: "";
  display: block;
  clear: both;
  }
  .container .info {
  margin: 50px auto;
  text-align: center;
  }
  .container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
  }
  .container .info span {
  color: #4d4d4d;
  font-size: 12px;
  }
  .container .info span a {
  color: #000000;
  text-decoration: none;
  }
  .container .info span .fa {
  color: #EF3B3A;
  }
  body {
  background: #89AF1E; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #89AF1E, #89AF1E);
  background: -moz-linear-gradient(right, #89AF1E, #89AF1E);
  background: -o-linear-gradient(right, #89AF1E, #89AF1E);
  background: linear-gradient(to left, #89AF1E, #89AF1E);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  }

</style>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('Shoe/home') ?>">SNEAKCARE.LAB</a>
      </div>
    </nav>





    <!-- login Section -->
    <br><br><br>
    <div class="login-page">
  <div class="form">
    <form action="<?php echo base_url()?>Cadmin" method="post" accept-charset="utf-8" class="login-form">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
      <!--<input type="submit" name="submit" value="Login" class="btn btn-large btn-primary" />-->
    </form>

  </div>
</div>

<br><br><br><br><br>


    <!-- Footer -->


    <div class="copyright py-4 text-center text-white" style="background-color:#4c6014;">
      <div class="container">
        <small>Copyright &copy; Sneakcare.Lab 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


    <script type="text/javascript">
          $('.message a').click(function(){
       $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
      });
    </script>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.min.js')?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/js/jqBootstrapValidation.js')?>"></script>
    <script src="<?php echo base_url('assets/js/contact_me.js')?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/js/freelancer.min.js')?>"></script>


  </body>

</html>
