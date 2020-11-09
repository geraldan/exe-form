<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=form','root','');

$id = $_REQUEST['numContact'];
$id = intval($id);
$pdoStat = $objetPdo->prepare("DELETE FROM user WHERE id= $id ");
$pdoStat->execute();

?>