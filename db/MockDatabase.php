<?php

class MockDatabase
{
    static function getFoodProducts(): array
    {
        return [
            [
                "id" => 1,
                "product_name" => "Royal Canin Mini Adult",
                "animal_type" => "dog",
                "price" => 43.99,
                "img_url" => '245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
                "weight_in_grams" => 545,
                "ingredients" => ["ham", "rice"]
            ],
            [
                "id" => 2,
                "product_name" => "Almo Nature Holistic Maintenance Medium Large Tonno e Riso",
                "animal_type" => "dog",
                "price" => 44.99,
                "img_url" => '245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
                "weight_in_grams" => 600,
                "ingredients" => ["beef", "cereals"]
            ],
            [
                "id" => 3,
                "product_name" => "Almo Nature Cat Daily Lattina",
                "animal_type" => "cat",
                "price" => 34.99,
                "img_url" => '245336/almo-daily-menu-cat-400-gr-vitello.jpg',
                "weight_in_grams" => 400,
                "ingredients" => ["tuna", "chicken", "ham",]
            ],
            [
                "id" => 4,
                "product_name" => "Mangime per Pesci Gruppy in Fiocchi",
                "animal_type" => "fish",
                "img_url" => '272714/tetra-guppy-mini-flakes.jpg',
                "price" => 2.95,
                "weight_in_grams" => 30,
                "ingredients" => ["fish products", "cereals", "algas", "yeast"]
            ],
        ];
    }


    static function getAccessoriesProducts(): array
    {
        return [
            [
                "id" => 1,
                "product_name" => "Voliera Wilma in Legno",
                "animal_type" => "bird",
                "price" => 184.99,
                "img_url" => '258384/voliera-wilma1.jpg',
                "material" => "wood",
                "dimensions" => "M: L 83 x P 67 x H 153cm"
            ],
            [
                "id" => 2,
                "product_name" => "Cartucce Filtranti per Filtro EasyCrystal",
                "animal_type" => "fish",
                "price" => 2.29,
                "img_url" => '272741/tetra-easycrystal-filterpack-250-300.jpg',
                "material" => "foam material",
                // no dimensions :)
            ]
        ];
    }

    static function getToyProducts(): array
    {
        return [
            [
                "id" => 1,
                "product_name" => "Kong Classic",
                "animal_type" => "dog",
                "price" => 13.49,
                "img_url" => '256599/kong-classic1.jpg',
                "features" => "floats and bounces",
                "dimensions" => "8,5cm x 10cm"
            ],
            [
                "id" => 2,
                "product_name" => "Topini di peluche Trixie",
                "animal_type" => "cat",
                "price" => 4.99,
                "img_url" => '223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
                "features" => "soft with tail in rope",
                "dimensions" => "8,5cm x 10cm"
            ]
        ];
    }
}
