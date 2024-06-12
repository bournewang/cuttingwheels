<?php
$title = 'Certifications - Jinmingwei New Material Technology Co., Ltd.';

ob_start();
?>

<section class="certifications-banner">
    <div class="certifications-banner-content">
        <h1>Certifications</h1>
        <p>Our commitment to quality is recognized worldwide</p>
    </div>
</section>

<section class="certifications">
    <?php include "tpl/certificate.php";?>
</section>

<?php
$content = ob_get_clean();
include 'tpl/layout.php';
?>
