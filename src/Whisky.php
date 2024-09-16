<?php
$boots = [
    [
        'name' => 'Hibiki',
        'perPrice' => 922.5,
        'perAvail' => 456,
        'image' => 'images/whiskyone.jpg'
    ],
    [
        'name' => 'Basil Haydens',
        'perPrice' => 120,
        'perAvail' => 124,
        'image' => 'images/whiskytwo.jpg'
    ],
    [
        'name' => 'Hennessy',
        'perPrice' => 5820,
        'perAvail' => 100,
        'image' => 'images/whiskythree.jpg'
    ],
    [
        'name' => 'Guinness',
        'perPrice' => 1000,
        'perAvail' => 897,
        'image' => 'images/whiskyfour.jpg'
    ],
    [
        'name' => 'Millesime',
        'perPrice' => 897,
        'perAvail' => 500,
        'image' => 'images/whiskyfive.jpg'
    ],
    [
        'name' => 'Eminente',
        'perPrice' => 4502,
        'perAvail' => 5,
        'image' => 'images/whiskysix.jpg'
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
