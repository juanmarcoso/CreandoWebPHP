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
            "Do androids dream of Electric Sheep", 
            "The langoliers",
            "Hail Mary"
        ]
    ?>
    <ul>
        <?php foreach ($books as $book) {
            echo "<li>{$book}™</li>";
        } ?>
    </ul>
</body>
</html>