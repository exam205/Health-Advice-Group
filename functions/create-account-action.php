<?php
    include_once "dbconnect.php";
    session_start();
    function goBack(){
        if (isset($_SERVER["HTTP_REFERER"])){
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: " . $referer);
            exit;
        }else{
            header("Location: index.php"); //If no referer, go back to index.php
            exit;
        }
    }

    function verifyPassword($password_input, $verify_password_input)// Verifies that the password and verify password inputs match
    {
        if($password_input == $verify_password_input)
        {
            return true;
        }
        else
        {
            $_SESSION['error'] = "Passwords do not match";
            $_SESSION['error_loc'] = "createAccountModal";
            goBack();
        }
    }

    function createAccount($password_input,$salt,$email_input,$conn){
        $password = hash('sha256', $password_input . $salt);
        $email = mysqli_escape_string($conn, $email_input);//Prevents SQL injection
        $email = strip_tags($email);//Prevents XSS
        $sql = "INSERT INTO tbl_users (users_email, users_password, users_salt) VALUES ('$email_input', '$password', '$salt')";
        $conn->query($sql);
        $_SESSION['success'] = "Account created successfully!";
        $_SESSION['success_loc'] = "additionalDetailsModal";
        goBack();
    }

    function checkEmail($email,$conn){
        $sql = "SELECT * FROM tbl_users WHERE users_email = '$email'"; //Check if email already exists
        $sql_query = $conn->query($sql);
        $sql_query->fetch_assoc();
        if ($sql_query->num_rows > 0){
            $_SESSION['error'] = "Email already exists";
            $_SESSION['error_loc'] = "createAccountModal";
            goBack();
        }else{
            return false;
        }
    }

    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];
    $verify_password = $_POST['confirmPasswordInput'];
    $salt = bin2hex(random_bytes(16)); //Random Salt
    if (strlen($salt) > 16){
        $salt = substr($salt, 0, 16); // Max salt length is 16 - bin2hex can go over 16
    }

    verifyPassword($password,$verify_password);
    checkEmail($email,$conn);
    createAccount($password,$salt,$email,$conn);

    
    
?>