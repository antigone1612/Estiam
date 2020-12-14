<?php
include "class/autoload.php";
MyPDO::setConfiguration('mysql:host=localhost;dbname=estiam;charset=utf8', 'root', '');
$pdo = MyPDO::getInstance();
$stmt = $pdo->prepare('SELECT * from artist');
$stmt->execute();
$donnees = $stmt-> fetchAll();
//2e requete
$stmt2 = $pdo->prepare('SELECT COUNT(*) from album WHERE artistId = ?');



foreach ($donnees as $donnee){
    $stmt2->execute(array($donnee["id"]));
    $resultat = $stmt2-> fetch(PDO::FETCH_NUM);
    echo "<p>Nom{$donnee['name']}</p>\n";
    echo "<p>Nbr Album :{$resultat[0]}</p>\n";
  

}
?>