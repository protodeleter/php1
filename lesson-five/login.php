<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 01.12.2019
 * Time: 22:17
 */

session_start ();
include_once 'functions.php';




if ( isset($_POST) && !empty($_POST) ):

if ( isset( $_POST['username'] ) && !empty($_POST['username']) ) {
    $login = $_POST['username'];
} else {
    $login = null;
}

if ( isset( $_POST['password'] ) && !empty( $_POST['username'] ) ) {
    $password = $_POST['password'];
} else {
    $password = null;
}

if ( $login && !$password && !existsUser($login) ) {

    echo 'user doesnt exist';

} else {


    if (  сheckPassword( $login, $password )  ) {

        $_SESSION['user'] = $login;
        Header( 'Location: /lesson-five/main.php' );

    } else {
        echo 'Wrong Details';
    }

}




endif;

if ( !isset( $_SESSION['user'] ) ) { ?>

<form method="post" action="/lesson-five/login.php" >
    <input type="text" name="username" value="" placeholder="Username" />
    <input type="password" name="password" value="" placeholder="Password" />
    <input type="submit" value="Login" />
</form>

<?php } ?>