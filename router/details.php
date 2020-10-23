<?php

$contenu="";  
foreach($dbd->query("SELECT * FROM disques D WHERE D.id = $_GET[id]")as $values){
    $contenu.='<div class="detailBox">
    <h1>'.$values['album'].'</h1>
    <div>
        <img src="assets/images/'.$values['image'].'" alt="">
        <p> '.$values['descriptif'].' </p>
    </div>
    <form method="POST">
        <label for="com">Laissez un commentaire</label>
        <input type="text" name="comm" id="com">
        <div class="ajaratingblock">        
            <div class="ajarating">
                <a href="#5" title="Donner 5 étoiles" name="star" value="5">☆</a>
                <a href="#4" title="Donner 4 étoiles" name="star" value="4">☆</a>
                <a href="#3" title="Donner 3 étoiles" name="star" value="3">☆</a>
                <a href="#2" title="Donner 2 étoiles" name="star" value="2">☆</a>
                <a href="#1" title="Donner 1 étoile" name="star" value="1">☆</a>
            </div>
        </div>
        <input type="submit" value="Envoyer">
    </form>';
    
        if(!empty($_POST['comm'])){
            $dbd->query("INSERT INTO `comments`(`commentaire`, `album`) VALUES ('$_POST[comm]', ".$values['id'].")");
            }
    
$contenu.='</div>';

}
foreach($dbd->query("SELECT CO.commentaire FROM comments CO WHERE $_GET[id]= CO.album ORDER BY CO.id DESC LIMIT 0,5")as $values){
    $contenu.= '<p>'.$values['commentaire'].'</p>';
 }
 

$texte = array("contenu"=>$contenu) ;
