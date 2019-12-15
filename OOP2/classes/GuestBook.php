<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 06.12.2019
 * Time: 11:49
 */

//file_put_contents(GB, "");


class TextFile {
    public $text;


    public function getData() {

        $rr = $this ->read_book;
        return $rr;
    }

    public function append() {

        $rrr = $this->getData ();
        array_push ($rrr ,$this->text);

        return $rrr;
    }

    public function save() {

        $new_arr=[];

        $new_arr = $this->append ();

//        print_r($new_arr);

        $str = implode("", $new_arr);

//        print_r($str);

        file_put_contents ( GB , $str."\n" );

    }

}

class GuestBook extends TextFile
{

    protected $read_book;

    public function __construct ($ifle)
    {

        $this->read_book = file ( $ifle , true , FILE_IGNORE_NEW_LINES);

    }


}

