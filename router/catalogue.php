<?php

$contenu = '
<h1 class="display-3 text-center"><b>Catalogue</b></h1><br>
<div>
    <h3 class="text-white"><u>Trier:</u></h3>
    <form method="POST">
        <input type="submit" name="cmd" value="Par artiste" class="btn-success">
        <input type="submit" name="cmd" value="Par album" class="btn-success">
        <input type="submit" @click.prevent="triCateg =! triCateg" value="Par catégorie" class="btn-success">

        <div v-show="triCateg" class="ajaCateg">
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
        </div>
    </form>
</div>
';
$contenu .= '<div class="cardsBlock">';

if(empty($_POST['cmd'])){
    foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie")as $values){
        $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
    }
}else{
    $cmd = $_POST['cmd'];
    switch ($cmd){
        case 'Par artiste':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie ORDER BY A.nom")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
                    }        
        break;

        case 'Par album':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie ORDER BY D.album")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
                    }        
        break;

        case 'Rock':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 1")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Soul':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 3")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Rap':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 5")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Hip-Hop':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 6")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Musique Française':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 8")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Electro':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 9")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Pop':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 10")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Musique de film':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 7")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Reggae':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 2")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;
        case 'Musique du monde':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie, C.id AS idC FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie AND C.id = 11")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }        
        break;

        case 'All':
            foreach($dbd->query("SELECT D.image, A.nom, D.id, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie")as $values){
                $contenu.= '<div class="cards"><a href="index.php?page=details&id='.$values['id'].'" class="text-center"><img src="assets/images/'.$values['image'].'" alt=""><br><p class="text-center">'.$values['album']." <br><u>Artiste(s):</u><br> ".$values['nom'].'</p></a><a href="index.php?page=reserv&id='.$values['id'].'"><button >Reserver</button></a></div>';
            }
        break;
    
    }
    
}


$contenu.= "</div>";
$texte = array("contenu"=>$contenu) ;



?>