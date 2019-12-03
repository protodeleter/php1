<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 03.12.2019
 * Time: 19:59
 */


//include ( 'get_form.php' );


$kitties = [
    1 => '42',
    2 => '43'
];

?>



<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
</head>



<body>


<style type="text/css">
    * {
        display: block;
    }
    ul {
        display: flex;
        align-items: baseline;
    }
    li {
        max-width: 500px;
    }
    img {
        max-width: 100%;
        height: auto;
    }
</style>



<a href="get_form.php"> CALCULATOR </a>



<ul>


    <?php
    foreach ( $kitties as $kitty) {


        ?>

        <li>
            <a href="image.php?id=<?php echo $kitty; ?>">
                <img src="img/image-<?php echo $kitty; ?>.jpg"  alt=""/>
            </a>
        </li>

        <?php
    }
    ?>

</ul>

<div>
    <img src="img/image-<?php echo $img_id; ?>.jpg"  alt=""/>
</div>



</body>

</html>

