<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 15.12.2019
 * Time: 22:16
 */

class GuestBookRecord
{

    protected $message;

    public function __construct ( $message )
    {
        $this->message = $message;
    }

    public function getMessages() {
        return $this->message;
    }
}