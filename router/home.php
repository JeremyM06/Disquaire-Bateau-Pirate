<?php

$contenu ='
<div class="container">
    <div class="jumbotron">
            <div class="row">
            <div class="col">
                <h1 class="display-3 text-center"><b><i>Bienvenue sur le Bateau-Pirate!</i></b></h1>
                <hr class="my-2"><br>
                <p><i>Welcome on board! Une multitude de Cd aux meilleurs prix vous attendent au sein de
                notre rayon . Et cela, aussi bien du côté du neuf que des produits Bateau-Pirate occasion.</i></p>
                </div>
            </div>
    </div>
</div>

<div class="container-fluid text-center">
    <h2 class="text-white"><u>Notre dernier arrivage</u></h2>
    <div class="cardsBlock">';
    foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie ORDER BY D.id DESC LIMIT 0,5")as $values){
        $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
    }
    
 $contenu.='</div>
</div>';

    $texte = array("contenu" => $contenu) ;
    ?>