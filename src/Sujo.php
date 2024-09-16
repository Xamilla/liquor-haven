<?php
$boots = [
    [
        'name' => 'Arki Soju',
        'perPrice' => 922.5,
        'perAvail' => 456,
        'image' => 'images/sujoone.jpg'
    ],
    [
        'name' => 'Daesun Soju',
        'perPrice' => 120,
        'perAvail' => 124,
        'image' => 'images/sujotwo.jpg'
    ],
    [
        'name' => 'Tokki Soju',
        'perPrice' => 5820,
        'perAvail' => 100,
        'image' => 'images/sujothree.jpg'
    ],
    [
        'name' => 'Won Soju',
        'perPrice' => 1000,
        'perAvail' => 897,
        'image' => 'images/sujofour.jpg'
    ],
    [
        'name' => 'Lemon Soju',
        'perPrice' => 897,
        'perAvail' => 500,
        'image' => 'images/sujofive.jpg'
    ],
    [
        'name' => 'MELONA SOJU',
        'perPrice' => 4502,
        'perAvail' => 5,
        'image' => 'images/sujosix.jpg'
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
