<?php


?>

<html>
    <head>

	<link rel="stylesheet" href="cst499.css">

    </head>
    <body>
        <div class=mainhead><h1>Student Registration Portal</h1></div>
        <div class=mainhead><h1>Home</h1></div>
        <div class=subhead><h2>Common links:<h2></div>
            <span class=links><a href='index.php'>home</a></span>
            login
            <span class=links><a href='register.php'>registration</a></span>


            <form action="submitlogin.php" method="post">
            <table>
            <tr><td>Email: <td><input type="text" name="email"><br>
            <tr><td>Password: <td><input type="password" name="password"><br>
            <tr><td><input type="submit" value=login>
            </table>
            </form>
    </body>
    </body>
</html>