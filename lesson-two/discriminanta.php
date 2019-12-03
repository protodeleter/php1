<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 22.11.2019
 * Time: 11:32
 */
zend.assertions == 1;

function discriminanta( $a = false ,$b = false ,$c = false ) {

    // $a,$b,$c,$x

    $a;
    $b;
    $c;
    $x;
    $d; // discriminanta

    $x1;
    $x2;

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

    // formula
    // ax2 + bx + c = 0
    // $a * pow($x , 2) + $b*$x + $c = 0;
    //D = b2 − 4ac.

    $d = pow($b,2) - ( 4*$a*$c );

    if ($d > 0) {
     $x1 = ( (-$b) + sqrt($d) ) / 2*$a;
     $x2 = ( (-$b) - sqrt($d) ) / 2*$a;
     $x = 'вводные данные ' . $a . ' ' . $b . ' ' . $c . ' <br/> ' .'первый корень '. $x1 .'<br/> второй корень '. $x2. ' <br /> ' . 'дискриминант ' . $d . '<br/>';

    } else if ( $d == 0 ) {

//        echo $d . ' 2';

     $x = ( -$b ) / (2*$a);
     return 'вводные данные ' . $a . ' ' . $b . ' ' . $c . ' <br/> ' . 'единственный корень '.$x . '<br/> дискриминант ' . $d . '<br/>';

    } else {

//    echo $d . ' 3';

     return 'вводные данные ' . $a . ' ' . $b . ' ' . $c . ' <br/> ' . 'дискриминант ' . $d  .'<br/>'. ' корней нет' . '<br/>';

    }

 return $x;

}


echo discriminanta(1,-1,-90 );

echo '<br/>';
echo '<br/>';


echo discriminanta(1,12,36 );

echo '<br/>';
echo '<br/>';

echo discriminanta(3,4,10 );



