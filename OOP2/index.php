<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 13.12.2019
 * Time: 11:54
 */

require_once __DIR__ . '/classes/view.php';

$view = new View();

$view -> assign ('news' , ['New 1','New 2'] );

echo $view ->display('template');


?>


<html>

<head>

    <title>
        Site
    </title>

</head>

<body>


<div>


</div>


</body>


</html>
