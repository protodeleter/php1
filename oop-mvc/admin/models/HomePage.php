<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 27.01.2020
 * Time: 23:00
 */
namespace models;

class HomePage
{
    public function __construct ()
    {
        echo 'model HomePage';
    }

    public function galleries(){

        $galleries = new \models\GalleryModel();

        $view = new \views\View();

        print_r ($galleries->getGallery ());

        $view->assign ('index' , $galleries->getGallery ());
        $view->display ('index');

    }


}