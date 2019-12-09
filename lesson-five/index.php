<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 01.12.2019
 * Time: 22:12
 */
session_start ();
//session_destroy ();

include_once 'functions.php';
include_once 'class.upload.php';


if ( !isset( $_SESSION['user'] ) ) {
    Header( "Location: /lesson-five/login.php" );
}


?>

<html>

<head>


</head>

<body>

<?php echo getCurrentUser(); ?>
<a href="logout.php"> Logout </a>

<?php if ( isset( $_SESSION['user'] ) ){ ?>



<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data">

    <input type="file" value="" name="upload" />
    <input type="submit" value="Upload image"/>

</form>



<?php } ?>

</body>

</html>
