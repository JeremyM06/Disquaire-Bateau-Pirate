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
include "inc/connexion.php";
?>
<div class="cardsBlock">
<?php

    foreach($dbd->query("SELECT D.image, A.nom, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie ORDER BY D.id DESC LIMIT 0,5 ")as $values){
        echo '<div class="cards"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['nom']." est l'interprete de l'album ".$values['album']." et de la categorie ".$values['categorie'].'</div>';
        echo "<pre>";
        print_r($values);
        echo "</pre>";
}?>
</div>
<?php

?>

</body>
</html>

