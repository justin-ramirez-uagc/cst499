<?php
include 'sql.php';

$host = "127.0.0.1";
$database = "cst499";
$user = "cst499";
$pass = 'c$t499';

//Use details to create sql connection
$connection= mysqli_connect ($host, $user, $pass, $database);
$user_id = $_COOKIE['Username'];

$query = "with full_schedule as (
SELECT cst499.tblCourse.id, commonName, semester, timeOfClass, daysOfClass, enrolledCount, waitlistCount, 
case 
	when cst499.tblstudentschedule.studentId is null then \"0\"
ELSE cst499.tblstudentschedule.studentId
END as students_id 
FROM cst499.tblCourse
LEFT JOIN cst499.tblstudentschedule ON cst499.tblCourse.id = cst499.tblstudentschedule.courseId
)

select * from full_schedule where students_id != '$user_id'";

$results = executeSelectQuery($connection, $query);


?>

<html>
    <head>

	<link rel="stylesheet" href="cst499.css">

    </head>
    <body>
        <div class=mainhead><h1>Student Registration Portal</h1></div>
        <div class=mainhead><h1>View Catalog</h1></div>
        <div class=subhead><h2>Common links:<h2></div>
            <span class=links><a href='index.php'>home</a></span>
            View Catalog</a></span>
            <?php if(isset($_COOKIE['Username'])) { print "<span class=links><a href='viewsched.php'>View Schedule</a>"; } ?>


			<form action='submitcourse.php' method='post'>
            <table border=1>
			<tr><td>Course Id<td>Name<td>Semester<td>Class Start Time<td>Class Days<td>Current Enrollment<td>Current Waitlist<td>Add to class

			<?php 	foreach ($results as $row) {
				
				print 
				"<form action='submitcourse.php' method='post'>
				<tr><td><input type='text' name=courseId value=$row[0] readonly><td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td><input type='submit' value='Add Course'>
				</form>"
				;
			}
			?>

            </table>
			</form>
    </body>
    </body>
</html>