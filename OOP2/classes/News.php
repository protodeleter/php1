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

    protected function it_is_file( $fileName ) {
        if ( is_file ($this->path . '/'.$fileName) ) {
            return true;
        }
        return false;
    }

    protected function readAllNews() {
        $foundNews = $this->findNews ();
        $newsFiles = '';

        foreach ($foundNews as $fn) {
            if ( $this->it_is_file($fn)) {
                $newsFiles = file ( $this->path . '/'.$fn,FILE_IGNORE_NEW_LINES );
            }
        }
        return $newsFiles;
    }

    /**
     * @return mixed
     */
    protected function explodeNews ()
    {
        $receivedNews = $this->readAllNews();
        $rnArr = [];
        foreach ($receivedNews as $receivedNew) {
            $rnArr[] = explode ('~' , $receivedNew );
        }
        // print_r($receivedNews);
        return $rnArr;
    }


    public function getAllNews() {
        return $this->explodeNews ();
    }

}