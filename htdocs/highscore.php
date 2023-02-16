<?php
include('header.php');
require_once('connexion.php');



$requete = $bdd -> query('SELECT user_name, score FROM users INNER JOIN scores WHERE user_score_id = id_user ORDER BY score DESC');
$allUserScore = $requete ->fetchAll(); 


    foreach ($allUserScore as $score) {
        echo 
        "<div class='score container justify-content-center'>
        <form action ='' method='post' id='highscore'>
          <h2 id='score'> Félicitation " . $score['user_name'] . " !!!!!! Ton score est de :". $score['score'] . " </h2>
        </form>
      </div>";
    }
?>

<link rel = "stylesheet" href = "highscore.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

