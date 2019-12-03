<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 01.12.2019
 * Time: 22:16
 */


function getUsersList() {
    $u_list = include ('users.php');
    return $u_list;
}

function existsUser($login) {
    $usernames = [];
    $pass_arr = [];

    $u_list = getUsersList();

    foreach ($u_list as $k => $u) {

        print_r($u_list[$k]);

//        if ( in_array($login, $u_list[$k] ) ) {
//
//            echo 'true';
//
//        }

//        $usernames[] = $u['username'];
//        $pass_arr[] = $u['password'];

    }

    if ( in_array($login, $usernames ) ) {
        return true;
    } else {
        return false;
    }
}

existsUser('Andrey');

function сheckPassword($login, $password) {

    if ( (bool)existsUser( $login ) ) {
        echo 'true';
    } else {
        echo 'false';
    }

    if ( password_verify ( 123123, '$2y$10$HlqFOeuhN2GfcqZ8tHIihumh.y048S64YjSIRMSaZoT0Juysg/toy' ) ) {
        echo 'p true';
    } else {
        echo 'p false';
    }

    return true;
}

//сheckPassword( 'Pavel', 123123 );


function getCurrentUser() {

}

