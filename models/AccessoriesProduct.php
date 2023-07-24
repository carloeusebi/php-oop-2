<?php

require_once __DIR__ . '/BaseProduct.php';

class AccessoriesProduct extends BaseProduct
{

    protected string $features;
    protected string $dimensions;

    public function __construct(int $id, string $product_name, string $animal_type, float $price, string $img_url, string $features, string $dimensions)
    {
        parent::__construct($id, $product_name, $animal_type, $price, $img_url);
        $this->setFeatures($features);
        $this->setDimensions($dimensions);
    }

    // SETTERS

    public function setFeatures(string $features): bool
    {
        $this->features = $features;
        return true;
    }

    public function setDimensions(string $dimensions): bool
    {
        $this->dimensions = $dimensions;
        return true;
    }

    // GETTERS

    public function getFeatures(): string
    {
        return $this->features;
    }

    public function getDimensions(): string
    {
        return $this->dimensions;
    }
}
