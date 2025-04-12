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
    <div class="row mx-5 text-center">
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
          <div class="card-header">Notes</div>
          <div class="card-body">
            <h4 class="card-title">
              4
            </h4>
            <a href="#" class="btn text-white">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
          <div class="card-header">Assignments</div>
          <div class="card-body">
            <h4 class="card-title">
              4
            </h4>
            <a href="#" class="btn text-white">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-info mb-3" style="max-width:18rem;">
          <div class="card-header">Students</div>
          <div class="card-body">
            <h4 class="card-title">
              4
            </h4>
            <a href="#" class="btn text-white">View</a>
          </div>
        </div>
      </div>
    </div>
    <div class="mx-5 mt-5 text-center">
      <!-------------Table------->
      <p class="bg-dark text-white p-2">Course Details</p>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Course code</th>
            <th scope="col">Course name</th>
            <th scope="col"> Student Email</th>
            <th scope="col"> Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">25</th>
            <td>Math</td>
            <td>sonam@gmail.com</td>
            <td>13-04-2024</td>
            <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fa-solid fa-trash"></i></button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<?php
include('footer.php')
?>
