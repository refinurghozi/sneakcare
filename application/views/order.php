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

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('Shoe/home') ?>">SNEAKCARE.LAB</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('Shoe/home') ?>">HOME</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('Shoe/promo') ?>">LATEST PROMO</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('Shoe/order') ?>">ORDER NOW</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>




    <!-- ORDER BTTON -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white" style="margin-top:50px">ORDER FORM</h2>
        <hr class="star-light mb-5">



      </div>
    </section>



      <style media="screen">
          body {
            color: #f5f5f5;
            font-family: 'Source Sans Pro', sans-serif;
          }
          h1 {
            font-family: 'Ubuntu', sans-serif;
            margin-top: 0;
          }
          .email {
          margin-bottom: 45px;
          }
          #juice {
            background-color: #89AF1E;
            padding: 0px 15px 75px 15px;
          }
          .juice-container {
            max-width: 1080px;
            margin-left: auto;
            margin-right: auto;
            margin-top: -50px;
          }
          .juice-title.underline:before {
            width: 40px;
          }
          .juice-form {
            padding-top: 40px;
          }
          .form-field {
            padding-bottom: 15px;
          }
          .juice-img {
            opacity: 0.7;
            height: 150px;
            width: auto;
          }
          /*input,
          input::-webkit-input-placeholder, {
            font-size: 18px;
          }*/
          .notes {
          margin-top: 45px;
          }
          textarea,
          textarea::-webkit-input-placeholder {
            font-size: 18px;
          }
          .juice-form label {
            display: inline-block;
            vertical-align: top;
            text-transform: uppercase;
            font-size: 25px;
            padding-left: 25px;
          }
          .notes label,
          .name label,
          .email label {
            font-size: 15px;
          }
          .juice-form input:not([type="submit"]):not([type="reset"]):not([id="juice-checkbox"]),
          .juice-form textarea{
            font-size: 18px;
            font-size: 1.8rem;
            background-color: #719117;
            border: 1px solid transparent;
            color: #fff;
            padding: 20px;
            -webkit-transition: border-color .3s;
            transition: border-color .3s;
            width: 100%;
          }
          .juice-form select{
            font-size: 15px;
            font-size: 1.8rem;
            background-color: #719117;
            border: 1px solid transparent;
            color: #fff;
            padding: 20px;
            -webkit-transition: border-color .3s;
            transition: border-color .3s;
            width: 100%;
          }
          .juiceform input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
              -webkit-appearance: none;
              margin: 0;
          } /*chrome*/

          .juiceform input[type=number] {
              -moz-appearance: textfield;
              appearance: textfield;
              margin: 0;
          }/*mozilla*/
          /* Checkboxes
          .juice-form input:not([type="submit"]):not([type="reset"]) {
            height: 40px;
            width: 40px;
            margin-top: 0px;
          }*/
          /* Buttons */
          ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
              color: #fff;
              opacity: 1; /* Firefox */
          }

          :-ms-input-placeholder { /* Internet Explorer 10-11 */
              color: #fff;
          }

          ::-ms-input-placeholder { /* Microsoft Edge */
              color: #fff;
          }
          .btn {
            color: #fff;
            background: none;
            border: 2px solid transparent;
            display: inline-block;
            padding: 10px 20px;
            position: relative;
            text-decoration: none;
            text-transform: uppercase;
            -webkit-transition: background-color .3s, color .3s;
            transition: background-color .3s, color .3s;
            margin-right: 15px;
          }
          .light-button {
            border-color: #fff;
          }
          .light-button:focus,
          .light-button:hover {
            background-color: #fff;
            color: #2196F3;
          }
          .dark-button {
            border-color: #2196F3;
          }
          .dark-button:focus,
          .dark-button:hover {
            background-color: #2196F3;
            color: #fff;
          }


      </style>
          <div class="container-fluid" id="juice">
            <div class="row">
              <div class="col-md-12">
                <div class="juice-container">

                  <form name="mannForm" class="juice-form"
                        action="https://formspree.io/addRealEmailHere@youremail.com"
                        onsubmit="return validateForm()"
                        method="POST">
                    <div class="col-md-6 form-field nama">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" placeholder="Nama" >
                    </div>
                    <div class="col-md-6 form-field alamat">
                      <label for="alamat">Alamat</label>
                      <input type="text" name="alamat" placeholder="Alamat" >
                    </div>
                    <div class="col-md-6 form-field jumlah">
                      <label for="jumlah">Jumlah Sepatu</label>
                      <input type="number" name="jumlah" min="1" max="9" class="form-control" id="number" name="number" data-rule-required="true" aria-required="true" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==1 && event.keyCode!=8) return false;">
                    </div>
                    <div class="col-md-6 form-field jumlah">
                      <label for="nomorhp">Nomor HP</label>
                      <input type="number" name="jumlah" min="1" max="0899999999999" class="form-control" id="number" name="number" data-rule-required="true" aria-required="true" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==13 && event.keyCode!=8) return false;">
                    </div>
                    <div class="col-md-6 form-field service">
                      <label for="sevice">Jenis Service</label>
                      <br>
                      <select>
                        <option value="fastclean">Fast Clean</option>
                        <option value="deepclean">Deep Clean</option>
                        <option value="unyellowing">Unyellowing</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-field keterangan">
                      <label for="notes">Keterangan tambahan</label>
                      <textarea name="notes" id="Message" placeholder="Keterangan tambahan " ></textarea>
                    </div>
                    <div class="error-message col-md-4 form-field"></div>
                    <div class="btn-group col-md-12 form-field">
                      <input class="btn light-button" name="submit" type="submit" value="Order!" />

                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>



    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Kejawan Putih Tambak IIA
              <br>Surabaya</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Follow Us <br> On Instagram!</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="http://instagram.com/sneakcare.lab">
                  <i class="fa fa-fw fa-instagram"></i>
                </a>
              </li>

            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Sneakcare.Lab</h4>
            <p class="lead mb-0">Sneakcare.lab is a premium quality shoe treatment and we assure you get the best service in town</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
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
