<?php

$contenu = '
<h1 class="display-4 text-center">Catalogue</h1><br>
<div>
<form method="POST" class="d-flex justify-content-between ajaCateg">
<input type="submit" name="cmd" value="Rock">
<input type="submit" name="cmd" value="Soul">
<input type="submit" name="cmd" value="Rap">
<input type="submit" name="cmd" value="Hip-Hop">
<input type="submit" name="cmd" value="Musique Française">
<input type="submit" name="cmd" value="Electro">
<input type="submit" name="cmd" value="Pop">
<input type="submit" name="cmd" value="Musique de film">
<input type="submit" name="cmd" value="Reggae">
<input type="submit" name="cmd" value="Musique du monde">
<input type="submit" name="cmd" value="All">
</form>
</div>
';
$contenu .= '<div class="cardsBlock">';

if(empty($_POST['cmd'])){
    foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie")as $values){
        $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
    }
}else{
    $cmd = $_POST['cmd'];
    switch ($cmd){
        case 'Rock':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 1")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Soul':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 3")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Rap':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 5")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Hip-Hop':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 6")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Musique Française':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 8")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Electro':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 9")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Pop':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 10")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Musique de film':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 7")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Reggae':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 2")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Musique du monde':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 11")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;

        case 'All':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['album']." <br>de(s)<br> ".$values['nom'].'</a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }
        break;
    
    }
    
}
/*foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie")as $values){
    $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'"><img src="assets/images/'.$values['image'].'" alt=""></a><br>'.$values['nom']." est l'interprete de l'album ".$values['album']." dans la categorie ".$values['categorie'].'<a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
}*/


$contenu.= "</div>";
$texte = array("contenu"=>$contenu) ;



?>