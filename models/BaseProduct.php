<?php

class BaseProduct
{
    public int $id;
    public string $product_name;
    protected string $animal_type;
    protected float $price;
    protected string $url;

    public function __construct(int $id, string $product_name, string $animal_type, float $price, string $url)
    {
        $this->id = $id;
        $this->product_name = $product_name;
        $this->setAnimalType($animal_type);
        $this->setPrice($price);
        $this->setImgUrl($url);
    }

    // SETTERS

    private function setAnimalType(string $animal_type): bool
    {
        $animal_types = ['dog', 'cat', 'fish', 'bird'];
        if (!in_array($animal_type, $animal_types)) return false;
        $this->animal_type = $animal_type;
        return true;
    }

    private function setPrice(float $price): bool
    {
        if ($price <= 0) return false;
        $this->price = $price;
        return true;
    }

    private function setImgUrl(string $url): bool
    {
        $this->url = $url;
        return true;
    }

    // GETTERS

    private function getAnimalType(): string
    {
        return $this->animal_type;
    }

    private function getPrice(): string
    {
        return "€ " . $this->price;
    }

    private function getImgUrl(): string
    {
        return "https://arcaplanet.vtexassets.com/arquivos/ids/" . $this->url;
    }

    public function renderCard(): string
    {
        $html = '<div class="my-card">';
        $html .= '<img class="img-fluid" src="' . $this->getImgUrl() . '" alt="' . $this->product_name . '">';
        $html .= '<p>' . $this->getAnimalType() . '</p>';
        $html .= '<p>Price: ' . $this->getPrice() . '</p>';
        return $html;
    }
}
