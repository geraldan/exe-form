<?php
//connection a la base de donner
$pdo = new PDO('mysql:dbname=form;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
//recuperation du donner de formulaire

$form = $_POST['first_name'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$adress = $_POST['adress'];
$city = $_POST['city'];




// inserer dans la table

$sql =" INSERT INTO user(name, first_name, mail, adress, city) 
VALUES
('$name', '$form', '$mail', '$adress', '$city')";

//execution de la requete
$pdo->exec($sql);
?>
