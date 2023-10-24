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
$query1 = "SELECT id, enrolledCount, waitlistCount, courseMax FROM cst499.tblCourse WHERE id='$courseId'";

$results1 = executeSelectQuery($connection, $query1);
$enrolledCount = (int) $results1[0][1];
$courseMax = (int) $results1[0][3];


if ($enrolledCount < $courseMax) {
	$query2 = "UPDATE cst499.tblCourse SET enrolledCount = enrolledCount + 1  WHERE id = $courseId";
	$query3 = "INSERT INTO cst499.tblstudentschedule (studentId, courseId, isWaitlist) VALUES ($studentId, $courseId, 'N');";
	executeQuery($connection, $query2); #call the function to execute
	executeQuery($connection, $query3); #call the function to execute
	print("$courseId added to schedule");
	sleep(5);
	header('Location: viewcata.php', true, false); // redirect to home page 
}
else {
	$query2 = "UPDATE cst499.tblCourse SET waitlistCount = waitlistCount + 1  WHERE id = $courseId";
	$query3 = "INSERT INTO cst499.tblstudentschedule (studentId, courseId, isWaitlist) VALUES ($studentId, $courseId, 'Y');";
	executeQuery($connection, $query2); #call the function to execute
	executeQuery($connection, $query3); #call the function to execute
	print("$courseId added to WaitList");
	sleep(5);
	header('Location: viewcata.php', true, false); // redirect to home page 
}




