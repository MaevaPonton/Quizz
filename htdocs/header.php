<?php
require_once ('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel = "stylesheet" href = "./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>


<body>

<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
    <img src = "./images/quizz.avif" alt="logo" width="280" height="150">
    <h1> Quizz de Culture Générale </h1>
    <form action="index.php" method="post" class="justify-content-end" role="accueil">
      <button class="btn btn-outline-success" type="submit">Accueil</button>
    </form>
    <form action="highscore.php" method="post" class="justify-content-end" role="high_score">
      <button class="btn btn-outline-danger" type="submit">High Score</button>
    </form>
  </div>
</nav>


</body>
</html>