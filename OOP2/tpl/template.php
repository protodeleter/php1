<?php

require_once __DIR__. '/../classes/View.php';

$data = $this->data;


foreach ( $data as $datum ) {
//    print_r($datum);

    foreach ($datum as $d) {
        echo $d . '<br/>';
    }
}

?>
