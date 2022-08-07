<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstraps csss -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font awesome csss -->
    <link rel="stylesheet" href="css/all.min.css">


<!-- Google fonts -->

<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css"> 
   <link rel="stylesheet" href="coursedetail.css">    

<title>eLearning</title>
</head>
<body>

<!-- Start Navigation -->

<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">eLearning</a>
    <span class="navbar-text">Learn and Explore</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
        <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>

        <?php
        session_start();
        if(isset($_SESSION['is_login'])){
          echo '
          <li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">My profile</a></li>
          <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
        } else {
          echo '
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a></li>
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">SignUp</a></li>
          ';
        }
        ?>      
       
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">FeedBack</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>

      </ul>
    </div>
  </div>
</nav>
<!-- End Navigation -->