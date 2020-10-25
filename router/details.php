<?php

foreach($dbd->query("SELECT * FROM disques D WHERE D.id = $_GET[id]")as $values){
    $contenu ='<div class="container">
    <div class="detailBox">
    <h1>'.$values['album'].'</h1>

        <div class="row d-flex justify-content-around align-items-center">
                <div class="col-sm">
                    <img src="assets/images/'.$values['image'].'" alt="jacquette cd">
                </div>
                <div class="col-sm align-items-around">
                    <h5><u>Descriptif</u></h5>
                    <p class="description"> '.$values['descriptif'].' </p>
                </div>
        </div>
        <br>

        <form method="POST">
            <div class="row">
                <div class="col-sm-6">
                    <label for="nomCo">Nom</label>
                    <input type="text" name="nomC" id="nomCo">
                </div>
                <div class="col-sm-6 ">
                    <label for="com">Votre avis</label>
                    <input type="text" name="comm" id="com">
                </div>
            </div>
            <div class="ajaratingblock">
                <div class="ajarating">
                    
                    <a href="#5" title="Donner 5 étoiles" name="star" value="5">☆</a>
                    <a href="#4" title="Donner 4 étoiles" name="star" value="4">☆</a>
                    <a href="#3" title="Donner 3 étoiles" name="star" value="3">☆</a>
                    <a href="#2" title="Donner 2 étoiles" name="star" value="2">☆</a>
                    <a href="#1" title="Donner 1 étoile" name="star" value="1">☆</a>
                </div>
            </div>
            <input class="btn btn-warning" type="submit" value="Envoyer">
        </form>';
        if(!empty($_POST['comm']) && !empty($_POST['nomC'])){  
            $comment = addslashes($_POST['comm']);   /*addslashes met en forme pour autoriser l'insertions d'apostrophe dans les commentaires, sinon l'insertion plante*/                   
            $dbd->query("INSERT INTO `comments`(`commentaire`, `album`,`nomC`) VALUES ('$comment', ".$values['id'].", '$_POST[nomC]')");
            }
}
$contenu.='<div class="detailBoxComment">
<h2><u>Ce qu\'en pense la foule:</u></h2><br>
';
foreach($dbd->query("SELECT CO.commentaire, CO.nomC, CO.input_date FROM comments CO WHERE $_GET[id]= CO.album ORDER BY CO.id DESC LIMIT 0,5")as $values){
    $contenu.= '
    <div class="d-flex justify-content-around align-items-center border-bottom">

            <div class="d-flex flex-column">
                <p><u>Le '.$values['input_date'].'</u></p>
                <p>'.$values['nomC'].' s\'est enjaillé(e) avec un :</p>
            </div>
            <q>'.$values['commentaire'].'</q></div>';
 }
$contenu.='        
</div>
</div>
</div>
';

$texte = array("contenu"=>$contenu) ;
?>
