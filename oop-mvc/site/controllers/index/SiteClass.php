<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 02.02.2020
 * Time: 22:39
 */

namespace controllers\index;

include_once __DIR__.'\..\..\config\autoload.php';




class SiteClass
{
    protected $db;


    public function __construct ()
    {

        $this->db = new \classes\Db();

//        $Db = new \classes\Db();


        $site = new \models\index\SiteClass();
        $view = new \views\View();


        $view->assign ('index' , [0 => 'test' , 1 => 'jopa']);
        $view->display ('index');
        $view->render ('index');
    }

    public function getGallery() {

        $this->db;

        return false;
    }

    public function showGallery() {


        return false;
    }




}




