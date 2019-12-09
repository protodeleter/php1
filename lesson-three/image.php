<?php

if (isset( $_GET['id'] ) && !empty($_GET['id'])) {
    $img_id = $_GET['id'];
}

$kitties = [
    1 => 'catone.jpg',
    2 => 'cattwo.jpg'
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

<div>
    <img src="img/<?php echo $kitties[$img_id]; ?>"  alt=""/>
</div>



</body>

</html>
