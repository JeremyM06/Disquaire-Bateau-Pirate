<?php
$connexion='mysql:host=localhost;dbname=disquaire';
$user="web001";
$pass="topsecret";
try{
    $dbd = new PDO($connexion, $user, $pass);
    $dbd->query('SET NAMES UTF8');// pour afficher les nom correctement sans erreur d'accent etc.

}catch (PDOException $e){
    print "Grosse catastrophe!:".$e->getMessage()."<br>";
    die();
}
