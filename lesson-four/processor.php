<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 29.11.2019
 * Time: 11:33
 */
include_once 'functions.php';

if ( isset( $_FILES ) && !empty( $_FILES ) ) {

        move_uploaded_file( $_FILES['img_upl']['tmp_name'], __DIR__.'/gallery/' . $_FILES['img_upl']['name'] );

}  else  {

    $file_recs = please_read_file( 'database.txt' );
    $db_file = get_data_file( $dir_scan );


    if ( isset( $_POST['record'] ) && !empty( $_POST['record'] )  ) {
        $record = $_POST['record'];
    }


    if ( $record ) {
      file_put_contents ( __DIR__.'/'.$db_file , $record ."\r\n", FILE_APPEND );
    }

}


header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
