<?php
require_once ('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz Mario</title>
    <link rel = "stylesheet" href = "header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>


<body>

<nav class="navbar navbar-expand-lg fixed-top bg-transparent">
    <h1 class='quizzmario'> Quizz Super Mario </h1>
    <form action="index.php" method="post" class="" role="accueil">
      <button class="accueil btn btn-success" type="submit">Accueil</button>
    </form>
    <form action="highscore.php" method="post" class="" role="high_score">
      <button class=" highscore btn btn-danger" type="submit">High Score</button>
    </form>
    <form action="podium.php" method="post" class="" role="podium">
      <button class=" podium btn btn-warning" type="submit">Podium</button>
    </form>
</nav>


</body>
</html>