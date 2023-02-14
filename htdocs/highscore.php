<?php
include('header.php');
require_once('connexion.php');



$requete = $bdd -> query('SELECT user_name, score FROM users INNER JOIN scores WHERE user_score_id = id_user');
$allUserScore = $requete ->fetchAll(); 


    foreach ($allUserScore as $score) {
        echo "<li>" . $score['user_name'] . " :". $score['score'] . "</li><br>";

    }
?>