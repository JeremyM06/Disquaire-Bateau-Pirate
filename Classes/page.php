<?php

class Page
{

    private $template;
    private $personnalisations;

    function __construct()
    {
        $this->template = "accueil.twig";
    }
    function __toString()
    {
        // lire le template
        $contenu = file_get_contents($this->template);

        foreach ($this->personnalisations as $key => $value) {
            $contenu = str_replace("{{ $key }}", $value, $contenu);
        }
        return $contenu;
    }
    function prepare()
    {
        global $dbd;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = "home";
        }
        include "router/$page.php";
        $this->personnalisations = $texte;
    }
}
