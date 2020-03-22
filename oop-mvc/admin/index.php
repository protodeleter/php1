<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 22.01.2020
 * Time: 22:49
 */

include_once __DIR__.'/config/autoload.php';


$alb_controller = new \controllers\AlbumsController();
$alb_controller->getAlbums ();


?>