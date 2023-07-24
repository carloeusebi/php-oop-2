<?php

require_once __DIR__ . '/utils/functions.php';

require_once __DIR__ . '/db/MockDatabase.php';

require_once __DIR__ . '/models/BaseProduct.php';
require_once __DIR__ . '/models/AccessoriesProduct.php';
require_once __DIR__ . '/models/FoodProduct.php';
require_once __DIR__ . '/models/ToyProduct.php';


$fetched_accessories = MockDatabase::getAccessoriesProducts();
$fetched_foods = MockDatabase::getFoodProducts();
$fetched_toys = MockDatabase::getToyProducts();

/**
 * @var BaseProduct[]
 */
$products = [];

foreach ($fetched_foods as $food) {
    extract($food);
    $food_model = new FoodProduct($id, $product_name, $animal_type, $price, $img_url, $weight_in_grams, $ingredients);
    $products[] = $food_model;
}

foreach ($fetched_accessories as $accessory) {
    extract($accessory);
    $accessory_model = new AccessoriesProduct($id, $product_name, $animal_type, $price, $img_url, $material, $dimensions);
    $products[] = $accessory_model;
}

foreach ($fetched_toys as $toy) {
    extract($toy);
    $toy_model = new ToyProduct($id, $product_name, $animal_type, $price, $img_url, $features, $dimensions);
    $products[] = $toy_model;
}


dd($products);
