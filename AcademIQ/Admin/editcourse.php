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

//update
if(isset($_REQUEST['requpdate'])){
  if(($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
  }else{
    $cid = $_REQUEST['course_id'];
    $cname = $_REQUEST['course_name'];
    $cdesc = $_REQUEST['course_desc'];
    $cprice = $_REQUEST['course_price'];
    $coriginalprice = $_REQUEST['course_original_price'];
    $cimg = '../image/courseimg/'. $_FILES['course_img']['name'];


    $sql = "UPDATE course SET course_id='$cid', course_name='$cname', course_desc='$cdesc', course_price='$cprice' course_original_price='$coriginalprice', course_img='$cimg' WHERE course_id='$cid'";

    if($conn->query($sql) == TRUE){
      $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Succesfully</div>';
    }else{
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update</div>';
    }
  }
}

?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
  <h3 class="text-center">Update Course Details</h3>
  <?php
  if(isset($_REQUEST['view'])){
    $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  }
  ?>
  <form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
      <label for="course_id">Course ID</label>
      <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])){echo $row['course_id']; } ?>" readonly>
    </div>
    <div class="form-group">
      <label for="course_name">Course Name</label>
      <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])){echo $row['course_name']; } ?>">
    </div>
    <div class="form-group">
      <label for="course_desc">Course Description</label>
      <textarea type="text" class="form-control" id="course_desc" name="course_desc"><?php if(isset($row['course_desc'])){echo $row['course_desc']; } ?></textarea>
    </div>
    <div class="form-group">
      <label for="course_price">Course Selling Price</label>
      <input type="text" class="form-control" id="course_price" name="course_price" value="<?php if(isset($row['course_price'])){echo $row['course_price']; } ?>">
    </div>
    <div class="form-group">
      <label for="course_original_price">Course Original Price</label>
      <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php if(isset($row['course_original_price'])){echo $row['course_original_price']; } ?>">
    </div>
    <div class="form-group">
      <label for="course_img">Course Image</label>
      <img src="<?php if(isset($row['course_img'])){echo $row['course_img']; } ?>" alt="" class="img-thumbnail">
      <input type="file" class="form-control-file" id="course_img" name="course_img">
    </div>
    <div class="text-center">
      <button class="btn btn-danger" type="submit" id="requpdate" name="requpdate">Update</button>
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