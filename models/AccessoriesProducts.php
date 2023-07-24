<?php

require_once __DIR__ . '/BaseProduct.php';

class AccessoriesProducts extends BaseProduct
{

    protected string $material;
    protected string $dimensions;

    public function __construct(int $id, string $product_name, string $animal_type, float $price, string $img_url, string $material, string $dimensions = "ND")
    {
        parent::__construct($id, $product_name, $animal_type, $price, $img_url);
        $this->setMaterial($material);
        $this->setDimensions($dimensions);
    }

    // SETTERS

    public function setMaterial(string $material): bool
    {
        $this->material = $material;
        return true;
    }

    public function setDimensions(string $dimensions): bool
    {
        $this->dimensions = $dimensions;
        return true;
    }

    // GETTERS

    public function getMaterial(): string
    {
        return $this->material;
    }

    public function getDimensions(): string
    {
        return $this->dimensions;
    }
}
