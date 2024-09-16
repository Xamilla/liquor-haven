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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Tan Barola</title>
    <link href="css/style.css" media="screen" rel="stylesheet" content="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
            <!-- header -->
             <div id="header">
                <?php
                    include 'header.php';
                    $page = isset($_GET['page']) ? $_GET['page'] : 'content';

					if($page== 'vodka'){
                        include 'Vodka.php';
                    }elseif($page== 'gin'){
                        include 'Gin.php';
                    }elseif ($page == 'sujo') {
						include "Sujo.php";
					} elseif ($page == 'whisky') {
						include 'Whisky.php';
					} elseif ($page == 'gifting') {
						include 'gifting.php';
					}elseif($page == 'promo'){
						include 'promo.php';
					}else{ 
						include "content.php";
					}
                ?>
             </div>
             <div>
                <?php
                    include 'footer.php';
                ?>
             </div>
</body>
</html>