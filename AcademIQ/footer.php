 <!-----------------------Start footer-------------->
 <footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2024 || Designed by Nikhil || <a href="#login" data-bs-toggle="modal" data-bs-target="#AdminLoginModalCenter">Admin Login</a></small>
  </footer>
  <!-----------------------End footer-------------->

  <!---start student registration modal----->
<!-- Modal -->
  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Student Registration Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!----start registration form--->
        <?php
        include('stuRegis.php');
        ?>
          <!----End registration form--->
        </div>
        <div class="modal-footer">
          <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="addstu()" id="signup">Sign UP</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!---End student registration modal----->
  <!---start student Login modal----->
<!-- Modal -->
<div class="modal fade" id="stuLogModalCenter" tabindex="-1" aria-labelledby="stuLogModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stuLogModalCenterLabel">Student Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!----start Login form--->
        <form class="row g-3" id="stuLoginForm">
            <div class="col-12">
              <i class="fas fa-envelope"></i>
              <label for="stuLogEmail" class="pl-2 form-label">Email</label>
              <input type="email" class="form-control" placeholder="Enter Your Email" name="stuLogEmail" id="stuLogEmail">
            </div>
            <div class="col-12">
              <i class="fas fa-key"></i>
              <label for="stuLogpass" class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="password" name="stuLogpass" id="stuLogpass">
            </div>
          </form>
          <!----End Login form--->
        </div>
        <div class="modal-footer">
            <small id="statusLogMsg"></small><a href="login.php">
            <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button> </a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearStuLoginWithStatus()">Cancel</button>
          </div>
      </div>
    </div>
  </div>
  <!---End student Login modal----->
  <!-----start Admin login Modal------>
    <!-- Modal -->
    <div class="modal fade" id="AdminLoginModalCenter" tabindex="-1" aria-labelledby="AdminLoginModalCenterLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="AdminLoginModalCenterLabel">Admin Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-----start Admin Login form------>
            <form class="row g-3" id="AdminLoginForm">
              <div class="col-12">
                <i class="fas fa-envelope"></i>
                <label for="AdminLogemail" class="pl-2 form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="AdminLogemail" id="AdminLogemail">
              </div>
              <div class="col-12">
                <i class="fas fa-key"></i>
                <label for="AdminLogpass" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="password" name="AdminLogpass" id="AdminLogpass">
              </div>
            </form>
            <!-----End Admin Login form------>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="AdminLogin-btn" onclick= "checkAdminLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  <!-----End Admin login Modal------>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-----Font awesome Javascript------>
  <script src="js/all.min.js"></script>

  <!-----Stdent Testimonial Owl Slider js---->
  <script type="text/javascript" src="js/owl.min.js"></script>
  <script type="text/javascript" src="js/testyslider.js"></script>

  <!-----Student Ajax call Javascript------>
  <script type="text/javascript" src="js/ajaxrequest.js"></script>

  <!-----Admin Ajax call Javascript------>
  <script type="text/javascript" src="js/adminajaxrequest.js"></script>
</body>
</html>