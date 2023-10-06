<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
</head>
<body>
    <h1>Liste des articles :</h1>
    <?php foreach ($articles as $key => $value):?>
        <!-- Exemple de traitement -->
        <!-- mode tableau (FETCH_ASSOC)
        <h2><?=$value['titre']?></h2>-->
        <!-- mode objet (FETCH_OBJ) 
        <h2><?=$value->title?>-->
        <!-- Affichage de la liste des articles (traitement)-->
    <?php endforeach ?> 
    <p id="error"><?=$error?></p>
</body>
</html>