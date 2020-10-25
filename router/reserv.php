<?php
foreach($dbd->query("SELECT * FROM disques D, artistes A WHERE D.id = $_GET[id] AND D.artiste = A.id")as $values){
$contenu ='<div class="container">
    <div class="lexform">
      <h1><b>RESERVATION</b></h1>
      <div class="row d-flex justify-content-around align-items-center">
        <div class="col-sm-3">
            <img src="assets/images/'.$values['image'].'" alt="image album">
        </div>

        <transition name="fondu" class="row">    
        <div class="col-md-6 offset-sm-2 mjjFormValid" v-show="!show">
          <h2>Votre réservation a bien été enregistrée.<br> À très vite<br> 📀💿 😊 💿📀</h2>
          <button @click="show =! show"  type="button" class="btn btn-primary">Retour</button>
    
        </div>
        </transition>
        <transition name="fondu" class="row">
        <form class="col-sm-6" @submit.prevent="show =! show, clear()" v-show="show">
            <h5>Reservez dès maintenant <b> '.$values['album'].'</b> de(s) <b>'.$values['nom'].'</b> et récupérez le demain après midi en boutique</h5>
            <div class="form-group">
                <label for="email">E@mail</label>
                <input v-model="mail" @keyup="isAMail(mail)" :class="{mjjalertform : mailShow}" type="email" class="form-control" id="email" name="name" aria-describedby="emailHelp">
                <span class="textFormAlert" v-show="mailShow">Le mail n\'est pas conforme</span>
                </div>
            <div class="form-group">
                <label for="Nom">Votre nom</label>
                <input v-model="name" @keyup="isAName(name)" type="text" class="form-control" :class="{mjjalertform : nameShow}" id="Nom">
                <span class="textFormAlert" v-show="nameShow">Le nom n\'est pas conforme</span>
                </div>
            <button type="submit" class="btn btn-warning ajabtn" :disabled="isDisabled">Envoyer</button>
        </form>
        </transition>
      </div>
    </div>
</div>';
}


$texte = array("contenu"=>$contenu) ;
?>
