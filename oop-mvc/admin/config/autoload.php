<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 31.01.2020
 * Time: 18:49
 */


spl_autoload_register(
    function( $class ) {

        echo $class.'<br/>';

        require_once __DIR__ . '/../' . str_replace ('\\' , '/' , $class ) .'.php';
    }
);