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
  if(($_REQUEST['stu_id'] == "") || ($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
  }else{
    $sid = $_REQUEST['stu_id'];
    $sname = $_REQUEST['stu_name'];
    $semail = $_REQUEST['stu_email'];
    $spass = $_REQUEST['stu_pass'];

    $sql = "UPDATE student SET stu_id='$sid', stu_name='$sname', stu_email= '$semail', stu_pass='$spass' WHERE stu_id='$sid'";

    if($conn->query($sql) == TRUE){
      $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Succesfully</div>';
    }else{
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update</div>';
    }
  }
}

?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
  <?php
  if(isset($_REQUEST['view'])){
    $sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  }
  ?>
  
  <h3 class="text-center">Update New Student</h3>
  <form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
      <label for="stu_id">Student ID</label>
      <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php if(isset($row['stu_id'])){echo $row['stu_id']; } ?>" readonly>
    </div>
    <div class="form-group">
      <label for="stu_name">Student Name</label>
      <input type="text" class="form-control" id="stu_name" name="stu_name" value = "<?php if(isset($row['stu_name'])){echo $row['stu_name']; } ?>">
    </div>
    <div class="form-group">
      <label for="stu_email">Email</label>
      <input type="text" class="form-control" id="stu_email" name="stu_email" value = "<?php if(isset($row['stu_email'])){echo $row['stu_email']; } ?>">
    </div>
    <div class="form-group">
      <label for="stu_pass">Password</label>
      <input type="text" class="form-control" id="stu_pass" name="stu_pass" value = "<?php if(isset($row['stu_pass'])){echo $row['stu_pass']; } ?>">
    </div>
    <div class="text-center">
      <button class="btn btn-danger" type="submit" id="requpdate" name="requpdate">Update</button>
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