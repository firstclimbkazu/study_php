<?php
/**
 * Created by PhpStorm.
 * User: machida
 * Date: 2017/05/01
 * Time: 18:05
 */

$sales = [
    "machi" => 200,
    "test" => 800,
    "dot" => 600,
];

/*
foreach ($sales as $key => $value) {
    echo "($key) $value ";
}
*/

$colors = ["red","blue","pink"];
foreach($colors as $value) :
    echo "$value ";
endforeach;

?>

<ul>
    <?php foreach($colors as $value) : ?>
    <li><?php echo "$value "; ?></li>
    <?php endforeach; ?>
</ul>
