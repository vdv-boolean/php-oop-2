<?php

// Class declaration
class Product {

    // Construct FN
    public function __construct(
        private int $id,
        private string $name,
        private string $description,
        private int $price, // Price in cents
        private Category $category, // OBJ composition
        private string $image
    )
    {}

    // Fn for printing cards
    public function printCard() {
        return "Card of" . $this->name;
    }
};