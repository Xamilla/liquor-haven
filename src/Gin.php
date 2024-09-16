<?php
$boots = [
    [
        'name' => 'Jaisalmer',
        'perPrice' => 922.5,
        'perAvail' => 456,
        'image' => 'images/ginone.jpg'
    ],
    [
        'name' => 'WoodLu',
        'perPrice' => 120,
        'perAvail' => 124,
        'image' => 'images/gintwo.jpg'
    ],
    [
        'name' => 'Grey Gin',
        'perPrice' => 5820,
        'perAvail' => 100,
        'image' => 'images/ginthree.jpg'
    ],
    [
        'name' => 'Casa Lagartos',
        'perPrice' => 1000,
        'perAvail' => 897,
        'image' => 'images/ginfour.jpg'
    ],
    [
        'name' => 'Blackland Gin',
        'perPrice' => 897,
        'perAvail' => 500,
        'image' => 'images/ginfive.jpg'
    ],
    [
        'name' => 'Buigur',
        'perPrice' => 4502,
        'perAvail' => 5,
        'image' => 'images/GInsix.jpg'
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
