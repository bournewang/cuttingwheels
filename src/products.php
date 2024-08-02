<?php
$title = 'Products - Jinmingwei New Material Technology Co., Ltd.';

ob_start();
include 'config.php';
include 'tpl/products-banner.php';
// include 'product-categories.php';
include "tpl/products-showcase.php";
$content = ob_get_clean();

include 'tpl/layout.php';
?>
