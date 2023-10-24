<?php
//SQL database details
$host = "127.0.0.1";
$database = "cst499";
$user = "cst499";
$pass = 'c$t499';

//Use details to create sql connection
$connection= mysqli_connect ($host, $user, $pass, $database);

//$query = 'SELECT * FROM cst499.tblstudent';

function executeSelectQuery($con, $sql) {
    $result = mysqli_query ($con, $sql);

	if (!$result) {
		return "No Valid Info";
	}
    $status = mysqli_fetch_all($result);

    $ret = array();
    foreach ($status as $row){
        array_push($ret, $row);
    }  // removed, no longer testing
    return $ret;
    print_r($ret);
}

function executeQuery ($con, $sql){
    $result = mysqli_query ($con, $sql);
    print 'success!';
}


#executeSelectQuery($connection, $query);

?>