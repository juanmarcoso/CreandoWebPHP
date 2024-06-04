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
        Laracast
    </h1>    

    <ul>
        <?php foreach ($business['categories'] as $category) : ?>
            <li> <?= $category; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>