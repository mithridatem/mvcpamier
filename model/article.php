<?php
    //Fonction ajouter un article en BDD
    function addArticle($bdd, $title, $content, $date){
        try {
            //préparation de la requête
           $req = $bdd->prepare('INSERT INTO article (title, content, creation_date)
           VALUES (?,?,?)');
           //bind des paramètres
           $req->bindParam(1, $title, PDO::PARAM_STR);
           $req->bindParam(2, $content, PDO::PARAM_STR);
           $req->bindParam(3, $date, PDO::PARAM_STR);
           //exécution de la requête
           $req->execute();
        } catch (Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
    //Fonction qui retourne un article
    function getArticle($bdd, $title, $content, $date){
        try {
            $req = $bdd->prepare("SELECT id, title, content, creation_date FROM article WHERE
            title = ? AND content = ? AND creation_date = ?");
            $req->bindParam(1, $title, PDO::PARAM_STR);
            $req->bindParam(2, $content, PDO::PARAM_STR);
            $req->bindParam(3, $date, PDO::PARAM_STR);
            //exécution de la requête
            $req->execute();
            return $req->fetch(PDO::FETCH_ASSOC);
        } 
        catch (Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
    //Fonction qui retourne tous les articles
    function getAllArticle($bdd){
        try {
            $req = $bdd->prepare('SELECT id, title, content, creation_date FROM article');
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
    //Fonction qui met à jour un article
    function updateArticleById($bdd, $title, $content, $date, $id){
        try {
            $req = $bdd->prepare('UPDATE article set title = ?, content = ?,creation_date = ? WHERE id = ?');
            $req->bindParam(1, $title, PDO::PARAM_STR);
            $req->bindParam(2, $content, PDO::PARAM_STR);
            $req->bindParam(3, $date, PDO::PARAM_STR);
            $req->bindParam(4, $id, PDO::PARAM_INT);
            $req->execute();
        } catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
    //Fonction qui supprime un article par son id
    function deleteArticleById($bdd, $id){
        
    }