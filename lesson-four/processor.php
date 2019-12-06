<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 29.11.2019
 * Time: 11:33
 */
include_once 'functions.php';
include( 'class.upload.php' );

ob_start();

if ( isset( $_FILES ) && !empty( $_FILES ) ) {

    $upl = new Upload($_FILES);

}  else  {

    $file_recs = please_read_file( 'database.txt' );
    $db_file = get_data_file( $dir_scan );

//    print_r($db_file);

    //print_r($db_file);
    if ( isset( $_POST['record'] ) && !empty( $_POST['record'] )  ) {
        $record = $_POST['record'];
    }
    if ( $record ) {
      file_put_contents ( __DIR__.'/'.$db_file , $record ."\r\n", FILE_APPEND );
    }

}

ob_get_clean ();

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
