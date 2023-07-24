<?php

class Product
{
    protected string $animal_type;
    protected float $price;
    protected string $img_url;

    public function __construct(string $animal_type, float $price, string $img_url)
    {
        $this->setAnimalType($animal_type);
        $this->setPrice($price);
        $this->setImgUrl($img_url);
    }

    // SETTERS

    public function setAnimalType(string $animal_type): bool
    {
        $animal_types = ['Dog', 'Bird', 'Fish', 'Bird'];
        if (!in_array($animal_type, $animal_types)) return false;
        $this->animal_type = $animal_type;
        return true;
    }

    public function setPrice(float $price): bool
    {
        if (!is_numeric($price) || $price <= 0) return false;
        $this->price = $price;
        return true;
    }

    public function setImgUrl(string $url): bool
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) return false;
        $this->img_url = $url;
        return true;
    }

    // GETTERS

    public function getAnimalType(): string
    {
        return $this->animal_type;
    }

    public function getPrice(): float
    {
        return $this->animal_type;
    }

    public function getImgUrl(): string
    {
        return $this->img_url;
    }
}
