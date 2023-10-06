<?php
    include './utils/bddConnexion.php';
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    switch ($path) {
        case '/evalphp/':
            include './controller/controllerHome.php';
            break;
        case '/evalphp/addarticle':
            include './controller/controllerAddArticle.php';
            break;
        default:
            include './controller/controller404.php';
            break;
    }
?>
