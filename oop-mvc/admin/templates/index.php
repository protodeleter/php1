<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 31.01.2020
 * Time: 18:54
 */


if( isset( $_POST ) && !empty( $_POST ) ) {

        $album = new \controllers\AlbumsController();
        $album->insertAlbum ();

        print_r( $_POST );

    die;
}

include_once __DIR__.'/layout/header.php';
$data = $this->data;
?>

<form method="post" action="" id="alb_insert">
    <div class="form-group">
        <input type="text" class="form-control" name="alb_name" placeholder="Album name">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="alb_desc" placeholder="Description"></textarea>
    </div>
    <div class="form-group">
        <input type="date" class="form-control" name="alb_year" placeholder="Album Year">
    </div>

    <input type="submit" class="btn btn-primary"  value="send">
</form>

<ul id="albums">
<?php
  foreach( $data as $datum ) {
      foreach ($datum as $item ) { ?>
    <li>
        <h3> <?php echo $item['title']; ?> </h3>
        <p> <?php echo $item['description']; ?></p>
        <div>
            <?php echo $item['alb_year']; ?>
        </div>
        <input type="text" class="form-control" value="<?php echo $item['title']; ?>" name="upd_alb_name">
        <textarea class="form-control" name="upd_alb_text">
            <?php echo $item['description']; ?>
        </textarea>

        <a href="#" data-id="<?php echo $item['id']; ?>"> Delete Record </a>

    </li>
    <?php
      }
  }
?>
</ul>


<?php include_once __DIR__.'/layout/footer.php'; ?>

