<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 31.01.2020
 * Time: 18:54
 */


$data = $this->data;

if (isset($_POST) && !empty($_POST)){

    $album = new \controllers\AlbumsController();

$posted_data = [];
foreach ($_POST as $item) {
    $posted_data[] = $item;
}
    $album->insertAlbum ($posted_data);
}

?>


<form method="post" action="" >

    <input type="text" name="alb_name" placeholder="Album name">
    <textarea name="alb_desc" placeholder="Description"></textarea>
    <input type="date" name="alb_year" placeholder="Album Year">
    <input type="submit" value="send">

</form>

<ul>


<?php

  foreach( $data as $datum ) {
      foreach ($datum as $item ) { ?>
    <li>
        <h3> <?php echo $item['title']; ?> </h3>
        <p> <?php echo $item['description']; ?></p>
        <div>
            <?php echo $item['alb_year']; ?>
        </div>
    </li>

    <?php
      }
  }

?>


</ul>


