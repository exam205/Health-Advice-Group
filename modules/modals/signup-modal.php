<!-- Signup Modal -->
<div class="modal fade" id="createAccountModal" tabindex="-1" role="dialog" aria-labelledby="createAccountModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createAccountModalLabel">Login</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Signup Modal Body -->
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="firstNameInput" class="col-form-label">First Name:</label>
                <input type="text" class="form-control" id="firstNameInput">
            </div>
            <div class="form-group">
                <label for="surnameInput" class="col-form-label">Surname:</label>
                <input type="text" class="form-control" id="surnameInput">
            </div>
            <div class="form-group">
                <label for="emailInput" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="emailInput">
            </div>
            <div class="form-group">
                <label for="passwordInput" class="col-form-label">Password:</label>
                <input type="email" class="form-control" id="passwordInput">
            </div>
            <div class="form-group">
                <label for="confirmPasswordInput" class="col-form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPasswordInput">
            </div>
        </form>
      </div>
      <!-- End Signup Modal Body -->
      <!-- Signup Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Create Account</button>
      </div>
      <!-- End Signup Modal Footer -->
    </div>
  </div>
</div>
<!-- End Signup Modal -->