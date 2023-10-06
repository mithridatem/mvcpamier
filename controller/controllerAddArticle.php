<?php
    $error = "";
    include './model/article.php';
    //test si le formulaire est submit
    if(isset($_POST['submit'])){
        //test si les champs sont tous remplis
        if(!empty($_POST['title'])AND !empty($_POST['content'])AND !empty($_POST['creation_date'])){
            //tester si l'article existe 
            if(!empty(getArticle($bdd, $_POST['title'],$_POST['content'], $_POST['creation_date']))){
                $error = "L'article existe déja";
            }
            //tester si l'article n'existe pas
            else{
                //tester si l'article n'existe pas
                addArticle($bdd, $_POST['title'], $_POST['content'], $_POST['creation_date']);
                $error = "L'article à été ajouté en BDD";
            }
        }
        //test les champs ne sont pas tous remplis
        else{
            $error = "Veuillez remplir les champs du formulaire";
        }
    }
    //import des ressources
    include './vue/form.php';