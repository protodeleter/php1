<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 06.12.2019
 * Time: 16:54
 */

class Uploader
{

    public $fileee;

    public function __construct ( $file )
    {
        $this->fileee = $file;
    }

    public function isUploaded() {

        if ( is_uploaded_file ( $_FILES['file_upl']['tmp_name'] ) ) {
            return true;
        }

        return false;
    }

    public function upload() {

        if ( $this->isUploaded()) {

            move_uploaded_file( $this->fileee['tmp_name'], __DIR__.'/uploads/' . $this->fileee['name'] );

        }

    }
}