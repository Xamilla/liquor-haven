<?php
$boots = [
    [
        'name' => 'Vodka',
        'alcohol Percentage' => '26.7%',
        'perPrice' => 500,
        'perAvail' => 6,
        'image' => 'images/vodka-model.jpg'
    ],
    [
        'name' => 'OFF-HIGH SHIRT',
        'perPrice' => 9070,
        'perAvail' => 5,
        'image' => 'images/gin-model.jpg'
    ],
    [
        'name' => 'OFF-HIGH SHIRT',
        'perPrice' => 12250,
        'perAvail' => 10,
        'image' => 'images/sujo.jpg'
    ],
    [
        'name' => 'OFF-HIGH SHIRT',
        'perPrice' => 10123,
        'perAvail' => 7,
        'image' => 'images/whisky.jpg'
    ],
    [
        'name' => 'OFF-HIGH SHIRT',
        'perPrice' => 10123,
        'perAvail' => 7,
        'image' => 'images/jackdanielgift.jpg'
    ],
    [
        'name' => 'OFF-HIGH SHIRT',
        'perPrice' => 800,
        'perAvail' => 5,
        'image' => 'images/comingsoon.jpg'
    ],
];
?>

<div id="product-container">
    <?php foreach ($boots as $boot) : ?>
        <div class="product-item">
            <div class="display-model">
                <img src="<?= $boot['image']; ?>" alt="<?= htmlspecialchars($boot['name']); ?>" /> <!-- Added alt attribute for accessibility -->
                <div class="overlay"> <!-- Ensure the overlay is in the correct place -->
                    <p class="product-name"><?= htmlspecialchars($boot['name']); ?></p>
                    <button class="buy-button">Available: <?= $boot['perAvail'] ?></button>
                    <button class="buy-button">Price: <?= $boot['perPrice'] ?></button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
