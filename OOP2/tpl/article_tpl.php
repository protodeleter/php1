<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 20.12.2019
 * Time: 16:38
 */
require_once __DIR__. '/../classes/View.php';
$data = $this->data;
?>

<h1> <?php echo $data['article'][0]; ?> </h1>
<p> <?php echo $data['article'][1]; ?> </p>
