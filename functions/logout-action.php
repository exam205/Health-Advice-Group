<?php
session_start();
include_once '../classes/user.php';
$user = new User ($_SESSION['uid'],$_SESSION['email'],$_SESSION['firstname'],$_SESSION['surname'],$_SESSION['postcode']); // Creatue user object
$user->logout();
?>