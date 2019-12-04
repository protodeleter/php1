<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 01.12.2019
 * Time: 22:16
 */
session_start ();

function getUsersList() {
    $u_list = include ('users.php');
    return $u_list;
}

function existsUser($login) {
    $u_list = getUsersList();
    foreach ($u_list as $k => $u) {
        if ( in_array ( $login,$u ) ) {
            return true;
        }
    }
    return false;
}

function сheckPassword($login, $password) {

    $u_list = getUsersList();

    foreach ($u_list as $k => $u) {

        if ( $login === $u['username']  &&  password_verify ( $password, $u['password']  ) ) {
//            $_SESSION['user'] = $login;
            return true;
        }

    }

    return false;
}



function getCurrentUser() {

}



