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

    foreach($dbd->query("SELECT D.image, A.nom, D.album, C.categorie, CO.commentaire FROM disques D, artistes A, categories C, comments CO WHERE A.id = D.artiste AND C.id = D.categorie AND CO.album = D.id ORDER BY D.id DESC ")as $values){
        echo '<div class="cards"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['nom']." est l'interprete de l'album ".$values['album']." et de la categorie ".$values['categorie'].'<br> Commentaire:  '.$values['commentaire'].'</div>';
        echo "<pre>";
        print_r($values);
        echo "</pre>";
}?>
</div>
<form method="GET" >
    <label for="">commentaire</label>
    <input type="text" name="comment">
    <input type="submit" name="envoyer" value="envoyer">
</form>
<?php

if (isset($_GET[comment])){
    
    $dbd->query("INSERT INTO `comments`(`commentaire`, `album`) VALUES ('$_GET[comment]', 7)");
}
    


?>

</body>
</html>

