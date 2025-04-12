<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!-- Google Font
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> -->

    <!-- Student Testimonial Owl Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/testyslider.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <title>AcademIQ</title>
  </head>
  <body>

  <!----start------>
  <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
      <a href="index.php" class="navbar-brand">AcademIQ</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavAltMarkup"         aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav pl-5 custom-nav pl-5">
          <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item custom-nav-item"><a href="course.php" class="nav-link">Courses</a></li>
          <li class="nav-item custom-nav-item"><a href="payment.php" class="nav-link">Payment Status</a></li>
          <?php
          session_start();
          if(isset($_SESSION['is_login'])){
            echo'<li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li>
            <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
          }else{
            echo '<li class="nav-item custom-nav-item"><a href="login.php" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLogModalCenter">Login</a></li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Sign-UP</a></li>';
          }
          ?>
          <li class="nav-item custom-nav-item"><a href="#feedback" class="nav-link">Feedback</a></li>
          <li class="nav-item custom-nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </nav>