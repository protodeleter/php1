<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 01.12.2019
 * Time: 22:17
 */

session_start ();
include_once 'functions.php';


if ( $_POST ):

if ( isset( $_POST['username'] ) && !empty($_POST['username']) ) {
    $login = $_POST['username'];
} else {
    $login = '';
}

if ( isset( $_POST['password'] ) && !empty( $_POST['username'] ) ) {
    $password = $_POST['password'];
} else {
    $password = '';
}



if ( $login != '' && !existsUser($login) ) {

    echo 'user doesn"t exist';

} else {

    if (  сheckPassword( $login, $password ) ) {

        $_SESSION['user'] = $login;

    } else {

        echo 'Details wrong';

    }

}

endif;


if ( isset( $_SESSION['user'] ) ) {

    Header( 'Location: /lesson-five/index.php' );

} else { ?>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
    <input type="text" name="username" value="" placeholder="Username" />
    <input type="password" name="password" value="" placeholder="Password" />
    <input type="submit" value="Login" />
</form>

<?php } ?>