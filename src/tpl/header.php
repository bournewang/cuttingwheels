<?php include __DIR__ . "/../config.php";?>
<header>
    <div class="container">
        <!-- <img src="https://via.placeholder.com/150x60?text=Logo" alt="Jinmingwei Logo" class="logo"> -->
        <div class="logo">
            <a href="/"><?= $short_name;?></a>
        </div>
        <nav>
            <ul class="nav-links" id="navLinks">
                <li><a href="/">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="certifications.php">Certifications</a></li>
                <li><a href="market.php">Market</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>
</header>
