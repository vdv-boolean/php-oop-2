<?php

// Calling classes
include_once __DIR__ . "/models/Product.php";
include_once __DIR__ . "/models/Category.php";
include_once __DIR__ . "/models/Food.php";
include_once __DIR__ . "/models/Toy.php";
include_once __DIR__ . "/models/Shelter.php";
include __DIR__ . "/db.php";

// Card Printing using FN
foreach ($arrProducts as $product)
    echo $product->printCard();