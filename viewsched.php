<?php
include 'sql.php';

$host = "127.0.0.1";
$database = "cst499";
$user = "cst499";
$pass = 'c$t499';

//Use details to create sql connection
$connection= mysqli_connect ($host, $user, $pass, $database);
$user_id = $_COOKIE['Username'];

$query_schedule = "
SELECT 
cst499.tblcourse.id
,cst499.tblcourse.semester
,cst499.tblcourse.daysOfClass
,cst499.tblcourse.timeOfClass
,isWaitList
FROM cst499.tblStudentSchedule 
LEFT JOIN cst499.tblcourse ON cst499.tblStudentSchedule.courseId = cst499.tblcourse.id
WHERE cst499.tblStudentSchedule.studentId='$user_id'
";

$schedule_results = executeSelectQuery($connection, $query_schedule);




?>

<html>
    <head>

	<link rel="stylesheet" href="cst499.css">

    </head>
    <body>
        <div class=mainhead><h1>Student Registration Portal</h1></div>
        <div class=mainhead><h1>View Schedule</h1></div>
        <div class=subhead><h2>Common links:<h2></div>
            <span class=links><a href='index.php'>home</a></span>
            <?php if(isset($_COOKIE['Username'])) { print "<span class=links><a href='viewcata.php'>View Catalog</a></span>"; } ?>
            View Schedule



            <table border=1>
			<?php 	if ($schedule_results == 'No Valid Info') {print "<td>No scheduled classes yet! View the Catalog to schedule classes now!";}
					else {
						print "<tr><td>Course Id<td>Semester<td>Days of Class<td>Time of Class<td>Waitlist?<td>Remove Class";
						foreach ($schedule_results as $row) {

							print("
							<form action='removecourse.php' method='post'>
							<tr><td><input type='text' name=courseId value=$row[0] readonly><td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td><input type='submit' value='Remove Course'>
							</form>
							");
						}
					}
			?>
            </table>
            </form>
    </body>
    </body>
</html>