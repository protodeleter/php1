<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 09.02.2020
 * Time: 0:21
 */

namespace models;


class Albums
{

    public function getAlbums(){
        $db = new \classes\Db();
        $sql = 'SELECT * FROM albums';
        $dd = $db->execute($sql);
        return $dd;
    }

    public function insertAlbumsToDb($data) {
        if( !empty($data) ){

            print_r($data);

            $db = new \classes\Db();
            $sql = "INSERT INTO albums ( title, description, alb_year ) VALUES ( ?,?,? )";
            $db->query ($sql , $data);
        }
    }

//    public function updateAlbum($data) {
//        $db = new \classes\Db();
//        $rr = $_POST;
//        $data = [];
//
//        foreach ( $rr as $k => $item) {
//            $data[] = $item;
//        }
//
//        $sql = "UPDATE users SET title=?, description=?, alb_year=? WHERE id=?";
//
//        $db->query ($sql , $data);
//
//    }

}