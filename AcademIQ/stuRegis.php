<!-----start student registration form------>
<form class="row g-3" id="stuRegForm">
  <div class="col-12">
    <i class="fas fa-user"></i>
    <label for="stuname" class="pl-2 form-label">Name</label>
    <small id="statusMsg1"></small>
    <input type="text" class="form-control" id="stuname" placeholder="Enter Name">
  </div>
  <div class="col-12">
    <i class="fas fa-envelope"></i>
    <label for="stuemail" class="pl-2 form-label">Email</label>
    <small id="statusMsg2"></small>
    <input type="email" class="form-control" placeholder="Enter Your Email" name="stuemail" id="stuemail">
    <small class="form-text">We'll never share your email with anyone else.</small>
  </div>
  <div class="col-12">
    <i class="fas fa-key"></i>
    <label for="stupass" class="form-label">Password</label>
    <small id="statusMsg3"></small>
    <input type="password" class="form-control" placeholder="password" name="stupass" id="stupass">
  </div>
</form>
<!-----End student registration form------>