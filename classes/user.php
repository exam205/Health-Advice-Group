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
        if ($check_email_in_users_query->num_rows > 0){
            $salt = $result['users_salt'];
            $password = hash('sha256', $password . $salt);
            $dbpassword = $result['users_password'];
            $id = $result['users_id'];
            if ($password == $dbpassword){
                $user_account_info_sql = "SELECT * FROM tbl_useraccountinfo WHERE account_user_id = '$id'"; 
                $user_account_info_query = $conn->query($user_account_info_sql);
                $result = $user_account_info_query->fetch_assoc();
                if ($user_account_info_query->num_rows > 0){
                    $first_name = $result['account_firstname'];
                    $last_name = $result['account_surname'];
                    $postcode = $result['account_postcode'];
                    $user = new User($id,$email,$first_name,$last_name,$postcode);
                    $_SESSION['user'] = $user;
                    $_SESSION['success'] = "Logged in successfully!";
                    Common::goBack();
                }
            }else{
                $_SESSION['error'] = "Incorrect Password and/or Email";
                $_SESSION['error_loc'] = "loginModal";
                Common::goBack();
            }
        }else{
            $_SESSION['error'] = "Incorrect Password and/or Email";
            $_SESSION['error_loc'] = "loginModal";
            Common::goBack();
        }


    }

}
?>