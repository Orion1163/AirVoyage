
<!DOCTYPE html>
<?php include('loginvalid.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Sign In</title>
    <link rel="stylesheet" href="css/esignin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/e4eecd86d3.js"></script>
  </head>
  <body>

    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="homepage.php"><img class="img" src="img/travel.png">AirVoyage</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">

    </ul>
  </div>
</nav>
    </section>
    <section>
      <div class="page-wrap">
        <div class="left-panel">
          <div class="illustration">
            <img src="svg/employee.svg"  alt="">
          </div>
        </div>
        <div class="right-panel">
          <div class="animated-form">
            <h3>Admin sign in </h3>
            <form class="form" method="post">
              <?php if(isset($_SESSION['register'])): ?>
              <div class="alert alert-success" role="alert">
               <?php echo $_SESSION['register'];
              unset($_SESSION['register']);
              session_destroy();?>
              </div>
            <?php endif ?>
            <?php include('uerrors.php'); ?>
              <div class="form-group">
                <label for="uname"><i class="fas fa-user-shield"></i></i>Username</label>
              <input type="text" id="uname" name="E_name" required >
              </div>
            <div class="form-group">
              <label for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Password</label>
              <input type="password" id="E_password" name="E_password" required class="password" />
              </div>
              <div class="row">
              <div class="col">
              <div class="form-group flex-end">
                <button type="submit" class="button" name="dbutton"><i class="fas fa-database"></i>Access Database</button>
              </div>
              </div>
              <div class="col">
              <div class="form-group flex-end">
                <button type="submit" class="button" name="pbutton"><i class="fas fa-search"></i>Search Passenger</button>
              </div>
              </div>
              </div>

              </form>

          </div>
        </div>
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
