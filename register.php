<?php


?>

<html>
    <head>

	<link rel="stylesheet" href="cst499.css">

    </head>
    <body>
        <div class=mainhead><h1>Student Registration Portal</h1></div>
        <div class=mainhead><h1>Login</h1></div>
        <div class=subhead><h2>Common links:<h2></div>
            <span class=links><a href="index.php">home</a></span> 
            <span class=links><a href='login.php'>login</a></span>
            registration
            <form action="submitregister.php" method="post">
            <table>
            <tr><td>Email: <td><input type="text" name="email"><br>
            <tr><td>Password: <td><input type="password" name="password"><br>
            <tr><td>First Name: <td><input type="text" name="firstname"><br>
            <tr><td>Last Name: <td><input type="text" name="lastname"><br>
            <tr><td>Address: <td><input type="text" name="address"><br>
           
            <tr><td><input type="submit">
            </table>
            </form>        

    </body>
</html>