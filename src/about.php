<?php
$title = 'About Us - Jinmingwei New Material Technology Co., Ltd.';
include "config.php";
ob_start();
?>

<section class="about-us-banner">
    <div class="about-banner-content">
        <h1>About Us</h1>
        <p>Learn more about Zhengzhou Jinmingwei New Material Technology Co., Ltd.</p>
    </div>
</section>

<section class="company-overview">
    <div class="container">
        <div class="text-image">
            <!-- <img src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDR8fGZhY3Rvcnl8ZW58MHx8fHwxNjEyMzA0MjI5&ixlib=rb-1.2.1&q=80&w=1080" alt="Factory Image"> -->
            <div class="text">
                <h2>Our Company</h2>
                <p>Zhengzhou Jinmingwei New Material Technology Co., Ltd. is a leading manufacturer of abrasives and grinding wheels with over 20 years of experience. We are equipped with advanced production equipment and technology, and have a complete set of testing instruments and professional personnel to provide you with the highest quality products.</p>
            </div>
        </div>

        <div class="gallery">
            <?php foreach ($gallery as $url => $alt){ ?>
                <img src="/images/<?= $url ?>" alt="<?=$alt?>">
            <?php } ?>
        </div>
    </div>
</section>

<section class="mission-vision">
    <div class="container">
        <div class="text-image">
            <img src="/images/mission.jpg"/>
            <div class="text">
                <h2>Our Mission</h2>
                <p>At Jinmingwei, our mission is to deliver superior quality products at competitive prices, ensuring customer satisfaction through exceptional service. We strive to meet and exceed the expectations of our clients by providing cutting and grinding wheels that are durable, efficient, and reliable. Our commitment to quality is reflected in every stage of our production process, from sourcing the finest raw materials to employing advanced manufacturing techniques and rigorous quality control measures. We believe that excellent service is as important as top-notch products, and we are dedicated to building long-lasting relationships with our customers through responsive support, timely delivery, and continuous improvement.</p>
            </div>
        </div>
        <div class="text-image">
            <img src="/images/vision.jpg"/>
            <div class="text">
                <h2>Our Vision</h2>
                <p>Our vision at Jinmingwei is to be a globally recognized leader in the abrasives industry, known for innovation and excellence. We aim to set the standard for quality and performance in cutting and grinding solutions, pushing the boundaries of technology and design to create products that meet the evolving needs of our customers. We envision a future where Jinmingwei is synonymous with cutting-edge abrasives, trusted by professionals worldwide for their precision, durability, and superior performance. Through sustained innovation, strategic partnerships, and a relentless focus on excellence, we aspire to drive the industry forward and contribute to the success of our clients across the globe.</p>                
            </div>
        </div>
    </div>
</section>

<section class="team">
    <div class="container">
        <h2>Our Team</h2>
        <div class="team-members">
            <?php foreach ($team as $user) {?>
            <div class="team-member">
                <img src="<?= $user['avatar'] ?>" alt="Team Member 1">
                <h3><?= $user['name'] ?></h3>
                <p><?= $user['title'] ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include 'tpl/layout.php';
?>
