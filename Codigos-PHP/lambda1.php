<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;

        }
    </style>
</head>
<body>
    <h1>
        Libros recomendados
    </h1>    
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
/*
Voy a convertir esta funcion en un array de la forma que ya viene predeterminado por PHP
        function filter ($items, $fn) {
            
            $filteredItems = [];

            foreach ($items as $item) {
                if ($fn($item)) {
                    $filteredItems[] = $item;
                }
            }
            
            return $filteredItems;

        }
*/
        $filteredBooks = array_filter ($books, function($book) {
            return $book['releaseYear']; if ($book['releaseYear'] === (1950 && 2020));

        });
    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
            
        <?php endforeach ; ?>
    </ul>
</body>
</html>