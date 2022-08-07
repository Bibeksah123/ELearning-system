<!-- Start footer -->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright @copy;2022 || Designed By E-Learning || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a> </small>
</footer>
<!-- End footer -->


<!-- start student registration modal -->


<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">

      <!-- start student registration form code... -->
      <?php include('studentRegistration.php');?>

      <!-- End student registration form code... -->

     
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
      <button type="button" class="btn btn-primary" onclick="addStu()" id="signup" >Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- End student registration modal -->

<!-- start Student Login modal -->

<?php
include('./login.php');
?>
<!-- End student Login modal -->


<!-- start Admin Login modal -->
<?php
include('./admin.php');
?>
<!-- End Admin Login modal -->


<!-- jquery and bootstraps javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- fontawesome js  -->
<script src="js/all.min.js"></script>

<!-- Student Ajax call javascript -->
<script text="text/javascript" src="js/ajaxrequest.js"></script>

<!-- admin Ajax call javascript -->
<script text="text/javascript" src="js/adminajaxrequest.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  </script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> -->
    </script>
    
    
<!-- <script  src="../Jquery/jquery.multiselect.js"></script>
<script  src="../Jquery/prettify.js"></script> -->

</body>
</html>