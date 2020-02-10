<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 27.01.2020
 * Time: 22:58
 */
namespace controllers;

use \PDO;

$view = new \views\View();

$view->assign ('index' , ['test' , 'test2']);
$view->display ('index');


$model = new \models\HomePage();
$db = new \classes\Db();




class HomePage
{

    public function __construct ()
    {
        echo 'Home page Controller';
    }


}