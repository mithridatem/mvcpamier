<?php
    //import des ressources
    include './utils/bddConnexion.php';
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    switch ($path) {
        case '/MVCPAMIER-1/':
            include './controller/controllerHome.php';
            break;
        case '/MVCPAMIER-1/addarticle':
            include './controller/controllerAddArticle.php';
            break;
        case '/MVCPAMIER-1/allarticle':
            include './controller/controllerAllArticle.php';
            break;
        case '/MVCPAMIER-1/updatearticle':
            include './controller/controllerUpdateArticle.php';
            break;
        case '/MVCPAMIER-1/deletearticle':
            include './controller/controllerDeleteArticle.php';
            break;
        default:
            include './controller/controller404.php';
            break;
    }
?>
