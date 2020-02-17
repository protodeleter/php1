<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 09.02.2020
 * Time: 0:32
 */
namespace controllers;

class AlbumsController
{

    protected $sql;
    protected $data;
    protected $view;
    protected $template;
    protected $albums_model;

    public function __construct ()
    {
        $this->view = new \views\View();
        $this->albums_model = new \models\Albums();
    }

    public function getAlbums() {
        $this->data = $this->albums_model->getAlbums ();
        $this->view->assign ('index' , $this->data);
        $this->view->display ('index');
        return true;
    }

    public function insertAlbum($data) {
        $this->albums_model->insertAlbumsToDb($data);
    }
}