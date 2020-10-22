<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bateau-pirate</title>
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
<?php
$connexion='mysql:host=localhost;dbname=disquaire';
$user="web001";
$pass="topsecret";
try{
    $dbd = new PDO($connexion, $user, $pass);
    $dbd->query('SET NAMES UTF8');// pour afficher les nom correctement sans erreur d'accent etc.

}catch (PDOException $e){
    print "Grosse catastrophe!:".$e->getMessage()."<br>";
    die();
}
?>
<div class="cardsBlock">
<?php

    foreach($dbd->query("SELECT D.image, A.nom, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie")as $values){
        echo '<div class="cards"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['nom']." est l'interprete de l'album ".$values['album']." et de la categorie ".$values['categorie'].'</div>';
}?>
</div>
<?php

?>

</body>
</html>

