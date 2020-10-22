<?php
include "inc/connexion.php";
include "Classes/page.php";

$maPage =new Page();

$maPage->prepare();

echo $maPage;

?>