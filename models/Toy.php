<?php

// Calling a parent class
include_once __DIR__ . '/Product.php';

// Class declaration
class Toy extends Product {
    // Construct FN
    public function __construct(
        int $id,
        string $name,
        string $description,
        int $price, // Price in cents
        Category $category, // OBJ composition
        string $image,
        protected string $material,
        protected string $color
    )
    {
        parent::__construct($id, $name, $description, $price, $category, $image);
    }
        // Fn for printing cards
        public function printCard() {
            return "Toy card of " . $this->name . "<br>";
        }
};