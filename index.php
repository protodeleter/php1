<?php
header('Content-Type: text/html; charset=utf-8');

$dirs = scandir (__DIR__);

//print_r($dirs);


foreach ($dirs as $dir) {
    if ( is_dir ($dir) ) {

       $dir = str_replace (' ' , '' , $dir);


?>

        <a href="<?php echo urlencode($dir); ?>"> <?php echo $dir; ?>  </a> <br/>

<?php
    } else {
        echo 'not dir';
    }
}
