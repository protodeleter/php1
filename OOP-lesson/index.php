<?php

require_once __DIR__. '/classes/GuestBook.php';


$gb = new GuestBook();

print_r($gb->getAllRecords());



//foreach (  as $bookRecord ) {
//    echo $bookRecord->;
//}
?>

<form action="add.php" method="post">
    <textarea name="newRecord">

    </textarea>

    <button type="submit"> Send </button>
</form>
