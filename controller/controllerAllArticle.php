<?php
    $error ="";
    $articles = [];
    include './model/article.php';
    //logique :
    //sticker le résultat de la fonction getAllArticle() dans la variable articles (tableau)
    //tester si on à des articles (variable articles si elle est différent de vide)
        //stocker les articles dans la variables $articles (tableau)
    //tester si on à aucun articles
        //afficher un message d'erreur, 
    include './vue/allArticle.php';