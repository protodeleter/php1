<?php
require_once __DIR__. '/../classes/View.php';

$data = $this->data;

//print_r($data);

//?>


<style>
    
    ul{}
    
    li {
        display: block;
        margin-bottom: 30px;
    }

</style>

<ul>

<?php foreach ( $data['news'] as $k => $new ) {

//    print_r($new);

    ?>
    <li>

        <h3>
            <?php echo $new[1];?>
        </h3>

        <div>
            <?php echo $new[2];?>
        </div>

        <a href="article.php?id=<?php echo $new[0];?>"> <?php echo $new[1];?> </a>
    </li>
<?php } ?>

</ul>

