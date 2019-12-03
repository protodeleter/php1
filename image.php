<?php
echo include ( 'get_form.php' );


function run_function($a) {
    return $a;
}

function parameter_function() {
    return 'test';
}

echo run_function( parameter_function() );







$kitties = [
    1 => 'image-42.jpg',
    2 => 'image-43.jpg'
];

if (isset( $_GET['id'] ) && !empty($_GET['id'])) {
    $img_id = $_GET['id'];
} ?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

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

</head>




<ul>


<?php
foreach ( $kitties as $kitty) { ?>

    <li>
    <img src="img/<?php echo $kitty; ?>"  alt=""/>
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
