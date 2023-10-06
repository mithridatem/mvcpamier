<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Liste des articles</title>
</head>
<body>
    <?php include './vue/navbar.php'; ?>
    <h1>Liste des articles :</h1>
    <?php foreach ($articles as $key => $value):?>
        <h2><?=$value['title']?></h2>
        <p><?=$value['content']?></p>
        <?php $date = new DateTimeImmutable($value['creation_date']);?>
        <p><?=$date->format('d/m/Y')?></p>
        <a href="./updatearticle?id=<?=$value['id']?>"><i class="fa-solid fa-pen"></i></a>
        <a href=""><i class="fa-solid fa-trash"></i></a>
    <?php endforeach ?> 
    <p id="error"><?=$error?></p>
</body>
</html>