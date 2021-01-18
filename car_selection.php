<!--
Author: pomonart
Author URL: http://pomonart.com
-->
<?php
session_start();
$data=$_SESSION["booking_data"];
//var_dump($data);
require "get_price.php";
$prices=get_prices($data["dist"]);
$_SESSION["prices"]=$prices;


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Tripzilaa</title>
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
  <!-- //web fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="css/suggestion.css">
</head>

<body>


  <!-- Top Menu 1 -->
  <section class="w3l-top-menu-1">
    <div class="top-hd">
      <div class="container">
        <header class="row">
          <div class="social-top col-lg-3 col-6">
            <li>Follow Us</li>
            <li><a href="www.facebook.com/tripzilaa"><span class="fa fa-facebook"></span></a></li>
            <li><a href="www.instagram.com/tripzilaa"><span class="fa fa-instagram"></span></a> </li>
            <li><a href="www.twitter.com/tripzilaa"><span class="fa fa-twitter"></span></a></li>

          </div>
          <div class="accounts col-lg-9 col-6">
            <li class="top_li"><span class="fa fa-mobile"></span><a href="tel:+91 81264 19669">+91 81264 19669</a> </li>
            <?php
            if (isset($_SESSION['user'])) {

              echo '<li class="top_li1"><a href="#">' . 'User :  ' . $_SESSION['user']['firstName'] . '</a></li><li class="top_li1"><a href="logout.php">Logout</a></li>';
            } else {
            ?>
              <li class="top_li1"><a href="login.php">Login</a></li>
              <li class="top_li2"><a href="register.php">Register</a></li>
            <?php
            }
            ?>
          </div>

        </header>
      </div>
    </div>
  </section>
  <!-- //Top Menu 1 -->
  <section class="w3l-bootstrap-header">
    <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
      <div class="container">
        <a class="navbar-brand" href="index.php"><span class="fa fa-car"></span> Tripzilaa</a>
        <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.php">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>

            <li class="nav-item mr-0">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </section>


  <section class="locations-1" id="locations">
    <div class="locations py-5">
      <div class="container py-md-3">
        <div class="heading text-center mx-auto">
          <h3 class="head">price lists</h3>
          <p class="my-3 head "> choose the car you want and proceed and confirm booking</p>
        </div>
        <div class="row mt-3 pt-5">
          <div class="col-md-4 col-sm-6" onclick="location.href='payment.php?type=sadan'">
            <div class="box16">
              <img class="img-fluid" src="assets/images/sadan.jpg" alt="">
              <div class="box-content">
                <h2 class="title">Sadan</h2>
                <span class="post">₹ <?php echo (int)$prices["sadan"]; ?></span>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" onclick="location.href='payment.php?type=hatchback'">
            <div class="box16">
              <img class="img-fluid" src="assets/images/hatchback.jpg" alt="">
              <div class="box-content">
                <h2 class="title">Hatchback</h2>
                <span class="post">₹ <?php echo (int)$prices["hatchback"]; ?></span>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mt-lg-0 pt-lg-0 mt-md-4 pt-md-2"onclick="location.href='payment.php?type=random'">
            <div class="box16">
              <img class="img-fluid" src="assets/images/any.jpg" alt="">
              <div class="box-content">
                <h2 class="title">Random </h2>
                <span class="post">₹ <?php echo (int)$prices["random"]; ?></span>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2" onclick="location.href='payment.php?type=suv'">
            <div class="box16">
              <img class="img-fluid" src="assets/images/suv.jpg" alt="">
              <div class="box-content">
                <h2 class="title">suv</h2>
                <span class="post">₹ <?php echo (int)$prices["suv"]; ?></span>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2" onclick="location.href='payment.php?type=traveller'">
            <div class="box16">
              <img class="img-fluid" src="assets/images/traveller.jpg" alt="">
              <div class="box-content">
                <h2 class="title">Traveller</h2>
                <span class="post">₹ <?php echo (int)$prices["traveller"]; ?></span>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2" onclick="location.href='payment.php?type=bike'">
            <div class="box16">
              <img class="img-fluid" src="assets/images/bike.jpg" alt="">
              <div class="box-content">
                <h2 class="title">bike</h2>
                <span class="post">₹ <?php echo (int)$prices["bike"]; ?></span>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<!-- // grids block 5 -->