<?php
include('header.php');
require_once('connexion.php');

?>

<link rel = "stylesheet" href = "podium.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<?php

echo "<div class = 'classement'> 
            <div>Voici les trois meilleurs scores : </div>
     </div>";
echo "<br>";
echo "<br>";
echo "<br>";


$requete = $bdd -> query('SELECT user_name, score FROM users INNER JOIN scores WHERE user_score_id = id_user ORDER BY score DESC LIMIT 3');
$allUserScore = $requete ->fetchAll(); 


    foreach ($allUserScore as $score) {
        echo 
        "<div class='score-container container row justify-content-center'>
            <div class = 'col-3'></div>
            <div class = 'col-3'></div>
            <div class='winner col-3'>" . $score['user_name'] . "  </div>
            <div class ='score col-3'>". $score['score'] . " points </div>
      </div>";
    }



?>