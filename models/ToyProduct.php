<?php

require_once __DIR__ . '/BaseProduct.php';

class ToyProduct extends BaseProduct
{

    private string $features;
    private string $dimensions;

    public function __construct(int $id, string $product_name, string $animal_type, float $price, string $img_url, string $features, string $dimensions)
    {
        parent::__construct($id, $product_name, $animal_type, $price, $img_url);
        $this->setFeatures($features);
        $this->setDimensions($dimensions);
    }

    // SETTERS

    private function setFeatures(string $features): bool
    {
        $this->features = $features;
        return true;
    }

    private function setDimensions(string $dimensions): bool
    {
        $this->dimensions = $dimensions;
        return true;
    }


    public function renderCard(): string
    {
        $html = parent::renderCard();
        $html .= '<p>Net weight: ' . $this->features . '</p>';
        $html .= '<p>Ingredients: ' . $this->dimensions . '</p>';
        $html .= '</div>';
        return $html;
    }
}
