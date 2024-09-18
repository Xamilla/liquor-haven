                <!-- view index for the content.viewtwo.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Tan Barola</title>
    <link href="css/styletwo.css" media="screen" rel="stylesheet" content="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
            <!-- header -->
             <div id="header">
                <?php
                    include 'header.php';
                    $page = isset($_GET['page']) ? $_GET['page'] : 'content.viewtwo.php';

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
						include "content.viewtwo.php";
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