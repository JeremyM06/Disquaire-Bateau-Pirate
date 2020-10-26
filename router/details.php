<?php

    $moyenne=0;
    $i=0;
    foreach($dbd->query("SELECT C.album, C.note FROM comments C WHERE C.album = $_GET[id]")as $element){
        $moyenne+= $element['note'];
        $i++;
    }
    if($moyenne != 0){
        $moyenne/=$i;
    }else{
        $moyenne=0;
    }
    



foreach($dbd->query("SELECT * FROM disques D WHERE D.id = $_GET[id]")as $values){
    $contenu ='<div class="container">
    <div class="detailBox">
    <h1>'.$values['album'].'</h1>
    <h2 v-if="'.$moyenne.'>0">Note de '.$moyenne.'/5</h2>
        <div class="row d-flex justify-content-around align-items-center">
                <div class="col-sm">
                    <img class="ajaimg" src="assets/images/'.$values['image'].'" alt="jacquette cd">
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
            <label>Votre note:</label>
            <div class="ajaratingblock">
                <div class="rating">
                    <input name="stars" id="e5" value="5" type="radio"></a><label for="e5">☆</label>
                    <input name="stars" id="e4" value="4" type="radio"></a><label for="e4">☆</label>
                    <input name="stars" id="e3" value="3" type="radio"></a><label for="e3">☆</label>
                    <input name="stars" id="e2" value="2" type="radio"></a><label for="e2">☆</label>
                    <input name="stars" id="e1" value="1" type="radio"></a><label for="e1">☆</label>
                </div>
            </div>
            <input class="btn btn-warning" type="submit" value="Envoyer">
        </form>';
        if(!empty($_POST['comm']) && !empty($_POST['nomC']) && !empty($_POST['stars'])){  
            $comment = addslashes($_POST['comm']);   /*addslashes met en forme pour autoriser l'insertions d'apostrophe dans les commentaires, sinon l'insertion plante*/                   
            $nameC = addslashes($_POST['nomC']);
            $dbd->query("INSERT INTO `comments`(`commentaire`, `album`,`nomC`, `note`) VALUES ('$comment', ".$values['id'].", '$nameC', '$_POST[stars]')");
            $_POST['comm']="";
            $_POST['nomC']="";
            $_POST['stars']="";
            }
}
$contenu.='<div class="detailBoxComment">
<h2><u>Ce qu\'en pense la foule:</u></h2><br>
';
foreach($dbd->query("SELECT CO.commentaire, CO.nomC, CO.input_date,DATE_FORMAT(CO.input_date, '%d/%m/%Y à %H:%i') as comm FROM comments CO WHERE $_GET[id]= CO.album ORDER BY CO.id DESC LIMIT 0,5")as $values){
    $contenu.= '
    <div class="d-flex justify-content-around align-items-center border-bottom">

            <div class="d-flex flex-column">
                <p><u>Le '.$values['comm'].'</u></p>
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
