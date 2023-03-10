<!-- Signup Modal -->
<?php $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];?>
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
      <form action="functions/create-account-action.php" method="POST">
      <div class="modal-body">
        
            <div class="form-group">
                <label for="emailInput" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="emailInput" name="emailInput" required>
                <?php
                if(isset($_SESSION['error'])&&($_SESSION['error']=="Email already exists" || $_SESSION['error']=="Invalid email address")){
                        echo "<div class='alert alert-danger' role='alert'>
                        {$_SESSION['error']}
                        </div>";
                    }
                ?>
            </div>
            <div class="form-group">
                <label for="passwordInput" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="passwordInput" name="passwordInput" required>
            </div>
            <div class="form-group">
                <label for="confirmPasswordInput" class="col-form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPasswordInput" name="confirmPasswordInput" required>
                <?php
                    if(isset($_SESSION['error'])&&$_SESSION['error']=="Passwords do not match"){
                        echo "<div class='alert alert-danger' role='alert'>
                        {$_SESSION['error']}
                        </div>";
                    }
                ?>
            </div>
            
        
      </div>
      <!-- End Signup Modal Body -->
      <!-- Signup Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" value="Create Account">
        </form> 
      </div>
      <!-- End Signup Modal Footer -->
    </div>
  </div>
</div>
<!-- End Signup Modal -->