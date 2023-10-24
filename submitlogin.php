<?php
include 'sql.php';

$host = "127.0.0.1";
$database = "cst499";
$user = "cst499";
$pass = 'c$t499';

//Use details to create sql connection
$connection= mysqli_connect ($host, $user, $pass, $database);

$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT id, email, passwd, firstName, lastName FROM cst499.tblstudent WHERE email='$email'";

$results = executeSelectQuery($connection, $query);


$cookiename = $results[0][3] . $results[0][4];
//$cookievalue = "$results[0][2]  $results[0][3]";
$cookievalue2 = $results[0][0];

if ($email == $results[0][1] && $password == $results[0][2]){
    print "login successful for $cookiename!"; //verify success
    sleep(1);
    setcookie('Username', $cookievalue2, time()+60*60, null, null, null, true); //set the cookie Username
}
header('Location: index.php', true, false); // redirect to home page 