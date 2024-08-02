<div class="container">
        <h2>Product Showcase</h2>
        <div class="product-grid">
            <?php foreach ($products as $i => $product){ ?>
            <div class="product-item">
                <a href="/product-<?= $i ?>.php"><img src="/images/<?= $product['image'] ?>" alt="Product 1"></a>
                <h3><?= $product['series']?></h3>
                <!-- <p><?= $product['description'] ?></p> -->
            </div>
            <?php } ?>
        </div>
    </div>