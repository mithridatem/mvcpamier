<?php
    $error = "";
    include './model/article.php';
    //tester si le paramètre $_GET['id'] existe et est non vide
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        deleteArticleById($bdd, $_GET['id']);
        $error = "L'article à été supprimé";
        header("Refresh:1;url=./allarticle");
    }
    //test si $_GET['id'] n'existe pas ou est vide
    else{
        header('location: ./allarticle');
    }
    include './vue/deleteArticle.php';
?>