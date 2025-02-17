    <!-- Reviews Section -->
    <div class="container">
        <div class="product-reviews">
            <h2>Customer Reviews</h2>
            <div class="reviews-grid">
                <?php
                $reviews = [
                    [
                        "name" => "John Smith",
                        "rate" => 5,
                        "review" => "Excellent cutting wheel! The durability is outstanding and it performs exceptionally well on various materials."
                    ],
                    [
                        "name" => "Maria Garcia",
                        "rate" => 5,
                        "review" => "Very satisfied with the product quality. The cutting precision is remarkable and it lasts longer than other brands."
                    ],
                    [
                        "name" => "David Chen",
                        "rate" => 4,
                        "review" => "Great product! The customization options were exactly what we needed for our specific applications."
                    ]
                ];

                foreach ($reviews as $review) {
                    include 'tpl/review.php';
                }
                ?>
            </div>
        </div>
    </div>

    <style>
        .product-reviews {
            padding: 40px 0;
        }
        .product-reviews h2 {
            margin-bottom: 30px;
            color: #333;
        }
        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
    </style>
