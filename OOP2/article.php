<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 18.12.2019
 * Time: 21:58
 */

require_once __DIR__ . '/classes/view.php';
require_once __DIR__ . '/classes/article.php';


if ( isset( $_GET['id'] ) ) {

    $article = new Article($_GET['id']);


    $article->getArticle();


}

//
//$newsFiles = $news->readAllNews ();
//
////print_r($newsFiles);
//
//$view = new View();
//
//$view -> assign ('news' , $newsFiles );
//
//$view ->display('news');
