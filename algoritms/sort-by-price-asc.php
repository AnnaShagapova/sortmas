<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сортировка по цене по возрастанию</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
    <div class="container">
    <h1 class="catalog"><b>Каталог</b></h1>
    <div class="cards">
       
    <?php
        require('../data.php');
        function compare($x, $y){
            if ($x ["price"] == $y["price"]) return 0;
            if ($x["price"] < $y["price"]) return -1;
            else return 1;
        }
        usort($products, "compare");
        for($i=0; $i < count($products); $i++){
                $t = $products[$i]["title"];
                $p = $products[$i]["price"];
                $path = $products[$i]["img_path"];

                echo " <div class='card_item'>
                <img class='card_img' src='$path' alt='' >
                <p class='card_title'>$t</p>
                <p class='card_price'>$p &#8381;</p>
                </div>"; 
            }
    ?>
    </div>
    </div>
</body>
</html>