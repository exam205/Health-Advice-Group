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
                <input type="text" class="form-control" id="firstNameInput" name="firstNameInput" required>
            </div>
            <div class="form-group">
                <label for="surnameInput" class="col-form-label">Surname:</label>
                <input type="text" class="form-control" id="surnameInput" name="surnameInput" required>
            </div>
            <div class="form-group">
                <label for="genderInput" class="col-form-label">Gender:</label>
                <select class=form-select id="genderInput" name="genderInput" aria-label="Default select example" required>
                    <option selected disabled>Select an Option</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="postcodeInput" class="col-form-label">Postcode:</label>
                <input type="text" class="form-control" id="postcodeInput" name="postcodeInput" maxlength="8" required>
            </div>
            <div class="form-group">
                <label for="cityInput" class="col-form-label">City:</label>
                <input type="text" class="form-control" id="cityInput" name="postcodeInput" required>
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
        <form>
      </div>
      <!-- End Additional Details Modal Footer -->
    </div>
  </div>
</div>
<!-- End Additional Details Modal -->