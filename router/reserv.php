<?php
foreach($dbd->query("SELECT * FROM disques D, artistes A WHERE D.id = $_GET[id] AND D.artiste = A.id")as $values){
$contenu ='<div class="container">
    <div class="lexform">
      <h1><b>RESERVATION</b></h1>
      <div class="row d-flex justify-content-around align-items-center">
        <div class="col-sm">
            <img src="assets/images/'.$values['image'].'" alt="image album">
        </div>
        <form class="col-sm">
            <h5>Reservez dès maintenant <b> '.$values['album'].'</b> de <b>'.$values['nom'].'</b> et récupérez le demain après midi en boutique</h5>
            <div class="form-group">
                <label for="email">E@mail</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Votre nom</label>
                <input type="text" class="form-control" id="exampleInputText">
            </div>
            <button type="submit" class="btn btn-warning">Envoyer</button>
        </form>
      </div>
    </div>
</div>';
}


$texte = array("contenu"=>$contenu) ;
?>
