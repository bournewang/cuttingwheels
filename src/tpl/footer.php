<?php include __DIR__. "/../config.php";?>
<footer>
    Copyright © <?= $full_name ?> All Rights Reserved. <br>
    Tel: <?= $telphone ?> Email: <?= $email ?> Address: <?= $address ?>
    <div class="container">
        <!-- <ul class="footer-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="certifications.php">Certifications</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul> -->
        <!-- <div class="social-media">
            <a href="#"><img src="https://via.placeholder.com/24x24?text=LI" alt="LinkedIn"></a>
            <a href="#"><img src="https://via.placeholder.com/24x24?text=FB" alt="Facebook"></a>
        </div> -->
        <!-- <form class="newsletter">
            <label for="email">Subscribe to our newsletter:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
        </form> -->
    </div>
</footer>

<script>
        // main.js
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    hamburger.addEventListener('click', function () {
        navLinks.classList.toggle('nav-active');
    });
});

</script>

