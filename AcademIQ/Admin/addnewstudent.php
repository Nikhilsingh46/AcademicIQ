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

if(isset($_REQUEST['newStuSubmitBtn'])){
  if(($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
  }else{
    $stu_name = $_REQUEST['stu_name'];
    $stu_email = $_REQUEST['stu_email'];
    $stu_pass = $_REQUEST['stu_pass'];

    $sql = "INSERT INTO student (stu_name, stu_email, stu_pass) VALUES ('$stu_name', '$stu_email', '$stu_pass')";

    if($conn->query($sql) == TRUE){
      $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">stu Added Succesfully</div>';
    }else{
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add stu</div>';
    }
  }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
  <h3 class="text-center">Add New Student</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="stu_name">Student Name</label>
      <input type="text" class="form-control" id="stu_name" name="stu_name">
    </div>
    <div class="form-group">
      <label for="stu_email">Email</label>
      <input type="text" class="form-control" id="stu_email" name="stu_email">
    </div>
    <div class="form-group">
      <label for="stu_pass">Password</label>
      <input type="text" class="form-control" id="stu_pass" name="stu_pass">
    </div>
    <div class="text-center">
      <button class="btn btn-danger" type="submit" id="newStuSubmitBtn" name="newStuSubmitBtn">Submit</button>
      <a href="student.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg;} ?>
  </form>
</div>

</div>
</div>



<?php
include('footer.php')
?>