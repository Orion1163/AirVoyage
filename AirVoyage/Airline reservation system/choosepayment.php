<?php include('flightdb.php') ?>
<?php include('loginvalid.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment</title>
    <link rel="stylesheet" href="css/paystyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  </head>
  <body>
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img class="img" src="travel.png">AirVoyage</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <?php if(isset($_SESSION['uname'])): ?>
        <a class="nav-link" id="user" href="#"><?php echo "Welcome " .$_SESSION['uname']; ?></a>
      <?php endif ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usersearch.php"><i class="fa fa-plane" aria-hidden="true"></i>Flight Schedules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php"><i class="fa fa-question-circle" aria-hidden="true"></i>About us</a>
      </li>
    </ul>
  </div>
</nav>
    </section>
    <?php $Price=$_GET['Price']*$_SESSION['num']?>
    <div class="pricemsg text-center">
      <div class="alert alert-info" role="alert">
    <h1>    Amount Payable <strong><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $Price ?> </strong> </h1>
</div>
    </div>
    <section>
      <div class="payment">
        <div class="payment-logo">
          <p>p</p>
        </div>

        <h3>Choose payment type</h3><br><br>
      <form  method="post">
        <center>
         <input type="radio" required name="type" value="Debit"> Debit Card <br><br>
         <input type="radio" name="type" value="Credit"> Credit Card <br><br>
         <input type="radio" name="type" value="netbank"> Net Banking <br><br>
       </center>
       <br><br>
          <div class="text-center">
          <button class="btn btn-primary w-50" type="submit" name="pbtn">Proceed</button>
        </div>
          </form>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
      </div>
    </section>
    <?php
    payment_mode();
    function payment_mode(){
    if(isset($_POST['pbtn'])){
      $price = $_GET['Price'];
      if ($_POST['type'] == 'Debit' || $_POST['type'] == 'Credit' )
      header("Location:payment.php?Price=$price");
    }
  }
     ?>
          </section>
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-info">
        <div class="ftitle">
        <h3>AirVoyage</h3>
      </div>
        <p>"Experience seamless travel planning with our airplane ticket booking system. Discover a world of destinations, find the best fares, and book your flights with ease, all in one place. Your next adventure is just a click away!"</p>
      </div>
      <div class="col-md-4 footer-links">
        <h3>Menu</h3>
        <ul>
          <li><i class="fa fa-home" aria-hidden="true"></i><a href="homepage.php">Home</a></li>
          <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="usersearch.php">Book tickets</a></li>
          <li><i class="fa fa-plane" aria-hidden="true"></i><a href="usersearch.php">Flight Schedules</a></li>
          <li><i class="fa fa-question-circle" aria-hidden="true"></i><a href="aboutus.php">About us</a></li>
          <li><i class="fa fa-phone" aria-hidden="true"></i><a href="contactus.php">Contact us</a></li>
        </ul>
      </div>
      <div class="col-md-4 footer-social">
        <h3>Follow us</h3>
        <p>"Follow us to pursue your dreams and reach your dream destination."</p>

          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
      </div>


  </div>
  <div class="box">
    <div class="copyright">
      &copy; copyright <strong>AirVoyage</strong>.All rights reserved.
        Designed with <i class="fa fa-heart" aria-hidden="true"></i> by Rohan, Sahil & Arnav
  </div>
  </div>
</section>
  </body>
</html>
