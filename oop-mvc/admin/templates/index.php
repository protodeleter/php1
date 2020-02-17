<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 31.01.2020
 * Time: 18:54
 */

include_once __DIR__.'/layout/header.php';

if( isset( $_POST ) && !empty( $_POST ) ) {

    $album = new \controllers\AlbumsController();

    $posted_data = [];

    foreach ($_POST as $item) {
        $posted_data[] = $item;
    }

    print_r ($_POST);

    $album->insertAlbum ( $posted_data );

}


$data = $this->data;
?>

<form method="post" action="services/formProcessor.php" id="insert">

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


<?php include_once __DIR__.'/layout/footer.php'; ?>

<script>

    $(document).ready(function(){

        $("form").submit(function(e){
            e.preventDefault();

            var albName = $( 'input[name="alb_name"]' ).val();
            var albDesc = $( 'textarea[name="alb_desc"]' ).val();
            var albYear = $( 'input[name="alb_year"]' ).val();


            $.ajax({
                url:'',
                type:'post',
                data:{albName:albName,albDesc:albDesc,albYear:albYear},
                success:function(response){
                    location.reload(); // reloading page
                }
            });

        });
    });

</script>
