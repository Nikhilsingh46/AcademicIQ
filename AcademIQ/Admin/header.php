<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-----Bootstrap css------>
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-----Font awesome css------>
  <link rel="stylesheet" href="../css/all.min.css">

  <!-----Google Font link------>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  
  <!------custom css---->
  <link rel="stylesheet" href="../css/adminstyle.css">
</head>
<body>
  <!------Top navbar------>
  <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
    <a href="admindashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">AcademIQ <small class="text-white"> Admin Area</small></a>
  </nav>

  <!-----side bar----->
  <div class="container-fluid mb-5" style="margin-top:40px;">
    <div class="row">
      <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="admindashboard.php" class="nav-link"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="course.php" class="nav-link"><i class="fa-solid fa-note-sticky"></i>Course</a>
            </li>
            <li class="nav-item">
              <a href="lesson.php" class="nav-link"><i class="fa-solid fa-paperclip"></i>Lesson</a>
            </li>
            <li class="nav-item">
              <a href="sellReport.php" class="nav-link"><i class="fa-solid fa-file-invoice"></i>Sell Report</a>
            </li>
            <li class="nav-item">
              <a href="adminPaymentStatus.php" class="nav-link"><i class="fa-regular fa-credit-card"></i>Payment Status</a>
            </li>
            <li class="nav-item">
              <a href="student.php" class="nav-link"><i class="fa-solid fa-user"></i>Student</a>
            </li>
            <li class="nav-item">
              <a href="feedback.php" class="nav-link"><i class="fa-solid fa-comment"></i>Feedback</a>
            </li>
            <li class="nav-item">
              <a href="adminChangePass.php" class="nav-link"><i class="fa-solid fa-key"></i>Change Password</a>
            </li>
            <li class="nav-item">
              <a href="../logout.php" class="nav-link"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
            </li>
          </ul>
        </div>
      </nav>