<?php
if(!isset($_SESSION)){
  session_start();
}

include('header.php');
include('../dbconnection.php');

if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['AdminLogemail'];
}else{
  echo "<script> location.href='./index.php'; </script>";
}

if(isset($_REQUEST['courseSubmitBtn'])){
  if(($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
  }else{
    $course_name = $_REQUEST['course_name'];
    $course_desc = $_REQUEST['course_desc'];
    $course_price = $_REQUEST['course_price'];
    $course_original_price = $_REQUEST['course_original_price'];
    $course_image = $_FILES['course_img']['name'];
    $course_image_temp = $_FILES['course_img']['tmp_name'];
    $img_folder = '../image/courseimg/'.$course_image;
    move_uploaded_file($course_image_temp, $img_folder);

    $sql = "INSERT INTO course (course_name, course_desc, course_img, course_price, course_orignal_price) VALUES ('$course_name', '$course_desc', '$img_folder', '$course_price', '$course_original_price')";

    if($conn->query($sql) == TRUE){
      $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Added Succesfully</div>';
    }else{
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add course</div>';
    }
  }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
  <h3 class="text-center">Add New Course</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="course_name">Course Name</label>
      <input type="text" class="form-control" id="course_name" name="course_name">
    </div>
    <div class="form-group">
      <label for="course_desc">Course Description</label>
      <textarea type="text" class="form-control" id="course_desc" name="course_desc"></textarea>
    </div>
    <div class="form-group">
      <label for="course_price">Course Selling Price</label>
      <input type="text" class="form-control" id="course_price" name="course_price">
    </div>
    <div class="form-group">
      <label for="course_original_price">Course Original Price</label>
      <input type="text" class="form-control" id="course_original_price" name="course_original_price">
    </div>
    <div class="form-group">
      <label for="course_img">Course Image</label>
      <input type="file" class="form-control-file" id="course_img" name="course_img">
    </div>
    <div class="text-center">
      <button class="btn btn-danger" type="submit" id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
      <a href="course.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg;} ?>
  </form>
</div>

</div>
</div>



<?php
include('footer.php')
?>