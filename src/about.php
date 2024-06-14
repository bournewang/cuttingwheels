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
        <div class="mission">
            <h2>Our Mission</h2>
            <p>To deliver superior quality products at competitive prices, ensuring customer satisfaction through exceptional service.</p>
        </div>
        <div class="vision">
            <h2>Our Vision</h2>
            <p>To be a globally recognized leader in the abrasives industry, known for innovation and excellence.</p>
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
