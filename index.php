<?php

// Calling classes
include_once __DIR__ . "/models/Product.php";
include_once __DIR__ . "/models/Category.php";
include_once __DIR__ . "/models/Food.php";
include_once __DIR__ . "/models/Toy.php";
include_once __DIR__ . "/models/Shelter.php";

// Ex of food product
$food = new Food(
    1,
    "cibo",
    "descrizione del cibo",
    999,
    new Category(),
    "",
    "data",
    1000
);

// Ex of toy product
$toy = new Toy(
    1,
    "giocattolo",
    "descrizione del giocattolo",
    999,
    new Category(),
    "",
    "materiale",
    "colore"
);

// Ex of shelter product
$shelter = new Shelter(
    1,
    "cuccia",
    "descrizione della cuccia",
    999,
    new Category(),
    "",
    1000,
    1000,
    1000
);


// Card Printing using FN
echo $food->printCard();
echo $toy->printCard();
echo $shelter->printCard();