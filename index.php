<!-- Start Header -->
<?php
include('./mainInclude/header.php');
include('./dbConnection.php');

?>

<!-- End Header-->

<!-- Start video background -->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source src="video/banvid.mp4">
    </video>
    <div class="vid-overlay"></div>
  </div>
  <div class="vid-content">
    <h1 class="my-content">Welcome To Online Portal</h1>
    <small class="my-content">Learn and Explore</small> <br>
    <?php
    if (!isset($_SESSION['is_login'])) {
      echo '
    <a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>';
    } else {
      echo '
      <a href="student/studentProfile.php" class="btn btn-primary mt-3">My profile</a>';
    }
    ?>


  </div>
</div>

<!-- End video background -->

<!-- Start text Banner -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>

    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i>Online courses by Expert</h5>

    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>

    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i>Money back Gurantee*</h5>

    </div>

  </div>
</div>

<!-- End text Banner -->

<!-- Start most popular course -->
<!-- < class="container mt-5"> -->
  <h1 class="text-center">Popular Course</h1>
  <!-- start most popular course 1st card desk -->
  <div class="card-desk mt-5">
    <?php
    $sql = "SELECT * FROM course LIMIT 3";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $course_id = $row['course_id'];
        echo ' <a href=""coursedetails.php?course_id=' . $course_id . '" class="btn" style="text-align:left; padding:0px; margin:0px;">
        <div class="card">
          <img src="' . str_replace('..', '.', $row['course_img']) . '" class="card-img-top" alt="python" />
          <div class="card-body">
            <h5 class="card-title">' . $row['course_name'] . '</h5>
            <p class="card-text">' . $row['course_desc'] . '</p>
          </div>
          <div class="card-forter">
            <p class="card-text" d-inline>price: <small><del>&#8377 ' . $row['course_original_price'] . '</del></small> <span class="font-weight-border">&#8377 ' . $row['course_price'] . '</span></p>
            <a class="btn btn-primary text-white font-weight-border float-right" href="coursedetails.php?course_id=' . $course_id . '">Enroll</a>
          </div>
         
        </div>
      </a>';
      }
    }
    ?>


  </div>
  <!-- </div> -->
  <!-- End most popular course 1st card deck -->

  <!-- start most popular course 2st card desk -->

  <div class="card-desk mt-4">
    <?php
    $sql = "SELECT * FROM course LIMIT 3,3";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $course_id = $row['course_id'];
        echo ' <a href=""coursedetails.php?course_id=' . $course_id . '" class="btn" style="text-align:left; padding:0px; margin:0px;">
        <div class="card">
          <img src="' . str_replace('..', '.', $row['course_img']) . '" class="card-img-top" alt="python" />
          <div class="card-body">
            <h5 class="card-title">' . $row['course_name'] . '</h5>
            <p class="card-text">' . $row['course_desc'] . '</p>
          </div>
          <div class="card-forter">
            <p class="card-text" d-inline>price: <small><del>&#8377 ' . $row['course_original_price'] . '</del></small> <span class="font-weight-border">&#8377 ' . $row['course_price'] . '</span></p>
            <a class="btn btn-primary text-white font-weight-border float-right" href="coursedetails.php?course_id=' . $course_id . '">Enroll</a>
          </div>
        </div>
      </a>';
      }
    }
    ?>

  </div>


  <!-- End most popular course 2st card desk -->

  <div class="text-center m-2">
    <a class="btn btn-danger btn-sm" href="courses.php">Views All Course</a>
  </div>

  <!-- End most popular course -->

  <!-- Start contact us -->
  <?php
  include('./contact.php');
  ?>
  <!-- End contact us -->

  <!-- Start students Testimonial -->

  <!-- code -->
  <!-- End students Testimonial -->



  <div class="container-fluid bg-danger">
    <!-- start social follow ---------->

    <div class="row text-white text-center p-1">
      <div class="col-sm">
        <a class="text-white social-hover" href="#"> <i class="fab fa-facebook-f"></i>Facebook </a>
      </div>
      <div class="col-sm">
        <a class="text-white social-hover" href="#"> <i class="fab fa-twitter"></i>Twitter</a>
      </div>
      <div class="col-sm">
        <a class="text-white social-hover" href="#"> <i class="fab fa-whatsapp"></i>Whatsapp</a>
      </div>
      <div class="col-sm">
        <a class="text-white social-hover" href="#"> <i class="fab fa-instagram"></i>Instagram</a>
      </div>
    </div>
  </div>
  <!-- End social follow -->

  <!-- start About Section -->
  <div class="container-fluid p-4" style="background-color: #E9ECEF;">
    <div class="conatiner" style="background-color:#E9ECEF">
      <div class="row text-center">
        <div class="col-sm">
          <h5>About Us</h5>
          <p>An online learning platform is a webspace or portal for educational content and resources that offers a student everything they need in one place: lectures, resources, opportunities to meet and chat with other students, and more. It is also an excellent way for the student and the teacher to monitor student progress.</p>
        </div>
        <!-- End About Section -->

        <div class="col-sm">
          <h5>Category</h5>
          <a class="text-dark" href="#">Web Development</a> <br>
          <a class="text-dark" href="#">Web Designing</a> <br>
          <a class="text-dark" href="#">Android App Dev</a> <br>
          <a class="text-dark" href="#">iOS Development</a> <br>
          <a class="text-dark" href="#">Data Analysis</a> <br>
        </div>

        <div class="col-sm">
          <h5>Contact Us</h5>
          <p>eLearning pvt Ltd <br> Near Maitidevi Temple <br>Maiti Devi Marg, Kathmandu, Nepal <br>ph. 01-4431725</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End About Section -->

  <!-- start including footer -->
  <?php
  include('./mainInclude/footer.php');
  ?>
  <!-- End including footer -->