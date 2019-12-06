<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 06.12.2019
 * Time: 11:49
 */

const GB = __DIR__."/guestbook.txt" ;


class TextFile {
    public $text;


}

class GuestBook extends TextFile
{

    protected $read_book;
    public $text;

    public function __construct ()
    {

        $this->read_book = file ( GB , true );

    }

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

        $new_arr = $this->append ();

        foreach ( $new_arr as $item) {
            file_put_contents ( GB , $item ."\r\n", FILE_APPEND );
        }


    }


}

$gb = new GuestBook();

$gb->text = 'new test';
$gb -> append();
$gb -> save();

$gb->text = 'new test 2';
$gb -> append();
$gb -> save();

