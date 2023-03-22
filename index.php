<!-- create un file index.php in cui:
- è definita una classe 'Movie'
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà -->

<?php

require_once __DIR__ . "/db.php";
require_once __DIR__ . "/Models/class_Movie.php";

// $jaws = new Movie("Jaws", "Steven Spielberg", "An hungry shark attacks random people.", "1975");
// $theMeg = new Movie("The Meg", "Jon Turteltaub", "An hungry and huge shark attacks random people.", "2018");
// $tremors = new Movie("Tremors", "Ron Underwood", "An hungry thing attacks random people.", "1990");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primo Esercizio OOP</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-primary p-2" style="--bs-bg-opacity: .5;">
    <h1 class="text-light text-center mt-5">MOVIES</h1>
    <div class="container mt-5">
        <div class="row row-cols-3">

            <?php foreach ($movies_obj as $movie) : ?>

                <div class="col">
                    <div class="card text-bg-dark mb-3">
                        <h2 class="card-header"> <?php echo $movie->title; ?> </h2>
                        <div class="card-body">
                            <p class="card-text"> <small> <i> "<?php echo $movie->plot; ?>" </i> </small> </p> <br>
                            <p class="card-title"> Directed by <?php echo $movie->director; ?> </p>
                            <p class="card-text"> Release year: <?php echo $movie->year; ?> </p>
                        </div>
                    </div>

                    <p class=text-center> <?php echo $movie->whoDirectedWhat(); ?> </p>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</body>

</html>