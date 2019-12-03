<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 01.12.2019
 * Time: 22:12
 */

session_start ();

include_once 'users.php';
include_once 'functions.php';
include_once 'login.php';


?>

<html>

<head>


</head>

<body>


<form method="post" action="login.php" >
    <input type="text" name="username" value="" placeholder="Username" />
    <input type="password" name="password" value="" placeholder="Password" />
    <input type="submit" value="Login" />
</form>


</body>

</html>
