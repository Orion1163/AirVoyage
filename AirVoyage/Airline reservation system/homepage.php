<!DOCTYPE html>
  <?php include('loginvalid.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome To Airline Reservation System</title>
    <link rel="stylesheet" href="css/homestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/e4eecd86d3.js"></script>
   </head>
  <body>
  <section class="header">
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
        <a class="nav-link" href="usersearch.php"><i class="fa fa-plane" aria-hidden="true"></i>Flight Schedules</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>About us</a>
      </li>
      <?php if(isset($_SESSION['uname'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="ticket.php"><i class="fas fa-receipt" aria-hidden="true"></i>Your Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user profile.php"><i class="fa fa-address-card" aria-hidden="true"></i>Your profile</a>
        </li>
      <li class="nav-item">
        <a class="nav-link"  href="homepage.php?homelogout='1'" ><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a>
      </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="signin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a>
        </li>
      <?php endif ?>
    </ul>
  </div>
</nav>
    </section>
    <video  autoplay loop class="video-bg" muted plays-inline>
      <source src="videou.mp4" type="video/mp4">
    </video>
    <div class="welcome-msg">
      <h1>Welcome to AirVoyage</h1>
      <p>"Experience seamless travel planning with our airplane ticket booking system. Discover a world of destinations, find the best fares, and book your flights with ease, all in one place. Your next adventure is just a click away!"</p>
      <a href="usersearch.php" class="btn btn-book">Book Now</a>
    </div>
    <img src="img/whitewaves.png" class="fluid">
  </section>
  <section id="services">
    <div class="container">
    <div class="row">
    <div class="col-md-3">
    <div class="icon">
      <i class="fa fa-money" aria-hidden="true"></i>
    </div>
    <h4>Hassle free transaction</h4>
    <p>"Fly worry-free with our streamlined airplane ticket booking system, offering a hassle-free transaction process for smooth and convenient reservations."</p>
    </div>
    <div class="col-md-3">
    <div class="icon">
      <i class="fa fa-shield" aria-hidden="true"></i>
    </div>
    <h4>Secure</h4>
    <p>"Book your flights confidently with our secure airplane ticket booking system. Your safety and data protection are our top priorities as you embark on your travel adventures."</p>
    </div>
    <div class="col-md-3">
    <div class="icon">
      <i class="fa fa-credit-card" aria-hidden="true"></i>
    </div>
    <h4>Easy refunds</h4>
    <p>"Book your flights with confidence using our airplane ticket booking system, featuring an easy refund process. Your travel plans are flexible, just like your journey should be."</p>
    </div>
    <div class="col-md-3">
    <div class="icon">
      <i class="fa fa-user-secret" aria-hidden="true"></i>
    </div>
    <h4>User privacy</h4>
    <p>"Protecting your privacy is our priority. Our airplane ticket booking system ensures your personal information remains secure, so you can travel with peace of mind."</p>
    </div>
    </div>
    </div>
  </section>
  <section id="carousel">
    <div class="car">
      <h3 >Offers hard to refuse</h3>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/flight.jpg" class="img">
    </div>
    <div class="carousel-item">
      <img src="img/hotel.jpg" class="img">
    </div>
    <div class="carousel-item">
      <img src="img/free.jpg" class="img">
    </div>
    <div class="carousel-item">
      <img src="img/flat.jpg" class="img">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  </section>
  <section id=bestsellers>
    <h3>Our Bestsellers</h3>
    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card shadow "style="height:17rem"; >
          <div class="inner">
          <img class="card-img-top" src="temple.jpg" alt="">
          </div>
          <div class="card-body text-center">
            <h5>Chennai</h5>
            <p>"Discover the timeless beauty of Chennai through its rich cultural heritage and stunning beaches."</p>
            <a href="usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow "style="height:17rem"; >
          <div class="inner">
          <img class="card-img-top" src="kerala.jpg" alt="">
          </div>
          <div class="card-body text-center">
            <h5>Kerala</h5>
            <p>"Kerala, a haven of natural beauty, offers lush landscapes, serene backwaters, and vibrant culture waiting to be explored."</p>
            <a href="Usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow "style="height:17rem"; >
          <div class="inner">
          <img class="card-img-top" src="Mumbai.jpg" alt="">
        </div>
          <div class="card-body text-center">
            <h5>Mumbai</h5>
            <p>"Explore the diverse tapestry of beauty in Mumbai, from stunning architecture to vibrant culture."</p>
            <a href="Usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow "style="height:17rem"; >
          <div class="inner">
          <img class="card-img-top" src="kashmir.jpg" alt="">
          </div>
          <div class="card-body text-center">
            <h5>Kashmir</h5>
            <p>"Explore the breathtaking beauty of Kashmir, where nature's artistry paints the landscape with pristine lakes, lush valleys, and majestic mountains."</p>
            <a href="Usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="promo">
    <div class="text">
      <i class="fas fa-plane-departure"></i>
      <p><strong>Come.<br>Fall in love at First Flight</strong></p>
    </div>

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
