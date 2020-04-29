<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 22.11.2019
 * Time: 11:32
 */
zend.assertions == 1;



function discriminanta2( $a = false ,$b = false ,$c = false ) {

    assert( !is_int ($a) , '$a is not 1');


    $d = pow($b,2) - ( 4*$a*$c );
    if ( !$c ) {
        $c == 0;
    }


    if ( !$b ) {
        $a == 0;
    }
    if ( !$a ) {
        $a == 0;
    }
    if ( $a == 0 ) {
        return 'коэффициент "a" не может равняться нулю';
    }
    return $d;
}





echo 'дискриминанта = '. discriminanta2(1,e,-90 );


