<?php

// Class declaration
class Product {

    // Construct FN
    public function __construct(
        protected int $id,
        protected string $name,
        protected string $description,
        protected int $price, // Price in cents
        protected Category $category, // OBJ composition
        protected string $image
    )
    {}

    // Fn for printing cards
    public function printCard() {
        return "Card of " . $this->name . "<br>";
    }

    public function convertPrice() {
        return $this->price / 100;
    }
};