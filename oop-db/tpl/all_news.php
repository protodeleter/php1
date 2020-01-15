<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 10.01.2020
 * Time: 18:11
 */

include_once __DIR__.'/../classes/View.php';

$data = $this->data;

//print_r($data);
?>

<style>
    .all_news {}

    .all_news .new{
        margin-bottom: 30px;
    }

</style>
<div class="all_news">

<?php foreach ($data['all_news'] as $datum) { ?>

        <div class="new">
            <?php foreach ($datum as $item) { ?>
                <div><?php echo $item['title']; ?></div>
                <div><?php echo $item['author']; ?></div>
                <div> <a href="article.php?id=<?php echo $item['id']; ?>"> <?php echo $item['title']; ?> </a> </div>

            <?php } ?>
        </div>

<?php } ?>

</div>