<!DOCTYPE html>
<?php session_start();?>
<html>
  <head>
    <title>Your profile</title>
    <link rel="stylesheet" href="css/user profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <a class="nav-link" href="usersearch.php"><i class="fa fa-plane" aria-hidden="true"></i>flight schedules</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>about us</a>
      </li>
      <?php if(isset($_SESSION['uname'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="ticket.php"><i class="fas fa-receipt" aria-hidden="true"></i>Your Bookings</a>
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
    <section class="user_profile">
      <?php
      if (isset($_SESSION['uname'])){
      $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
      $query="SELECT * FROM us WHERE uname = '{$_SESSION['uname']}'";
      $results=mysqli_query($db,$query);
      if (mysqli_num_rows($results)){
        $row =  mysqli_fetch_assoc($results);
      }
      else {
        echo "no such user found user";
      }
      }
       ?>
       <?php
       function update(){
       if (isset($_POST['update'])){
         $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
         $name = mysqli_real_escape_string($db,$_POST['name']);
         $pwd = mysqli_real_escape_string($db,$_POST['pwd']);
         $cpwd = mysqli_real_escape_string($db,$_POST['cpwd']);
         $dob = mysqli_real_escape_string($db,$_POST['dob']);
         if ($pwd == $cpwd){

           $query="UPDATE us SET name = '$name', password = '$pwd', dob = '$dob'  WHERE uname = '{$_SESSION['uname']}'";
           $results=mysqli_query($db,$query);
           echo '<h4 align="center" style="color:green;" >Profile updated successfully</h4>';
         }
         else{
           echo '<h4 align="center" style="color:red;" >Password does not match</h4>';
         }
       }
}
        ?>
       <div class="profile">
        <br>  <h1 align="center">Edit Your profile</h1><br>
         <form class="change-profile"  method="post">
           <?php update(); ?>
           <label for="name">Name</label><input  type="text" class="input-group input-group-sm" name="name" required value="<?php if(isset($_SESSION['uname'])){echo $row['name']; } ?>"><br>
           <label for="eid">Email ID</label><input disabled type="email" class="input-group input-group-sm" name="eid"  value="<?php if(isset($_SESSION['uname'])){echo $row['eid']; } ?>"><br>
           <label for="dob">DOB</label><input type="date" class="input-group input-group-sm" name="dob"  required value="<?php if(isset($_SESSION['uname'])){echo $row['dob']; } ?>"><br>
           <label for="pwd">Reset password</label><input  type="text" class="input-group input-group-sm"  name="pwd"  ><br>
           <label for="cpwd">confirm password</label><input  type="text" class="input-group input-group-sm"  name="cpwd"  ><br>
           <center><input type="submit" class="btn btn-info" name="update" value="Update"></center>
         </form><br>
      </div>

    </section>


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
