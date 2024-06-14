<?php
$title = 'Contact Us - Jinmingwei New Material Technology Co., Ltd.';

ob_start();
include __DIR__."/config.php";
?>

<section class="contact-banner">
    <div class="contact-banner-content">
        <h1>Contact Us</h1>
        <p>We are here to assist you</p>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="text-image" >
            <!-- <img src="/images/contact.jpg" alt="Contact Image"> -->
            <div class="text">
                <h2>Get in Touch</h2>
                <p>We are here to answer any questions you may have about our products and services. Contact us today to learn more.</p>
                <ul class="contact-info">
                    <li><strong>Address:</strong> <?= $address ?></li>
                    <li><strong>Email:</strong> <a href="mailto:<?= $email ?>"><?= $email ?></a></li>
                    <li><strong>Phone:</strong> <?= $telphone ?></li>
                </ul>
            </div>
        </div>
        <!-- <form class="contact-form">
            <h2>Contact Form</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Send Message</button>
        </form> -->
    </div>
</section>


<?php
$content = ob_get_clean();
include 'tpl/layout.php';
?>