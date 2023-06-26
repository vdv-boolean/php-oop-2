<?php
//
$categories = [
	new Category(1, 'Gatti', 'lorem ipsum'),
	new Category(2, 'Cani', 'lorem ipsum'),
];

// Array of all ahop products
$arrProducts = [
    new Food(
        1,
        "cibo",
        "descrizione del cibo",
        999,
        $categories[0],
        "https://picsum.photos/200/300",
        "data",
        1000
    ),
    new Toy(
        1,
        "giocattolo",
        "descrizione del giocattolo",
        999,
        $categories[0],
        "https://picsum.photos/200/300",
        "materiale",
        "colore"
    ),
    new Shelter(
        1,
        "cuccia",
        "descrizione della cuccia",
        999,
        $categories[0],
        "https://picsum.photos/200/300",
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
        "https://picsum.photos/200/300",
        "data",
        1000
    ),
    new Toy(
        1,
        "giocattolo",
        "descrizione del giocattolo",
        999,
        $categories[1],
        "https://picsum.photos/200/300",
        "materiale",
        "colore"
    ),
    new Shelter(
        1,
        "cuccia",
        "descrizione della cuccia",
        999,
        $categories[1],
        "https://picsum.photos/200/300",
        1000,
        1000,
        1000
    )
];