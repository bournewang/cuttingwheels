<?php
$title = 'Market - Jinmingwei New Material Technology Co., Ltd.';

ob_start();
?>

<section class="market-banner">
    <div class="market-banner-content">
        <h1>Our Market</h1>
        <p>Global reach with strong presence in multiple regions</p>
    </div>
</section>

<section class="market">
    <div class="container">
        <div class="text-image">
            <img src="/images/cutting.jpg" alt="Global Market Image" width="10em">
            <div class="text">
                <h2>Our Global Presence</h2>
                <p>Our products are trusted by clients worldwide, with a strong presence in Russia, Europe, the Middle East, and Southeast Asia. Read our customer testimonials to learn more about our global reach.</p>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include 'tpl/layout.php';
?>
