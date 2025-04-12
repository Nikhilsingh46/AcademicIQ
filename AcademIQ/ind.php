<?php
  include('./dbConnection.php');
  include('./header.php'); 
?>  
    <!-- Start Video Background-->
    <div class="container-fluid remove-vid-marg">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="video/bgvideo.mp4" />
        </video>
        <div class="vid-overlay"></div>
      </div>
      <div class="vid-content" >
        <h1 class="my-content">Welcome to AcademIQ</h1>
        <small class="my-content">Learn Anytime, Anywhere</small><br />
        <?php    
              if(!isset($_SESSION['is_login'])){
                echo '<a class="btn btn-danger mt-3" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
              } else {
                echo '<a class="btn btn-primary mt-3" href="student/studentProfile.php">My Profile</a>';
              }
          ?> 
       
      </div>
    </div> <!-- End Video Background -->

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
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
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
                  <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
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
                      <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
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
              $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
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

    <<div class="container-fluid bg-danger"> <!----start social follow------->
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

  <?php 
    include('./footer.php'); 
  ?>  
