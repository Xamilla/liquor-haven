<?php
$boots = [
    [
        'name' => 'Jack Daniel Set',
        'perPrice' => 50022,
        'perAvail' => 456,
        'image' => 'images/jackdanielgift.jpg'
    ],
    [
        'name' => 'Belvedere Set',
        'perPrice' => 34120,
        'perAvail' => 124,
        'image' => 'images/giftingtwo.jpg'
    ],
    [
        'name' => 'Glen Morant 1993 Set',
        'perPrice' => 52820,
        'perAvail' => 100,
        'image' => 'images/giftingthree.jpg'
    ],
    [
        'name' => 'Brandefyn Set',
        'perPrice' => 13000,
        'perAvail' => 897,
        'image' => 'images/giftingfour.jpg'
    ],
    [
        'name' => 'Dewards Set',
        'perPrice' => 33897,
        'perAvail' => 500,
        'image' => 'images/giftfives.jpg'
    ],
    [
        'name' => 'Tomatin',
        'perPrice' => 510000,
        'perAvail' => 5,
        'image' => 'images/giftingsix.jpg'
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
