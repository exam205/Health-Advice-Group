<?php
    include_once "dbconnect.php";
    session_start();
    function verifyPassword($password_input, $verify_password_input)
    {
        if($password_input == $verify_password_input)
        {
            return true;
        }
        else
        {
            $_SESSION['error'] = "Passwords do not match";
            $_SESSION['error_loc'] = "createAccountModal";
            if (isset($_SERVER["HTTP_REFERER"])) {
                $referer = $_SERVER['HTTP_REFERER'];
                header("Location: " . $referer);
                exit;
            }
        }
    }
    function createAccount($password_input,$salt,$email_input,$conn){
        $password = hash('sha256', $password_input . $salt);
        $email = mysqli_escape_string($conn, $email_input);
        $email = strip_tags($email);
        $sql = "INSERT INTO tbl_users (users_email, users_password, users_salt) VALUES ('$email_input', '$password', '$salt')";
        $conn->query($sql);
    }
    function checkEmail($email,$conn){
        $sql = "SELECT * FROM tbl_users WHERE users_email = '$email'";
        $sql_query = $conn->query($sql);
        $sql_query->fetch_assoc();
        if ($sql_query->num_rows > 0){
            $_SESSION['error'] = "Email already exists";
            $_SESSION['error_loc'] = "createAccountModal";
            if (isset($_SERVER["HTTP_REFERER"])) {
                $referer = $_SERVER['HTTP_REFERER'];
                header("Location: " . $referer);
                exit;
            }
        }else{
            return false;
        }
    }
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];
    $verify_password = $_POST['confirmPasswordInput'];
    $salt = bin2hex(random_bytes(16));
    if (strlen($salt) > 16){
        $salt = substr($salt, 0, 16);
    }
    verifyPassword($password,$verify_password);
    checkEmail($email,$conn);
    createAccount($password,$salt,$email,$conn);
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: " . $referer);
    exit;
    
?>