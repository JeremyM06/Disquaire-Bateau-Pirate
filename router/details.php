<?php

$contenu="";  

$contenu.='<div class="detailBox">
    <h1> {{ titre }} </h1>
    <div>
        <img src="" alt="">
        <p> {{ descriptif }} </p>
    </div>
    <form action="GET">
        <label for="com">Laissez un commentaire</label>
        <input type="text" id="com">
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
    </form>

</div>';

$texte = array("contenu"=>$contenu) ;
