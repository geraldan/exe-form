<?php
$pdo = new PDO('mysql:dbname=form;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$name = $_POST['name'];
//$id = $_POST['id'];
//var_dump($id);
//$id = intval($name);
$id = 1;

$sql = $pdo->prepare( "UPDATE 'user' SET name = '$name' WHERE id = '$id' ")->execute();
