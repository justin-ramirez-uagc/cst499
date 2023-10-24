<?php


?>

<html>
    <head>

	<link rel="stylesheet" href="cst499.css">

    </head>
    <body>
        <div class=mainhead><h1>Student Registration Portal <?php if(isset($_COOKIE['Username'])) { $name = $_COOKIE['Username']; print " - $name"; } ?></h1></div>
        <div class=mainhead><h1>Home</h1></div>
        <div class=subhead><h2>Common links:<h2></div>
            home
            <?php if(!isset($_COOKIE['Username'])) { print "<span class=links><a href='login.php'>login</a></span>"; } ?>
            <?php if(!isset($_COOKIE['Username'])) { print "<span class=links><a href='register.php'>registration</a></span>"; } ?>
            <?php if(isset($_COOKIE['Username'])) { print "<span class=links><a href='viewcata.php'>View Catalog</a></span>"; } ?>
            <?php if(isset($_COOKIE['Username'])) { print "<span class=links><a href='viewsched.php'>View Schedule</a></span>"; } ?>
         

    </body>
</html>