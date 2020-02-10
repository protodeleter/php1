<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 04.12.2019
 * Time: 22:27
 */

session_start ();

unset( $_SESSION['user'] );

Header( 'Location: /lesson-five/main.php' );
