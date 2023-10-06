<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
</head>
<body>
    <h1>Liste des articles :</h1>
    <?php foreach ($articles as $key => $value):?>
        <h2><?=$value['title']?></h2>
        <p><?=$value['content']?></p>
        <?php $date = new DateTimeImmutable($value['creation_date']);?>
        <p><?=$date->format('d/m/Y')?></p>
        <p hidden><?=$value['id']?></p>
    <?php endforeach ?> 
    <p id="error"><?=$error?></p>
</body>
</html>