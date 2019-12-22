<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 13.12.2019
 * Time: 11:54
 */

require_once __DIR__ . '/classes/view.php';
require_once __DIR__ . '/classes/news.php';

$news = new News();


$newsFiles = $news->readAllNews ();
$exploadedNews = $news->explodeNews ();

$view = new View();

$view -> assign ('news' , $exploadedNews );

$view ->display('news');
