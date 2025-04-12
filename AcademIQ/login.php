<?php
  include('./dbConnection.php'); 
?>
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
          <li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li>
            <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
          <li class="nav-item custom-nav-item"><a href="#feedback" class="nav-link">Feedback</a></li>
          <li class="nav-item custom-nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </nav>

    
    <!------start-video----->

    <div class="container-fluid remove-vid-marg">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="video/bgvideo.mp4" type="">
        </video>
        <div class="vid-overlay">
        </div>
        <div class="video-content" >
          <h1 class="my-content">Welcome to AcademIQ</h1>
          <small class="my-content">Learn Anytime, Anywhere</small><br />
         <a href="student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>
        </div>
      </div>
    </div>
    <!------end-video----->
    <div class="container-fluid bg-danger txt-banner"> <!-- Start Text Banner -->
        <div class="row bottom-banner">
          <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i>50+ subject</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fa-solid fa-file-circle-question"></i> Important Question</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fa-solid fa-indian-rupee-sign"></i> Money Back Guarantee*</h5>
          </div>
        </div>
    </div> <!-- End Text Banner -->

    <div class="container mt-5"> <!-- Start Most Popular Course -->
      <h1 class="text-center">Popular Course</h1>
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 1st Card Deck -->
        <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
          while($row = $result->fetch_assoc()){
            $course_id = $row['course_id'];
            echo '
            <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
              <div class="card">
                <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                <div class="card-body">
                  <h5 class="card-title">'.$row['course_name'].'</h5>
                  <p class="card-text">'.$row['course_desc'].'</p>
                </div>
                <div class="card-footer">
                  <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_orignal_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                </div>
              </div>
            </a>  ';
          }
        }
        ?>   
      </div>  <!-- End Most Popular Course 1st Card Deck -->   
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 2nd Card Deck -->
        <?php
          $sql = "SELECT * FROM course LIMIT 3,3";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo '
                <a href="coursedetails.php?course_id='.$course_id.'"  class="btn" style="text-align: left; padding:0px;">
                  <div class="card">
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      <p class="card-text">'.$row['course_desc'].'</p>
                    </div>
                    <div class="card-footer">
                      <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_orignal_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                  </div>
                </a>  ';
            }
          }
        ?>
      </div>   <!-- End Most Popular Course 2nd Card Deck --> 
      <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="courses.php">View All Course</a> 
      </div>
    </div>  <!-- End Most Popular Course -->

    <?php 
    // Contact Us
    include('./contactus.php'); 
    ?> 

    <!-- Start Students Testimonial -->
    <div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
        <h1 class="text-center testyheading p-4"> Student's Feedback </h1>
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
            <?php 
              $sql = "SELECT s.stu_name, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
              $result = $conn->query($sql);
              if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                  $s_img = $row['stu_img'];
                  $n_img = str_replace('../','',$s_img)
            ?>
              <div class="testimonial">
                <p class="description">
                <?php echo $row['f_content'];?>  
                </p>
                <div class="pic">
                  <img src="<?php echo $n_img; ?>" alt=""/>
                </div>
                <div class="testimonial-prof">
                  <h4><?php echo $row['stu_name']; ?></h4>
                </div>
              </div>
              <?php }} ?>
            </div>
          </div>
        </div>
    </div>  <!-- End Students Testimonial -->

  <div class="container-fluid bg-danger"> <!----start social follow------->
    <div class="row text-white text-center p-1">
      <div class="col-sm">
        <a href="https://www.facebook.com/profile.php?id=100068966142949&mibextid=ZbWKwL" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>
      </div>
      <div class="col-sm">
        <a href="https://wa.me/qr/5WNWCDK5YBKVJ1" class="text-white social-hover"><i class="fab fa-whatsapp"></i>WhatsApp</a>
      </div>
      <div class="col-sm">
        <a href="https://www.instagram.com/rana_nikhil_singh_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>
      </div>
      <div class="col-sm">
        <a href="https://www.linkedin.com/in/nikhil-kumar-95857b24b/" class="text-white social-hover"><i class="fa-brands fa-linkedin"></i>Linkedin</a>
      </div>
    </div>

  </div>
  <!-- Start About Section -->
  <div class="container-fluid p-4" style="background-color: #E9ECEF">
    <div class="container" style="background-color: #E9ECEF">
      <div class="row text-center">
        <div class="col-sm">
          <h5>About US</h5>
          <p>AcademIQ offers a global selection of courses and study materials, catering to diverse learning needs. Explore a wide range of subjects and resources to help you achieve your academic and professional goals. Join us and embark on a personalized learning journey today.</p>
        </div>
        <div class="col-sm">
          <h5>Courses</h5>
          <a href="#" class="text-dark">BTech</a><br>
          <a href="#" class="text-dark">BBA</a><br>
          <a href="#" class="text-dark">BCA</a><br>
          <a href="#" class="text-dark">MCA</a><br>
          <a href="#" class="text-dark">MBA</a>
        </div>
        <div class="col-sm">
          <h5>
            contact-us
          </h5>
          <p>ph: +91 9031095733 <br> E-mail: rnikhilsingh247@gmail.com </p>
        </div>
      </div>
    </div>
  </div>
  <!---------End About Section-------->
 
  <!--start including footer---->
  <?php
  include('./footer.php');
  ?>
  <!--End including footer---->
    <?php 
    include('./footer.php');
    ?>