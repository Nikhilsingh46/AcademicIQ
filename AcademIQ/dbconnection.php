<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "ams_db";

//create connection

$conn = new mysqli($db_host,$db_user,$db_password, $db_name);

//check connection
if($conn->connect_error) {
  die("Connection failed");
}
?>