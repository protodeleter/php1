<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 02.02.2020
 * Time: 22:34
 */


spl_autoload_register ( function ( $class ) {

echo $class;

    if ( is_file ( __DIR__. '/../' . str_replace ('\\' , '/' , $class . '.php' ) ) ){
        require_once __DIR__. '/../' . str_replace ('\\' , '/' , $class . '.php' );
    }

} );