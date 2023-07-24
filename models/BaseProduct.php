<?php

class BaseProduct
{
    protected string $animal_type;
    protected float $price;
    protected string $url;

    public function __construct(string $animal_type = '', float $price = 0, string $url = '')
    {
        $this->setAnimalType($animal_type);
        $this->setPrice($price);
        $this->setImgUrl($url);
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
        if ($price <= 0) return false;
        $this->price = $price;
        return true;
    }

    public function setImgUrl(string $url): bool
    {
        $this->url = $url;
        return true;
    }

    // GETTERS

    public function getAnimalType(): string
    {
        return $this->animal_type;
    }

    public function getPrice(): string
    {
        return "€ " . $this->price;
    }

    public function getImgUrl(): string
    {
        return "https://arcaplanet.vtexassets.com/arquivos/ids" . $this->url;
    }
}
