<?php
if(!isset($_SESSION)){
  session_start();
}
include_once('../dbconnection.php');

if(!isset($_SESSION['is_admin_login'])){
  if(isset($_POST['AdminLogemail']) && isset($_POST['AdminLogpass'])){
    $AdminLogemail = $_POST['AdminLogemail'];
    $AdminLogpass = $_POST['AdminLogpass'];

    $sql = "SELECT admin_email,admin_pass FROM admin WHERE admin_email = '".$AdminLogemail."' AND admin_pass = '".$AdminLogpass."'";

    $result = $conn->query($sql);

    $row = $result->num_rows;

    if($row === 1){
      $_SESSION['is_admin_login'] = true;
      $_SESSION['AdminLogemail'] = $AdminLogemail;
      echo json_encode($row);
    }else if($row === 0){
      echo json_encode($row); 
    }

  }
}
?>