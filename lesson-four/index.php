<?php

include( 'functions.php' );
session_start();


//print_r( $_SESSION );

if ( isset( $_SESSION['errors'] ) && !empty( $_SESSION['errors'] ) ) {

    $errors = $_SESSION['errors'];

//    print_r($errors);

    if ( is_array ($error) ) {
        foreach ( $errors as $s_error ) {
            echo $s_error ;
        }
    } else {
        echo $errors ;
    }

}

unset($_SESSION['errors']);


?>

<html>

<head>

    <title> Гостевая книга </title>



</head>


<body>

<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 29.11.2019
 * Time: 10:33
 */

$file_recs = please_read_file( 'database.txt' );

?>

<style>

    ul.gallery {}
    ul.gallery li {
        display: inline-block;
        vertical-align: baseline;
        max-width: 20%;
    }
    ul.gallery li img {
        max-width: 100%;
    }
</style>

<form action="processor.php" method="post">

    <input type="text" placeholder="Add record" name="record" value="" />
    <input type="submit" value="Add Record" />

</form>

<ul>
    <?php foreach ($file_recs as $file_rec) { ?>
        <li>
            <?php echo $file_rec; ?>
        </li>
    <?php } ?>
</ul>


<h1>
    Gallery
</h1>

<form action="processor.php" method="post" enctype="multipart/form-data">

    <input type="file" name="img_upl" value="" >

    <input type="submit" value="Upload files">

</form>



<ul class="gallery">

    <?php $img_file = get_gallery_files( $gal_dir );
    foreach ( $img_file as $img_f ) { ?>
        <li>
            <img src="https://php.local/files-work/gallery/<?php echo $img_f; ?>">
        </li>
    <?php } ?>

</ul>

</body>

</html>
