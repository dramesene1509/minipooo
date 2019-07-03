<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

function connexion() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=universite;charset=utf8', 'root', 'bachir1509');
        if($bdd){
            echo"bien connecter";
        }
        }catch(PDOException $e){
        //die('<h3>Erreur!</h3>');
    }
    return $bdd;
}




?>


</body>
</html>