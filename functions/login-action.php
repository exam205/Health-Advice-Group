<?php
include_once 'dbconnect.php';
include_once '../classes/user.php';
session_start();

$email = $_POST['emailInput'];
$password = $_POST['passwordInput'];
user::login($email,$password,$conn)

?>