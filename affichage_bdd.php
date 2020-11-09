<?php



$connect = new PDO('mysql:host=localhost;dbname=form','root','');

$pdoStat = $connect->prepare('SELECT * FROM user');

$pdoStat->execute();

$information = $pdoStat->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultat formulaire</title>
</head>
<body>
    <ul class="liste">
        <?php foreach ($information as $contact):?>
        <div class="boite">
            <li>
                <div class="nom">
                    <p>Nom :
                    <?= $contact[ 'name'] ?> </p>
                </div>
                <div class="prenom">
                    <p> Prénom :
                    <?= $contact['first_name'] ?> </p>
                </div>
                <div class="mail">
                    <p> mail :
                    <?= $contact[ 'mail']?></p>
                </div>
                <div class="adress">
                    <p> adresse :
                    <?= $contact[ 'adress']?></p>
                </div>
                 <div class="city">
                    <p> city :
                    <?= $contact[ 'city']?></p>
                </div>
                <div>
                    <a href="suprimer.php?numContact=<?= $contact['id'] ?> " style="color: red">Supprimer</a>
                    <a href="form_modif.php?numContact=<?= $contact['id'] ?> "style="color: red">Modifier</a>
                </div>
            </li>

        </div>
        <?php endforeach; ?>
    </ul>

</body>
</html>
