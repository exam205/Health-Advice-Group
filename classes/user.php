<?php
include_once "common-functions.php";
class User{
    public $id;
    public $email;
    public $first_name;
    public $last_name;
    public $postcode;

    function __construct($id_input,$email_input,$first_name_input,$last_name_input,$postcode_input)
    {
        $this -> id = $id_input;
        $this -> email = $email_input;
        $this -> first_name = $first_name_input;
        $this -> last_name = $last_name_input;
        $this -> postcode = $postcode_input;
        $_SESSION['loggedin'] = true;

    }

    public static function login($email, $password, $conn){
        $check_email_in_users_sql = "SELECT * FROM tbl_users WHERE users_email = '$email'"; //Check if email already exists
        $check_email_in_users_query = $conn->query($check_email_in_users_sql);
        $result = $check_email_in_users_query->fetch_assoc();

        if ($check_email_in_users_query->num_rows <= 0){ //Check if email exists
            $_SESSION['error'] = "Incorrect Password and/or Email";
            $_SESSION['error_loc'] = "loginModal";
            Common::goBack();
        }

        $salt = $result['users_salt'];
        $password = hash('sha256', $password . $salt);
        $dbpassword = $result['users_password'];
        $id = $result['users_id'];
        $_SESSION['uid'] = $id;

        if ($password != $dbpassword){ //Check if password is correct
            $_SESSION['error'] = "Incorrect Password and/or Email";
            $_SESSION['error_loc'] = "loginModal";
            Common::goBack();
        }

        $user_account_info_sql = "SELECT * FROM tbl_useraccountinfo WHERE account_user_id = '$id'";
        $user_account_info_query = $conn->query($user_account_info_sql);
        $result = $user_account_info_query->fetch_assoc();

        if ($user_account_info_query->num_rows <= 0){ //Check if user entered additional details
            $_SESSION['error'] = "Please complete your account details";
            $_SESSION['error_loc'] = "additionalDetailsModal";
            $_SESSION['email'] = $email;
            Common::goBack();
        }

        $first_name = $result['account_firstname'];
        $last_name = $result['account_surname'];
        $postcode = $result['account_postcode'];
        $_SESSION['postcode'] = $postcode;
        $_SESSION['firstname'] = $first_name;
        $_SESSION['surname'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "Logged in successfully!";
        $_SESSION['loggedin'] = true;
        $conn->close();
        Common::goBack();

    }

    function logout(){
        unset($_SESSION['uid']); // Unset all session variables
        unset($_SESSION['firstname']);
        unset($_SESSION['surname']);
        unset($_SESSION['postcode']);
        unset($_SESSION['email']);
        unset($_SESSION['loggedin']);
        $_SESSION['success'] = "Logged out successfully!";
        Common::goBack();
    }

    function getDetails(){
        include 'functions/dbconnect.php';
        $sql = "SELECT tbl_useraccountinfo.account_country, tbl_useraccountinfo.account_city, tbl_useraccountinfo.account_gender_id
         FROM tbl_useraccountinfo 
         WHERE account_user_id = $this->id";
        $query = $conn->query($sql);
        $result = $query->fetch_assoc();
        $additional_details = array( // Create an array of the additional details
            "country" => $result['account_country'],
            "city" => $result['account_city'],
            "gender" => $result['account_gender_id']
        );
        $conn->close();
        return $additional_details;

    }

    function update(){
        include 'functions/dbconnect.php';
        $details = $this->getDetails();
        $first_name = strip_tags(mysqli_escape_string($conn,$_POST['editFirstNameInput']));
        if (empty($first_name)){ // If the user doesn't enter a new first name, the old one will be used
            $first_name = $this->first_name;
        };

        $last_name = strip_tags(mysqli_escape_string($conn,$_POST['editSurnameInput']));
        if (empty($last_name)){
            $last_name = $this->last_name;
        };

        $postcode = strip_tags(mysqli_escape_string($conn,$_POST['editPostcodeInput']));
        if (empty($postcode)){
            $postcode = $this->postcode;
        };

        $city = strip_tags(mysqli_escape_string($conn,$_POST['editCityInput']));
        if (empty($city)){
            $city = $details['city'];
        };

        $gender = $_POST['editGenderInput'];
        if ($details['gender'] == $gender){
            $gender = $details['gender'];
        };

        $country = $_POST['editCountryInput'];
        if ($details['country'] == $country){
            $country = $details['country'];
        };

        $sql = "UPDATE tbl_useraccountinfo SET account_firstname = '$first_name', account_surname = '$last_name', account_postcode = '$postcode', account_city = '$city', account_country = '$country', account_gender_id = '$gender' WHERE account_user_id = $this->id";
        $conn->query($sql);
        $conn->close();
        $this -> first_name = $first_name; // Update the user object
        $this -> last_name = $last_name;
        $this -> postcode = $postcode;
        $_SESSION['firstname'] = $first_name; // Update the session variables
        $_SESSION['surname'] = $last_name;
        $_SESSION['postcode'] = $postcode;
        $_SESSION['success'] = "Details updated successfully!";
    }

}
?>