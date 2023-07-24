<?php

require_once __DIR__ . '/BaseProduct.php';

class AccessoriesProduct extends BaseProduct
{

    private string $material;
    private string $dimensions;

    public function __construct(int $id, string $product_name, string $animal_type, float $price, string $img_url, string $material, string $dimensions = "ND")
    {
        parent::__construct($id, $product_name, $animal_type, $price, $img_url);
        $this->setMaterial($material);
        $this->setDimensions($dimensions);
    }

    // SETTERS

    private function setMaterial(string $material): bool
    {
        $this->material = $material;
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
        $html .= '<p>Material: ' . $this->material . '</p>';
        $html .= '<p>Dimensions: ' . $this->dimensions . '</p>';
        $html .= '</div>';
        return $html;
    }
}
