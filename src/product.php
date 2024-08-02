<?php
$title = 'Market - Jinmingwei New Material Technology Co., Ltd.';

ob_start();
include 'tpl/products-banner.php';
?>

<div class="container">
        <div class="product-detail">
            <!-- Product Image -->
            <div class="product-image">
                <img class="responsive-img" src="images/<?= $product['image']?>" alt="<?= $product['series']?>">
                <h2 style="color: #e74c3c">Contact Us Now: </h2>
                <h2><?= $telphone ?></h2>

            </div>

            <!-- Product Information -->
            <div class="product-info">
                <!-- <h2><?= $product['series']?></h2> -->
                <!-- <p class="price">¥80</p> -->
                <p class="description">
                    <?= $product['description']?>
                </p>
                <p style="font-weight: bold;">Product quality and color can be customized.</p>
                <h2 class="f-bold">Specification : </h2>
                <ul class="specifications">
                    <?php foreach ($product['spec'] as $spec) {?>
                    <li><strong></strong> <?= $spec ?></li>
                    <?php } ?>
                </ul>
                <!-- <div class="purchase-options">
                    <button class="buy-now">Buy Now</button>
                    <button class="add-to-cart">Add to Cart</button>
                </div> -->
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
include 'tpl/layout.php';
?>
