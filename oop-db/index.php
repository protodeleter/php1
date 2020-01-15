<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 10.01.2020
 * Time: 15:31
 */
include_once __DIR__.'/classes/DB.php';
include_once __DIR__.'/classes/View.php';

$db = new DB();

$view = new View();

$db->execute ('SELECT * FROM News');
$gotNews = $db->query ('SELECT * FROM News WHERE id=:id', [1,2,3]);
$view -> assign ('all_news' , $gotNews );
$view->display ('all_news');