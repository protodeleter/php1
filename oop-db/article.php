<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 15.01.2020
 * Time: 22:33
 */
include_once __DIR__.'/classes/DB.php';
include_once __DIR__.'/classes/View.php';

$db = new DB();

$view = new View();


if (isset($_GET['id'])) {

    $id = $_GET['id'];

}


$db->execute ('SELECT * FROM News');
$gotNews = $db->query ('SELECT * FROM News WHERE id=:id',[$id] );
$view -> assign ('single_news' , $gotNews );
$view->display ('single_news');

