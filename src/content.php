<?php
$boots = [
    [
        'name' => 'Vodka',
        'perPrice' => 922.5,
        'perAvail' => 456,
        'image' => 'images/vodka-model.jpg'
    ],
    [
        'name' => 'Gin',
        'perPrice' => 120,
        'perAvail' => 124,
        'image' => 'images/gin-model.jpg'
    ],
    [
        'name' => 'Sujo',
        'perPrice' => 5820,
        'perAvail' => 100,
        'image' => 'images/sujo.jpg'
    ],
    [
        'name' => 'Whisky',
        'perPrice' => 1000,
        'perAvail' => 897,
        'image' => 'images/whisky-model.jpg'
    ],
    [
        'name' => 'Gifts',
        'perPrice' => 897,
        'perAvail' => 500,
        'image' => 'images/jackdanielgift.jpg'
    ],
    [
        'name' => 'PromoDeals',
        'perPrice' => 0,
        'perAvail' => 5,
        'image' => 'images/comingsoon.jpg'
    ],
];
?>
<div class='content'>
    <div id="product-container">
        <?php foreach ($boots as $boot) : ?>
            <div class="product-item">
                <img src="<?= $boot['image']; ?>" alt="<?= htmlspecialchars($boot['name']); ?>" />
                <div class="product-details">
                    <p class="product-name"><?= htmlspecialchars($boot['name']); ?></p>
                    <p class="product-info">Price: <?= number_format($boot['perPrice'], 2) ?><br>Available: <?= $boot['perAvail'] ?></p>
                    <button class="shop-button">Shop Now</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
