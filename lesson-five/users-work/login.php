<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 01.12.2019
 * Time: 22:17
 */

include_once 'functions.php';

if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {

    $login = $_POST['username'];
    $password = $_POST['password'];

}

//сheckPassword($login, $password);