<!-----start Including Header----->
<?php
include('./header.php');
?>
<!-----End Including Header----->

<!-----start Notes page Banner----->
<div class="container-fluid bg-dark">
  <div class="row">
    <img src="image/coursebanner.jpg" alt="Notes" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
  </div>
</div>
<!-----End Notes page Banner----->
<!------start Main content------>
<div class="container">
  <h2 class="text-center my-4">Payment Status</h2>
  <form method="post" action="">
    <div class="form-group row">
      <label class="offset-sm-3 col-form-label">Payment ID:</label>
      <div>
        <input type="text" class="form-control mx-3">
      </div>
      <div>
        <input type="submit" class="btn btn-primary mx-4" value="view">
      </div>
    </div>
  </form>
</div>
<!------End Main content------>

<!------contact us--->
  <?php 
    include('./contactus.php');
  ?>
<!------End contact us--->

<!-----start Including Footer----->
<?php
include('./footer.php');
?>
<!-----End Including Footer----->