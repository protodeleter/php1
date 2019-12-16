<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 13.12.2019
 * Time: 11:54
 */

require_once __DIR__ . '/classes/view.php';

$view = new View();

$view -> assign ('template' , ['news' => 'news 1']);

$view ->display('template');

?>

