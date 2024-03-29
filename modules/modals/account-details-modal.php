<!-- Additional Details Modal -->
<div class="modal fade" id="additionalDetailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="additionalDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <?php
        // Create a success alert on creating an account using the success session
        if (isset($_SESSION['success']) && $_SESSION['success'] == 'Account created successfully!') {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['success'] . '</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <br >
            ';
        }
        // Create an error alert on not completeing the additional details form
        if (isset($_SESSION['error']) && $_SESSION['error'] == 'Please complete your account details') {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['error'] . '</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <br >
            ';
        }
        ?>
      <div class="modal-header">
        <h5 class="modal-title" id="additionalDetailsModalLabel">We Still Need A Few More Details From You! </h5>
        </button>
      </div>
      <!-- Additional Details Modal Body -->
      <form action="functions/additional-details-action.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
                  <label for="firstNameInput" class="col-form-label">First Name:</label>
                  <input type="text" class="form-control" id="firstNameInput" name="firstNameInput" >
              </div>
              <div class="form-group">
                  <label for="surnameInput" class="col-form-label">Surname:</label>
                  <input type="text" class="form-control" id="surnameInput" name="surnameInput" >
              </div>
              <div class="form-group">
                  <label for="dobInput" class="col-form-label">Date of Birth:</label>
                  <input type="date" class="form-control" id="dobInput" name="dobInput" >
              </div>
              <div class="form-group">
                  <label for="genderInput" class="col-form-label">Gender:</label>
                  <select class=form-select id="genderInput" name="genderInput" aria-label="Default select example" >
                      <option selected disabled>Select an Option</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                      <option value="3">Other</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="postcodeInput" class="col-form-label">Postcode:</label>
                  <input type="text" class="form-control" id="postcodeInput" name="postcodeInput" maxlength="8" >
                  <button type="button" class="btn btn-primary" id="postcodeLookup" name="postcodeLookup" onclick="lookupAddress()">Lookup Address</button>
              </div>
              <div class="form-group">
                  <label for="cityInput" class="col-form-label">City:</label>
                  <input type="text" class="form-control" id="cityInput" name="cityInput" >
              </div>
              <div class="form-group">
                  <label for="countryInput" class="col-form-label">Country:</label>
                  <?php include_once "modules/country-list.php"; ?>
              </div>
        </div>
        <!-- End Additional Details Modal Body -->
        <!-- Additional Details Modal Footer -->
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="submit" value="Submit">
      </form>
      </div>
      <!-- End Additional Details Modal Footer -->
    </div>
  </div>
</div>

<!-- End Additional Details Modal -->