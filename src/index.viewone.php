                <!-- view index for the content.viewone.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Tan Barola</title>
    <link href="css/styleone.css" media="screen" rel="stylesheet" content="text/css">
    <script src="JS/jscript.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
                    <div id="header">
                <?php
                    include 'header.php';
                    if(isset($_GET['page'])){
                        $page= $_GET['page'];
                        if($page == 'vodka'){
                            include "Vodka.php";
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
                        }elseif($page == 'login'){ 
                            include "loginuser.php";
                        }else{ 
                            include "content.viewtwo.php";
                        }
                    }
                        else{
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