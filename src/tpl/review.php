<div class="review-card">
    <div class="review-header">
        <span class="reviewer-name"><?= htmlspecialchars($review['name']) ?></span>
        <div class="rating">
            <?php 
            for ($i = 0; $i < $review['rate']; $i++) {
                echo '★';
            }
            for ($i = $review['rate']; $i < 5; $i++) {
                echo '☆';
            }
            ?>
        </div>
    </div>
    <p class="review-text">"<?= htmlspecialchars($review['review']) ?>"</p>
</div>

<style>
    .review-card {
        background: #f8f8f8;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .review-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    .reviewer-name {
        font-weight: bold;
        color: #333;
    }
    .rating {
        color: #e74c3c;
    }
    .review-text {
        color: #666;
        line-height: 1.6;
    }
</style> 