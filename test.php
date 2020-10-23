<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bateau-pirate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
    <?php
include "inc/connexion.php";
?>
    <div class="cardsBlock">
        <?php

    foreach($dbd->query("SELECT D.image, A.nom, D.album, C.categorie FROM disques D, artistes A, categories C WHERE A.id = D.artiste AND C.id = D.categorie ORDER BY D.id DESC LIMIT 0,5 ")as $values){
        echo '<div class="cards"><img src="assets/images/'.$values['image'].'" alt=""><br>'.$values['nom']." est l'interprete de l'album ".$values['album']." et de la categorie ".$values['categorie'].'</div>';
        echo "<pre>";
        print_r($values);
        echo "</pre>";
}?>
    </div>
    <?php

?>
    <footer class="container-fluid lex-footer">
        <div class="row">
            <div class="col text-center">
                <b>© Bateau Pirate 2020. All Right Reserved</b>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
        <script src="JS/app.js">
        </script>
</body>

</html>