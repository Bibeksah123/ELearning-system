
<!-- start student Login modal -->


<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">

      <!-- start student Login form code... -->
      <form id="stuLoginForm" method="POST">
    <div class="form-group">
  <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" placeholder="Email" name="stuLogmail" id="stuLogemail">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
  </div>
  </form>
  <!-- End student login form -->
      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
      <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()" >Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- End student Login modal -->