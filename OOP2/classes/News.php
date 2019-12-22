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

    public function findNews(){

        $this->path = __DIR__.'/../newsdb/';

        $newsArr = scandir ( $this->path );

        return $newsArr;
    }

    public function readAllNews() {
        $foundNews = $this->findNews ();
        $newsFiles = '';

        foreach ($foundNews as $fn) {
            if (is_file ($this->path . '/'.$fn)) {
                $newsFiles = file ( $this->path . '/'.$fn,FILE_IGNORE_NEW_LINES );
            }
        }
        return $newsFiles;
    }

    /**
     * @return mixed
     */
    public function explodeNews ()
    {
        $receivedNews = $this->readAllNews();

        $rnArr = [];

        foreach ($receivedNews as $receivedNew) {
            $rnArr[] = explode ('~' , $receivedNew );
        }

        return $rnArr;
    }


}