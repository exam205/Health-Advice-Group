<?php
    $username = "healthadmin";
    $password = "healthgroup";
    $hostname = "localhost";
    $dbname = "healthadvicegroup";
    //connection to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Unable to connect to MySQL");
    return $conn;
 ?>