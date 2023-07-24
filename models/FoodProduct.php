<?php

require_once __DIR__ . '/BaseProduct.php';

class FoodProduct extends BaseProduct
{

    private int $weight_in_grams;
    private array $ingredients;

    public function __construct(int $id, string $product_name, string $animal_type, float $price, string $img_url, int $weight_in_grams, array $ingredients)
    {
        parent::__construct($id, $product_name, $animal_type, $price, $img_url);
        $this->setWeightInGrams($weight_in_grams);
        $this->setIngredients($ingredients);
    }

    // SETTERS

    private function setWeightInGrams(int $grams): bool
    {
        if ($grams <= 0) return false;
        $this->weight_in_grams = $grams;
        return true;
    }

    private function setIngredients(array $ingredients): bool
    {
        $this->ingredients = $ingredients;
        return true;
    }

    // GETTERS

    private function getWeightInGrams(): string
    {
        return $this->weight_in_grams . "g";
    }

    private function getIngredients(): string
    {
        return implode(', ', $this->ingredients);
    }

    // ACTIONS

    // private function addIngredient(string $ingredient)
    // {
    //     $this->ingredients[] = $ingredient;
    // }

    // private function removeIngredients(string $ingredient): bool
    // {
    //     $filtered_ingredients = array_filter($this->ingredients, fn ($ing) => $ing !== $ingredient);
    //     if (count($filtered_ingredients) === count($this->ingredients)) return false;
    //     $this->ingredients = $filtered_ingredients;
    //     return true;
    // }

    public function renderCard(): string
    {
        $html = parent::renderCard();
        $html .= '<p>Net weight: ' . $this->getWeightInGrams() . '</p>';
        $html .= '<p>Ingredients: ' . $this->getIngredients() . '</p>';
        $html .= '</div>';
        return $html;
    }
}
