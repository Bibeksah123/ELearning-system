
<!-- start Admin Login modal -->


<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">

      <!-- start Admin Login form code... -->
      <form id="adminLoginForm">
    <div class="form-group">
  <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
  </div>
  </form>
  <!-- End admin login form -->
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- End Admin Login modal -->