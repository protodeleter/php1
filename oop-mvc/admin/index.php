<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 22.01.2020
 * Time: 22:49
 */

include_once __DIR__.'/config/autoload.php';

//require_once __DIR__.'/views/View.php';
//$test = new \controllers\HomePage();

$alb_controller = new \controllers\AlbumsController();

include_once __DIR__.'/templates/layout/header.php';
$alb_controller->getAlbums ();
include_once __DIR__.'/templates/layout/footer.php';

?>