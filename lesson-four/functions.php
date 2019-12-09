<?php
//
// Scanning dir for files;
// filtering only txt file
//

$dir_scan = scandir (__DIR__);
$gal_dir = scandir (__DIR__.'/gallery');

//print_r($gal_dir);

function get_data_file( $dir_parameter ) {

    foreach ($dir_parameter as $d_f) {
        if ( is_file (__DIR__ . '/' . $d_f ) && is_readable(__DIR__ . '/' . $d_f) && file_exists (__DIR__ . '/' . $d_f) )
        {
            $path_parts = pathinfo(__DIR__ . '/' . $d_f);
            if ( $path_parts['extension'] == 'txt' ) {
                return $d_f;
            }
        }
    }
    return;
}

// getting txt file
$db_file = get_data_file( $dir_scan );



function get_gallery_files( $dir_parameter ) {

    $img_arr = [];

    foreach ($dir_parameter as $d_f) {

        if ( is_file ( __DIR__.'/gallery/' . $d_f ) ) {
            $img_arr[]  = $d_f;
        }


    }

    return $img_arr;
}






// reading file from function get_data_file( $dir_scan )
// and returning and array of text found in this file
function please_read_file( $db_file ) {

    if ( is_file (__DIR__ . '/' . $db_file ) && is_readable(__DIR__ . '/' . $db_file) && file_exists (__DIR__ . '/' . $db_file) )
    {
        $file = file (__DIR__. '/' . $db_file );
    } else {
        echo 'error';
    }

    // print_r($file);
    return $file;
}
