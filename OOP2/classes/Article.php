<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 18.12.2019
 * Time: 21:44
 */

require_once __DIR__.'/news.php';

class Article extends News
{

    protected $art_id;

    public function __construct( $aId ) {
        $this->art_id = $aId;
        return $aId;
    }

    public function getArticle() {

        $allArts = $this->explodeNews ();

        $result = [];

        foreach ( $allArts as $k => $datum ) {

            if ( $allArts[$k][0] == $this->art_id ) {
                $result[] .= $datum[1];
                $result[] .= $datum[3];
            }

        }

        return $result;
    }


}