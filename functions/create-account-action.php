<?php
    function verifyPassword($password_input, $verify_password_input)
    {
        if($password_input == $verify_password_input)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function createAccount($password_input,$salt,$email_input,$conn){
        $password = hash('sha256', $password_input . $salt);
        $sql = "INSERT INTO tbl_users (users_email, users_password, users_salt) VALUES ('$email_input', '$password', '$salt')";
        $conn->query($sql);
    }
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];
    $verify_password = $_POST['confirmPasswordInput'];
    echo "Hello World";
?>