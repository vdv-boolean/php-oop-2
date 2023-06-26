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
        protected string $expiry,
        protected int $weight // Weight in gr.
    )
    {
        parent::__construct($id, $name, $description, $price, $category, $image);
    }
        // Fn for printing cards
        public function printCard() {
            $type = get_class($this);
            return  "
                <img src= \"{$this->image}\"><br>
                {$this->name}<br>
                Descrizione: {$this->description}<br>
                Prezzo: €{$this->convertPrice()}<br>
                Categoria: $type ({$this->category->getCategory()}) <br>
                Scadenza: {$this->expiry}<br>
                Peso: {$this->weight} gr.<br> <hr>
            ";
        }
};