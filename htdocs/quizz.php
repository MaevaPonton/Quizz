<?php
include('header.php');
require_once ('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel = "stylesheet" href = "stylequizz.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


<body>

<?php

// afficher les questions de façon aléatoire et de façon unique avec les réponses correspondantes :
$request =  $bdd->query ('SELECT*FROM questions ORDER BY RAND()LIMIT 1');
$allquestionsreponses = $request->fetchAll();

    foreach ($allquestionsreponses as $question) {
        echo 
        "<div class='quiz-container' id='quiz'>
        <div class='quiz-header'>
          <h2 id='question'>". $question['question'] . "</h2>
          <ul>
            <li>
              <input type='radio' name='answer' id='a' class='answer'>
              <label for='a' id='a_text'>" . $question['response_true'] . "</label>
            </li>
            <li>
              <input type='radio' name='answer' id='b' class='answer'>
              <label for='b' id='b_text'>" . $question['response_false'] . "</label>
            </li>
          </ul>
        </div>
        <button id='submit'>Valider</button>
      </div>";
    }

?>



</body>
</html>

    
















