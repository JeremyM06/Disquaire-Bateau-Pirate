<?php

$contenu="";  
$contenu.= "<div class='cardsBlock'>";
foreach($dbd->query("SELECT D.image, A.nom, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie")as $values){
    $contenu.= '<div class="cards"><a href="index.php?page=details"><img src="assets/images/'.$values['image'].'" alt=""></a><br>'.$values['nom']." est l'interprete de l'album ".$values['album']." et de la categorie ".$values['categorie'].'<a href="index.php?page=reserv"><button >Reserver</button></a></div>';
}
$contenu.= "</div>";
$texte = array("contenu"=>$contenu) ;