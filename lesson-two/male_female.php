<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 22.11.2019
 * Time: 16:42
 */

//error_reporting(E_ALL);
//ini_set("display_errors", 1);
zend.assertions == 1;
function get_human_gender( $gender = false ) {
    $gender = mb_convert_encoding($gender, 'UTF-8', 'auto');
    $found_last = mb_substr($gender, -1 );
    if ( $found_last == 'а' ) {
        return 'NULL';
    } else if( $found_last != 'а' ){
        return 'Male';
    } else {
        return 'null';
    }
}
get_human_gender( 'наташа' ) . '<br/>';
get_human_gender( 'Павел' ) . '<br/>';

assert ( 'NULL' === get_human_gender( 'наташа' ) );
assert ( 'Male' === get_human_gender( 'Павел' ) );


