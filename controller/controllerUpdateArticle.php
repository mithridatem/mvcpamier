<?php
    $error = "";
    include './model/article.php';
    if(isset($_GET['id']) AND !empty($_GET['id']) AND isset($_GET['title']) AND !empty($_GET['title'])
    AND isset($_GET['content']) AND !empty($_GET['content'])AND isset($_GET['date']) AND !empty($_GET['date'])){
        //tester si le fomulaire le submit
        if(isset($_POST['submit'])){
            //tester si les champs sont remplis
            if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['creation_date'])){
                updateArticleById($bdd,$_POST['title'], $_POST['content'], $_POST['creation_date'], $_GET['id']);
                $error = "l'article à été modifié";
                header("Refresh:2;url=./allarticle");
            }
            //test si les champs ne sont pas remplis
            else{
                $error = "Veuillez remplir les champs du formulaire";
            }
        }
    }
    else{
        header("location:./allarticle");
    }
    //tester si les champs ne sont pas remplis 
    include './vue/updateArticle.php';
?>