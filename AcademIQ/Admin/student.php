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
?>

<div class="col-sm-9 mt-5">
   <!------table------>
  <p class="bg-dark text-white p-2">List of Students</p>
  <?php
  $sql = "SELECT * FROM student";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
  ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Student ID</th>
        <th scope="col">Subject Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $result->fetch_assoc()){ 
      echo '<tr>';
        echo '<th scope="row">'.$row['stu_id'].'</th>';
        echo '<td>'.$row['stu_name'].'</td>';
        echo '<td>'.$row['stu_email'].'</td>';
        echo '<td>';
         echo '<form action="editstudent.php" method="POST" class="d-inline">
         <input type="hidden" name="id" value='.$row["stu_id"].'>
           <button type="submit" class="btn btn-info mr-3" name="view" vlaue="view"><i class="fa-solid fa-pen"></i></button>
          </form>
         <form action="" method = "POST" class="d-inline">
         <input type="hidden" name="id" value='.$row["stu_id"].'>
          <button type="submit" class="btn btn-secondary" name="delete" vlaue="delete"><i class="fa-solid fa-trash"></i></i></button>
        </form>
        </td>
      </tr>';
       } ?>
    </tbody>
  </table>
  <?php } else{
    echo "0 Result";
  } 
  
  if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM student WHERE stu_id = {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
      echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
    }else{
      echo "Unable to Delete Data";
    }
    
  }
  
  ?>


</div>
</div>
<!--------div Row close from header----------->
<div>
  <a href="./addnewstudent.php" class="btn btn-danger box"><i class="fa-solid fa-plus fa-2x"></i></a>
</div>
</div>
<!--------div conatiner-fluid close from header----------->


<?php
include('footer.php')
?>