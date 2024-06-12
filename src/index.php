<?php
$title = 'Home - Jinmingwei New Material Technology Co., Ltd.';

ob_start();

$products = [
    ["title" => "", ]
]
?>

<section class="banner">
    <div class="banner-content">
        <h1>Quality Grinding Wheels for Global Industries</h1>
        <p>Leading manufacturer of high-quality abrasives and grinding wheels</p>
        <a href="products.php" class="btn">Explore Our Products</a>
    </div>
</section>

<section class="introduction">
    <div class="container">
        <div class="text-image">
            <!-- <img src="/images/banner.jpg" alt="Factory Image"> -->
            <div class="text">
                <h2>Welcome to Zhengzhou Jinmingwei New Material Technology Co., Ltd.</h2>
                <p>With over 20 years of expertise, Zhengzhou Jinmingwei New Material Technology Co., Ltd. specializes in manufacturing high-quality abrasives and grinding wheels. Our advanced production equipment and technology, combined with comprehensive testing instruments and professional personnel, ensure the highest quality products.</p>
            </div>
        </div>
    </div>
</section>

<section class="product-showcase">
    <?php include "tpl/products-showcase.php"; ?>
</section>

<section class="certifications">
    <?php include "tpl/certificate.php";?>
</section>


<!-- <section class="market">
    <div class="container">
        <div class="text-image">
            <img src="https://images.unsplash.com/photo-1556741533-f6acd647a6a6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNjUyOXwwfDF8c2VhcmNofDd8fGdsb2JhbHxlbnwwfHx8fDE2MTIzMDQ2NzM&ixlib=rb-1.2.1&q=80&w=1080" alt="Global Market Image">
            <div class="text">
                <h2>Our Global Presence</h2>
                <p>Our products are trusted by clients worldwide, with a strong presence in Russia, Europe, the Middle East, and Southeast Asia. Read our <a href="market.php">customer testimonials</a> to learn more about our global reach.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="contact">
    <div class="container">
        <div class="text-image">
            <img src="https://images.unsplash.com/photo-1585399792111-c4fcd5b92fe2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNjUyOXwwfDF8c2VhcmNofDF8fGNvbnRhY3R8ZW58MHx8fHwxNjEyMzA0NzM3&ixlib=rb-1.2.1&q=80&w=1080" alt="Contact Image">
            <div class="text">
                <h2>Get in Touch</h2>
                <p>We are here to answer any questions you may have about our products and services. <a href="contact.php">Contact us</a> today to learn more.</p>
            </div>
        </div>
    </div>
</section> -->

<?php
$content = ob_get_clean();
include 'tpl/layout.php';
?>
