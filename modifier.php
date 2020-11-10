<?php
$pdo = new PDO('mysql:dbname=form;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$name = $_POST['name'];
$first_name = $_POST['first_name'];
$mail = $_POST['mail'];
$city = $_POST['city'];
$adress = $_POST['adress'];
$id = $_GET['id'];
$id = intval($id);


$sql = $pdo->prepare( "UPDATE user SET name = '$name', first_name = '$first_name', mail = '$mail', adress = '$adress', city = '$city' WHERE id = '$id' ");

$sql->execute();

header ('location: http://localhost/exe-form/affichage_bdd.php');