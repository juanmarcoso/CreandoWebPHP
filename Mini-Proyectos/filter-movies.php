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
        My favourites movies
    </h1>    
    <?php 
        $movies = [
            [
                'name' => 'The lord of the rings',
                'author' => 'J. R. R. Tolkien',
                'director' => 'Peter Jackson',
                'releaseYear' => 2001,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Shining',
                'author' => 'Stephen King',
                'director' => 'Stanley Kubrick',
                'releaseYear' => 1980,
                'purchaseUrl' => 'http://example2.com'
            ],
            [
                'name' => 'Paul',
                'author' => 'Simon Pegg y Nick Frost',
                'director' => 'Greg Mottola',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example3.com'
            ],
        ];

        function filterByMovies($movies, $name) {
            //Esto es una funcion
            $filteredMovies = [];

            foreach ($movies as $movie) {
                if ($movie['name'] === $name) {
                    $filteredMovies[] = $movie;
                }
            }
            
            return $filteredMovies;

        }
    ?>
    <ul>
        <?php foreach (filterByMovies($movies, 'Paul') as $movie) : ?>
            
                <li>
                    <a href="<?= $movie['purchaseUrl'] ?>">
                        <?= $movie['name']; ?> (<?= $movie['releaseYear'] ?>) - By <?= $movie['author'] ?>
                    </a>
                </li>
            
        <?php endforeach ; ?>
    </ul>
</body>
</html>