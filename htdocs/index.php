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
    <title>Quizz</title>
    <link rel = "stylesheet" href = "./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


<body>

<section class= "form container mt-5">
<p class='identification'> Afin de pouvoir avoir accès à notre Quizz <br> merci de vous inscrire ou de vous identifier </p>

<form action="inscription.php" method="post" id="formulaire_inscription">
    <input type = 'text' name = 'user_name' id = 'user_name' placeholder = 'Pseudo' required>
    <button type="submit"> S'inscrire </button>
</form>






<?php 

// importation des utilisateurs de la base de données


$request =  $bdd->query('SELECT * FROM users');
    $alluser = $request->fetchAll();


echo"<br>";
echo"<br>";
echo"<br>";

    foreach ($alluser as $user) {
        echo "
        <div class = 'container row'>
        <table>
            <thead>
                <tr>
                <td class = 'col-3'></td>
                    <td class='pseudo col-6<'>" . $user["user_name"] . "</td>
                    <form action='quizz.php' method='get'>
                        <input type='hidden' name='id' value=".$user['id_user'].">
                        <td class='pseudo_bouton col-4'><button type='submit' value='se connecter'> Se connecter </button> </td>
                     </form>
                </tr>
            </thead>
        </table>
        </div>";
    }

?>

 

</body>
</html>




