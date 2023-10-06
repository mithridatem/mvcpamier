<?php
    $error ="";
    $articles = [];
    include './model/article.php';
    //logique :
    //tester si on à des articles (variable articles si elle est différent de vide)
    if(!empty(getAllArticle($bdd))){
        $articles = getAllArticle($bdd);
    }
    else {
       $error = "Il n'y a pas d'article en BDD";
    }
    include './vue/allArticle.php';