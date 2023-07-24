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

dd($products);
