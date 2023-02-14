<?php
// connextion à la base de données
require_once ('connexion.php');


// test
function testUrlParameter ($key, $default = "il manque un paramètre") {
    if (isset($_POST[$key]))
    {
        return $_POST[$key];
    } else {
        return $default;
    }
}


// envoi de l'inscription à la base de données

$user_name = $_POST['user_name'];


$request = $bdd -> prepare ('INSERT INTO users (user_name) VALUES (:user_name)');
$request -> execute (['user_name' => $user_name]);

?>


    


