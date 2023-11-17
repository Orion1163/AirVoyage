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
  <a class="navbar-brand" href="#"><img class="img" src="img/travel.png">AirVoyage</a>
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
        <a class="nav-link" href="#"><i class="fa fa-plane" aria-hidden="true"></i>flight schedules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>about us</a>
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

        <h2>Payment Gateway</h2>
      <form class="" action="realbooking.php" method="post">
        <div class="card space icon-relative">
          <label class="label">Choose card:</label>
          <select  required class="select" name="choose-card">
            <option class="option" disabled selected value="">Select a card</option>
            <option class="option" value="MasterCard">MasterCard</option>
            <option class="option" value="Visa">Visa</option>
            <option class="option" value="American Express">American Express</option>
            <option class="option" value="American Express">Citibank</option>
          </select>
        </div>
          <div class="card space icon-relative">
            <label class="label">Card holder:</label>
            <input type="text" class="input"  required  placeholder="Name on Card">
            <i class="fas fa-user"></i>
          </div>
          <div class="card space icon-relative">
            <label class="label">Card number:</label>
            <input type="text" class="input" name="card number" placeholder="Card Number"  required data-mask="0000 0000 0000 0000">
            <i class="far fa-credit-card"></i>
          </div>
          <div class="card-grp space">
            <div class="card-item icon-relative">
              <label class="label">Expiry date:</label>
              <input type="text" name="expiry-data" class="input"  required placeholder="00 / 00" data-mask="00 / 00">
              <i class="far fa-calendar-alt"></i>
            </div>
            <div class="card-item icon-relative">
              <label class="label">CVV:</label>
              <input type="text" class="input" data-mask="000" pattern="[0-9]{3}"required placeholder="000">
              <i class="fas fa-lock"></i>
            </div>
          </div>

          <div class="text-center">

          <button class="btn btn-primary w-50" type="submit" name="paybtn">Pay</button>
        </div>
          </form>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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
