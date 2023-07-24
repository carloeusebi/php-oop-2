<?php

require_once __DIR__ . '/utils/functions.php';

require_once __DIR__ . '/db/MockDatabase.php';

require_once __DIR__ . '/models/BaseProduct.php';
require_once __DIR__ . '/models/AccessoriesProduct.php';
require_once __DIR__ . '/models/FoodProduct.php';
require_once __DIR__ . '/models/ToyProduct.php';

/**
 * @var BaseProduct[]
 */
$products = require_once __DIR__ . '/controllers/products_controller.php';

/**
 * @var FoodProduct
 */
$my_test_card = $products[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous'>
    <link rel='stylesheet' href="resources/css/styles.css" type="text/css">

</head>

<body>

    <header>
        <h1 class="text-center">Our Products</h1>
    </header>

    <div class=" container">
        <main>
            <div class="row row-cols-3 my-5 products-container">
                <div class="col">
                    <div class="my-card">
                        <img class="img-fluid" src="<?= $my_test_card->getImgUrl() ?>" alt="<?= $my_test_card->product_name ?>">
                        <h2><?= $my_test_card->product_name ?></h2>
                        <p><?= $my_test_card->getAnimalType() ?></p>
                        <p>Price: <?= $my_test_card->getPrice() ?></p>
                        <p>Net weight: <?= $my_test_card->getWeightInGrams() ?></p>
                        <p>Price: <?= $my_test_card->getPrice() ?></p>
                        <p>Ingredients: <?= $my_test_card->getIngredients() ?></p>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>