<?php
require_once __DIR__. '/../classes/View.php';

$data = $this->data;
print_r($datu);


//?>


<style>
    
    ul{}
    
    li {
        display: block;
        margin-bottom: 30px;
    }

</style>

<ul>

<?php foreach ( $data['news'] as $k => $datum ) {
    ?>
    <li>

        <h3>
            <?php echo $datum[1];?>
        </h3>

        <div>
            <?php echo $datum[2];?>
        </div>

        <a href="article.php?id=<?php echo $datum[0];?>"> <?php echo $datum[1];?> </a>
    </li>
<?php } ?>

</ul>

