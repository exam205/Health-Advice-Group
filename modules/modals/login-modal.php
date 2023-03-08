<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Login Modal Body -->
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="emailInput" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="emailInput">
          </div>
          <div class="form-group">
            <label for="emailInput" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="passwordInput">
          </div>
        </form>
      </div>
      <!-- End Login Modal Body -->
      <!-- Login Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#createAccountModal">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
      <!-- End Login Modal Footer -->
    </div>
  </div>
</div>
<!-- End Login Modal -->