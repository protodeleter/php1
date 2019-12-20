<?php
require_once __DIR__. '/../classes/View.php';

$data = $this->data;

print_r($data);

//?>


<style>
    
    ul{}
    
    li {
        display: block;
        margin-bottom: 30px;
    }

</style>

<ul>

<?php
foreach ( $data as $k => $datum ) { ?>
    <?php
    foreach( $data[$k] as $kk => $newsItem ) { ?>
    <li>
        <h3> <?php echo $newsItem[1].'<br />'; ?> </h3>
        <?php echo $newsItem[2].'<br />'; ?>
        <a href="article.php?id=<?php echo $newsItem[0]; ?>"> <?php echo $newsItem[1]; ?> </a>
    </li>

    <?php } ?>

<?php } ?>

</ul>

