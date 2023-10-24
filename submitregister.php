<?php
include 'sql.php';

$host = "127.0.0.1";
$database = "cst499";
$user = "cst499";
$pass = 'c$t499';

//Use details to create sql connection
$connection= mysqli_connect ($host, $user, $pass, $database);

//$query = 'INSERT INTO cst499.tblstudent (column1, column2, column3, ...) VALUES (value1, value2, value3, ...); ';
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];




$query = "INSERT INTO cst499.tblstudent (email, passwd, firstName, lastName, address) 
    VALUES ('$email', '$password', '$firstname', '$lastname', '$address'); ";


executeQuery($connection, $query); #call the function to execute
sleep(3);
header('Location: index.php', true, false); // redirect to home page 
?>
