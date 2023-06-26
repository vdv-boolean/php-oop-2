<?php
//
$categories = [
	new Category(1, 'Cats', 'lorem ipsum'),
	new Category(2, 'Dogs', 'lorem ipsum'),
];

// Array of all ahop products
$arrProducts = [
    new Food(
        1,
        "cibo",
        "descrizione del cibo",
        999,
        $categories[0],
        "",
        "data",
        1000
    ),
    new Toy(
        1,
        "giocattolo",
        "descrizione del giocattolo",
        999,
        $categories[0],
        "",
        "materiale",
        "colore"
    ),
    new Shelter(
        1,
        "cuccia",
        "descrizione della cuccia",
        999,
        $categories[0],
        "",
        1000,
        1000,
        1000
    ),
    new Food(
        1,
        "cibo",
        "descrizione del cibo",
        999,
        $categories[1],
        "",
        "data",
        1000
    ),
    new Toy(
        1,
        "giocattolo",
        "descrizione del giocattolo",
        999,
        $categories[1],
        "",
        "materiale",
        "colore"
    ),
    new Shelter(
        1,
        "cuccia",
        "descrizione della cuccia",
        999,
        $categories[1],
        "",
        1000,
        1000,
        1000
    )
];