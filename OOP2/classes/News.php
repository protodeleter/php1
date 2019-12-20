<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 18.12.2019
 * Time: 21:44
 */

class News
{

    protected $path;

    public function __construct ()
    {

    }

    public function getAllNews(){

        $this->path = __DIR__.'/../newsdb/';

        $newsArr = scandir ( $this->path );

        return $newsArr;
    }

    public function readAllNews() {

        $foundNews = $this->getAllNews ();


        $newsFiles = [];

        foreach ($foundNews as $fn) {

            if (is_file ($this->path . '/'.$fn)) {
                $newsFiles[] = file ( $this->path . '/'.$fn );
            }
        }

        return $newsFiles;

    }

}