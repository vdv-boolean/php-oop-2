<?php

// Calling a parent class
include_once __DIR__ . '/Product.php';

// Class declaration
class Shelter extends Product {
        // Construct FN
        public function __construct(
            int $id,
            string $name,
            string $description,
            int $price, // Price in cents
            Category $category, // OBJ composition
            string $image,
            protected int $height, // Height in mm
            protected int $width, // Width in mm
            protected int $length // Length in mm
        )
        {
            parent::__construct($id, $name, $description, $price, $category, $image);
        }
};