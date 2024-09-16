<?php
$boots = [
    [
        'name' => 'Stay TUNE',
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
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
