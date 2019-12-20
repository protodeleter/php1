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


        $cur_art = [];

        foreach ( $this->readAllNews() as $k => $v ) {



            if ( $v[0] = $this->art_id ) {

                print_r( $this->readAllNews()[$k][0] );

                return $v[0] . '<br />';
            }

        }

        return false;

    }


}