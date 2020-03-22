<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 22.01.2020
 * Time: 22:49
 */

require_once __DIR__.'\config\autoload.php';

$siteController = new \controllers\index\SiteClass();

$siteModel = new \models\index\SiteClass();

$view = new \views\View();




