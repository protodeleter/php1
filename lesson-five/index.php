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

if ( !isset( $_SESSION['user'] ) ) {
    Header( 'Location: /lesson-five/login.php' );
}

if ( isset( $_FILES ) ) {
    move_uploaded_file( $_FILES['upload']['tmp_name'], __DIR__.'/gallery/' . $_FILES['upload']['name'] );
}

?>

<html>

<head>


</head>

<body>

<?php echo getCurrentUser(); ?>
<a href="logout.php"> Logout </a>

<?php if ( isset( $_SESSION['user'] ) ){ ?>
<form action="" method="post"  enctype="multipart/form-data">
    <input type="file" value="" name="upload" />
    <input type="submit" value="Upload image"/>
</form>

<?php } ?>


<?php

$sdirs = scandir (__DIR__.'/gallery');

foreach ($sdirs as $sdir) {
    if ( is_file ( __DIR__. '/gallery/' . $sdir) ) { ?>
        <img src="gallery/<?php echo $sdir; ?>" style="max-width: 250px;"/>
<?php }

}
?>

</body>

</html>