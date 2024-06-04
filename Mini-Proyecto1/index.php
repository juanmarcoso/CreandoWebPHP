<?php 

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example2.com'
    ],
    [
        'name' => 'The Martians',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example3.com'
    ],
];

$filteredBooks = array_filter ($books, function($book) {
    return $book['releaseYear']; if ($book['releaseYear'] === (1950 && 2020));

});

/*Hemos sacado el cierre de php para que entre "require"*/

require "index.view.php";
