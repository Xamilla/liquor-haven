<?php
$boots = [
    [
        'name' => 'Absolut Raspberri',
        'perPrice' => 1922.5,
        'perAvail' => 2,
        'image' => 'images/vodka-ptwo.jpg'
    ],
    [
        'name' => 'Imperial',
        'perPrice' => 11240,
        'perAvail' => 324,
        'image' => 'images/vodka-pone.jpg'
    ],
    [
        'name' => 'Gold Uzbekistan',
        'perPrice' => 4220,
        'perAvail' => 140,
        'image' => 'images/vodka-pthree.jpg'
    ],
    [
        'name' => 'Venaria din Vale',
        'perPrice' => 1200,
        'perAvail' => 897,
        'image' => 'images/vodka-pfour.jpg'
    ],
    [
        'name' => 'Glengrand',
        'perPrice' => 89724,
        'perAvail' => 5,
        'image' => 'images/vodka-pfive.jpg'
    ],
    [
        'name' => 'American Barrels',
        'perPrice' => 4500,
        'perAvail' => 1,
        'image' => 'images/vodka-psix.jpg'
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
