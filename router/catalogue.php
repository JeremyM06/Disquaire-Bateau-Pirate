<?php

$contenu="";  

foreach($dbd->query("SELECT D.image, A.nom, D.album, C.categorie, CO.commentaire FROM disques D, artistes A, categories C, comments CO WHERE A.id = D.artiste AND C.id = D.categorie AND CO.album = D.id ORDER BY D.id DESC ")as $values){
    $contenu.= '<div class="cards"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['nom']." est l'interprete de l'album ".$values['album']." et de la categorie ".$values['categorie'].'<br> Commentaire:  '.$values['commentaire'].'</div>';
    $contenu.= "<pre>";
    print_r($values);
    $contenu.= "</pre>";
}

$texte = array("contenu"=>$contenu) ;
