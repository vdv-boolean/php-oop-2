<?php

// Class declaration
class Category {
    public function __construct(
        protected int $id,
        protected string $animal,
        protected string $description
    )
    {}
    public function getCategory() {
        return $this->animal;
    }
}