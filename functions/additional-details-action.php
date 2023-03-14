<?php
include_once '../classes/common-functions.php';
include_once 'dbconnect.php';
session_start();
// $first_name = mysqli_escape_string($conn, $_POST['firstNameInput']);//Prevents SQL injection
$first_name = strip_tags(mysqli_escape_string($conn,$_POST['firstNameInput']));
$last_name = strip_tags(mysqli_escape_string($conn,$_POST['surnameInput']));
$postcode = strip_tags(mysqli_escape_string($conn,$_POST['postcodeInput']));
$city = strip_tags(mysqli_escape_string($conn,$_POST['cityInput']));
$dob = $_POST['dobInput'];
$country = $_POST['countryInput'];
$gender = $_POST['genderInput'];
$uid = $_SESSION['uid'];
$sql = "INSERT INTO tbl_useraccountinfo (account_gender_id,account_user_id,account_firstname,account_surname,account_dob,account_postcode,account_city,account_country) VALUES ('$gender','$uid','$first_name','$last_name','$dob','$postcode','$city','$country')";
$conn->query($sql);
$_SESSION['success'] = "Account Details Added Successfully!";
Common::goBack();

?>