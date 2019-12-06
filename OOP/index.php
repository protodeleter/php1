<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 06.12.2019
 * Time: 11:41
 */


include_once 'GuestBook.php';
include_once 'Uploader.php';


$gb = new GuestBook(GB);

$gb->text = 'new test';
$gb -> append();
$gb -> save();

$gb->text = 'new test 2';
$gb -> append();
$gb -> save();


if (isset($_POST) && isset( $_FILES )) {

    $upl = new Uploader( $_FILES['file_upl'] );

    if ( $upl->isUploaded() ) {

        $upl ->upload();

    }


}




?>



<html>

<head>

</head>

<body>


<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

    <input type="file" value="" name="file_upl"/>
    <input type="submit" value="submit" >

</form>

</body>

</html>

