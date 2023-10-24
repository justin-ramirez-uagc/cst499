<?php
include 'sql.php';

$host = "127.0.0.1";
$database = "cst499";
$user = "cst499";
$pass = 'c$t499';

//Use details to create sql connection
$connection= mysqli_connect ($host, $user, $pass, $database);


$courseId = $_POST['courseId'];
$studentId = $_COOKIE['Username'];
$query1 = "DELETE FROM cst499.tblstudentschedule WHERE studentId='$studentId' AND courseId='$courseId'";
$query2 = "UPDATE cst499.tblCourse SET enrolledCount = enrolledCount - 1  WHERE id = $courseId";

$results1 = executeQuery($connection, $query1);
$results2 = executeQuery($connection, $query2);





print("$courseId removed from schedule");
sleep(5);
header('Location: viewsched.php', true, false); // redirect to home page 





