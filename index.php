<?php
require_once __DIR__ . '/classes/movie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <h1>Movies</h1>
    </header>
    <main>
        <div class="card">
            <?php // istanza
                $movie1 = new Movie('Avatar', '2010','James Cameron',['Sam Worthington','Zoe Saldana','Stephen Lang','Sigourney Weaver','Joel David Moore']);
            ?>
            <h2><?php echo $movie1->title ?></h2>
            <h4><?php echo $movie1->director ?></h4>
            <p><?php echo $movie1->year ?></p>
            <h5>Actors:</h5>
            <ul>
                <?php foreach($movie1->notAllCast(3) as $actor) : ?>
                    <li><?php echo $actor ?></li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="card">
            <?php // istanza
                $movie2 = new Movie('The Avengers', '2012','Joss Whedon',['Robert Downey Jr.','Chris Evans','Mark Ruffalo','Chris Hemsworth','Scarlett Johansson']);
            ?>
            <h2><?php echo $movie2->title ?></h2>
            <h4><?php echo $movie2->director ?></h4>
            <p><?php echo $movie2->year ?></p>
            <h5>Actors:</h5>
            <ul>
                <?php foreach($movie2->notAllCast(3) as $actor) : ?>
                    <li><?php echo $actor ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>
</body>
</html>