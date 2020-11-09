
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
<form action="base.php" method="POST">
    <H1>FORMULAIRE DE CONTACT</H1>
        <div class="border">
            <div class="textBox">
                 <label>Prénom :</label>
                 <input type="text" name="first_name">
            </div>
            <div class="textBox">
                <label >Nom :</label>
                <input type="text" name="name">
            </div>
            <div class="textBox">
                <label>Mail :</label>
                <input type="email" name="mail">
            </div>
            <div class="textBox">
                <label>Adresse :</label>
                <input type="text" name="adress">
            </div>
            <div class="textBox">
                <label>Ville :</label>
                <input type="text" name="city">
            </div>
            <div class="button">
                <input type="submit" value="Envoyer le formulaire">
            </div>
        </div>
</form>
</body>


</html>
