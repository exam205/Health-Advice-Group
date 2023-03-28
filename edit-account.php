<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account</title>
    <?php include 'modules/links.php'; ?> 
</head>
<body>
    <?php 
    include 'modules/navbar.php'; 
    if (isset($_POST['editFirstNameInput'])){
        $user->update();
    }
    ?>
    <div class="container py-4 text-bg-dark border rounded-3 mt-4" id="edit-details-form">
        <!-- Create a title for the page -->
        <div class="row">
            <h1 class="display-5 fw-bold text-center">Edit Account Details</h1>
        </div>
        <!-- Create a form for the user to edit their account details -->
        <form action="edit-account.php" method="POST">
            <div class="container py-3 bg-secondary bg-gradient rounded-3 p-4">
                <div class="form-group">
                    <div class="form-group">
                        <label for="firstNameInput" class="col-form-label">First Name:</label>
                        <input type="text" class="form-control" id="firstNameInput" name="editFirstNameInput" placeholder="Current: <?php echo $user->first_name ?>">
                    </div>
                    <div class="form-group">
                        <label for="surnameInput" class="col-form-label">Surname:</label>
                        <input type="text" class="form-control" id="surnameInput" name="editSurnameInput" placeholder="Current: <?php echo $user->last_name ?>">
                    </div>
                    <div class="form-group">
                        <label for="genderInput" class="col-form-label">Gender:</label>
                        <select class=form-select id="genderInput" name="editGenderInput" aria-label="Default select example" place >
                            <option disabled>Select an Option</option>
                            <option <?php echo $details=="1" ? "selected":""?> value="1">Male</option>
                            <option <?php echo $details=="2" ? "selected":""?> value="2">Female</option>
                            <option <?php echo $details=="3" ? "selected":""?> value="3">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="postcodeInput" class="col-form-label">Postcode:</label>
                        <input type="text" class="form-control" id="postcodeInput" name="editPostcodeInput" maxlength="8" placeholder="Current: <?php echo $user->postcode?>" >
                    </div>
                    <div class="form-group">
                        <label for="cityInput" class="col-form-label">City:</label>
                        <input type="text" class="form-control" id="cityInput" name="editCityInput" placeholder="Current: <?php echo $details["city"]?>">
                    </div>
                    <div class="form-group">
                        <label for="countryInput" class="col-form-label">Country:</label>
                        <?php include "modules/country-list.php"; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success" id="submitBtn" name="submitBtn">Submit</button>
                    <!-- button that goes to a javascript function that resets the form -->
                        <button type="reset" class="btn btn-danger" id="resetBtn" name="resetBtn" onclick="resetForm()">Reset</button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
    <script type="text/javascript">
        // Jquery that sets the selected option of countryInput to the user's country
        $(document).ready(function(){
            $("#countryInput option[value='<?php echo $details["country"]?>']").attr("selected", "selected");
        });

        // Function that resets the form
        function resetForm(){
            $("#edit-details-form").load(" #edit-details-form > *");
        }
    </script>
</body>
</html>