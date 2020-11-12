<?php
$pdo = new PDO('mysql:dbname=form;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


$id = $_REQUEST['numContact'];
$id = intval($id);
$pdoStat = $pdo->prepare("SELECT * FROM user WHERE id= $id ");
$pdoStat->execute();
$information = $pdoStat->fetchAll();
?>



<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Formulair</title>
</head>
<body>
<?php foreach ($information as $contact):?>
<form action="modifier.php?id=<?= $contact['id'] ?>" method="POST">
    <H1>FORMULAIRE DE CONTACT</H1>
    <div class="border">


        <div class="textBox">
            <label>Prénom :</label>
            <input value="<?= $contact[ 'first_name'] ?>" type="text" name="first_name">
        </div>
        <div class="textBox">
            <label >Nom :</label>
            <input value="<?= $contact[ 'name'] ?>" type="text" name="name">
        </div>
        <div class="textBox">
            <label>Mail :</label>
            <input value="<?= $contact[ 'mail'] ?>" type="email" name="mail">
        </div>
        <div class="textBox">
            <label>Adresse :</label>
            <input value="<?= $contact[ 'adress'] ?>" type="text" name="adress">
        </div>
        <div class="textBox">
            <label>Ville :</label>
            <input  value="<?= $contact[ 'city'] ?>" type="text" name="city">
        </div>

            <input type="submit" class="send">

    </div>
</form>
<?php endforeach; ?>
</body>


</html>

