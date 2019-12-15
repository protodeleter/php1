<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 13.12.2019
 * Time: 11:54
 */

//require_once __DIR__. '/tpl/template.php';

require_once __DIR__ . '/classes/view.php';

//echo $vu -> assign('template.php' , 'test asa');
//$vu -> render('template.php');

//$vu ->display('template.php');


$view = new View('template.php');

echo $view -> assign ('template.php' , 'test');

//print_r($view);


//$newView = $view -> assign('template.php' , 'new Value');
//var_dump ($newView);




?>


<form action="index.php" method="post">
    <input type="text" name="text" value="">
    <input type="submit" value="SEND" name="submit" />
</form>

