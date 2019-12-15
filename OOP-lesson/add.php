<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 15.12.2019
 * Time: 22:42
 */

require_once __DIR__. '/classes/GuestBook.php';
require_once __DIR__. '/classes/GuestBookRecord.php';

$gb = new GuestBook();


if (isset( $_POST['newRecord'] ) ) {
    $record = new GuestBookRecord( $_POST['newRecord'] );
    $gb -> add ($record);
}

var_dump ($gb -> getAllRecords());
