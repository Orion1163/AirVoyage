<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change password</title>
    <link rel="stylesheet" href="css/changepassword.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <section>
      <div class="page-wrap">
        <div class="left-panel">
          <div class="illustration">
            <img src="svg/regist.svg"  alt="">
          </div>
        </div>
        <div class="right-panel">
          <div class="animated-form">
            <h3>Change password</h3>
            <form class="form" method="post">
              <?php change_password(); ?>
              <br>

              <br>
              <div class="form-group">
                <label for="Eid"><i class="fa fa-envelope" aria-hidden="true"></i>Email Id</label>
              <input type="email" id="eid" name="eid" required >
              </div>
              <div class="form-group flex-end">
                <button type="submit" class="button" name="change">submit</button>
              </div>
              <div class="No-account">
                <a href="signin.php" class="link">Have an account?Sign In</a>
              </div>
              <div class="No-account">
               <a href="signup.php" class="link">Don't have account?Sign Up</a>
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
  <?php
  function change_password(){
    if (isset($_POST['change'])){
      $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
      $eid = mysqli_real_escape_string($db,$_POST['eid']);
      if (validate_email()){
        $pwd = generate_password();
        $query="UPDATE us SET password='$pwd' WHERE eid ='$eid'";
        $results=mysqli_query($db,$query);
        pwd_sendmail($pwd);
        echo '<h5 style="color:green;">A random password has been sent to your registered mail. Kindly login with it and
         update your password at "your profile" </h5';
      }
      else
        echo '<h5 style="color:red;">Oops you dont seem have a registered account. Please create an account!</h5>';
    }
  }
  function generate_password() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
function pwd_sendmail($pwd){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: irctc12102020@gmail.com' . "\r\n";
  $bodymsg = $pwd;
  mail('laxmanbalaraman@gmail.com', "Request for password change", $bodymsg, $headers);
}
function validate_email(){
  $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
  $eid = mysqli_real_escape_string($db,$_POST['eid']);
  $query="SELECT * FROM us WHERE eid ='$eid'";
  $results=mysqli_query($db,$query);
  return mysqli_num_rows($results);
}
   ?>
</html>
