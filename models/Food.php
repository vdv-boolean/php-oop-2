<?php

// Calling a parent class
include_once __DIR__ . '/Product.php';

// Class declaration
class Food extends Product {
    public function __construct(
        int $id,
        string $name,
        string $description,
        int $price, // Price in cents
        Category $category, // OBJ composition
        string $image,
        private string $expiry,
        private int $weight // Weight in gr.
    )
    {
        parent::__construct($id, $name, $description, $price, $category, $image);
    }
};