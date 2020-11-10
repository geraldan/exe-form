<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=form','root','');

$id = $_REQUEST['numContact'];
$id = intval($id);
$pdoStat = $objetPdo->prepare("DELETE FROM user WHERE id= $id ");
$pdoStat->execute();
//chaine de caractere qui previen de la redirection
echo 'Veuiller attendre vous aller être rediriger.';
//delai de 3 seconde pour la redirection
header ('Refresh: 3;URL=affichage_bdd.php');
?>