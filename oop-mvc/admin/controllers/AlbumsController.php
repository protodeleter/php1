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
    protected $posted_data ;

    public function __construct (  )
    {
        $this->view = new \views\View();
        $this->albums_model = new \models\Albums();



        print_r( $_POST );


        if( isset( $_POST ) and !empty($_POST) ) {
            $this->posted_data = $_POST['data'];
        }

    }

    public function getAlbums()
    {
        $this->data = $this->albums_model->getAlbums ();
        $this->view->assign ('index' , $this->data);
        $this->view->display ('index');
        return true;
    }

    public function insertAlbum()
    {
        $new_data = [];
        foreach ($this->posted_data as $item) {
            $new_data[] = $item;
        }
        $this->albums_model->insertAlbumsToDb($new_data);
    }

    public function deleteAlbum()
    {

    }

//    public function updateAlbumRecord( $data ) {
//        $this->albums_model->updateAlbum ();
//    }
}