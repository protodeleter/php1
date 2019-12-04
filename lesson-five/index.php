<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 01.12.2019
 * Time: 22:12
 */


session_start ();
//session_destroy ();

include_once 'users.php';
include_once 'functions.php';
//include_once 'login.php';


if ( !isset( $_SESSION['user'] ) ) {

    Header( "Location: /lesson-five/login.php" );

}

?>

<html>

<head>


</head>

<body>


<a href="logout.php"> Logout </a>


</body>

</html>
