<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 15.12.2019
 * Time: 22:16
 */

require_once __DIR__.'/GuestBookRecord.php';

class GuestBook
{

    protected $data = [];

    public function __construct ()
    {

        $this-> data = $this->load();

    }

    protected function load() {

        $data = file(__DIR__. '/../db.txt', FILE_IGNORE_NEW_LINES);


        $ret = [];

        foreach ( $data as $datum ) {

            $ret[] = new GuestBookRecord( $datum );

        }


        return $ret;
    }

    public function getAllRecords() {
        return $this -> data;

    }

    public function add( GuestBookRecord $record ) {


        $this->data[] = $record;


    }


}