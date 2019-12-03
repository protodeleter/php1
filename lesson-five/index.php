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

<?php if ( $_SESSION['user'] ) { ?>

    exist

<?php } else { ?>
 not exist
<?php }

session_destroy ();
?>



</body>

</html>
