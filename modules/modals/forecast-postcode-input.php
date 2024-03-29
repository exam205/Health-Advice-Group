<!-- Postcode Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Postcode Modal Body -->
      <form action="functions/login-action.php" method="POST">
      <div class="modal-body">
           <?php
           if (isset($_SESSION['error'])&&$_SESSION['error']=="Incorrect Password and/or Email"){ //if the error is that the password and/or email is incorrect
               echo "<div class='alert alert-danger' role='alert'>
               {$_SESSION['error']}
               </div>";
           }
           ?>
          <div class="form-group">
            <label for="emailInput" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="emailInput" name="emailInput">
          </div>
          <div class="form-group">
            <label for="emailInput" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="passwordInput" name="passwordInput">
          </div>
      </div>
      <!-- End Login Modal Body -->
      <!-- Login Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#createAccountModal">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="submit" value="Log In">
        </form>
      </div>
      <!-- End Login Modal Footer -->
    </div>
  </div>
</div>
<!-- End Login Modal -->