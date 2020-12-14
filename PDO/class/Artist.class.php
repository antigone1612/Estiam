<?php
include "class/autoload.php";
class Artist extends Entity{
  
    //récupère un artiste
    public static function getById($id){
        MyPDO::setConfiguration('mysql:host=localhost;dbname=estiam;charset=utf8', 'root', '');
        $pdo = MyPDO::getInstance();
        $stmt = $pdo->prepare('SELECT * from artist WHERE id = ?');
        $stmt->execute(array($id));
        $donnees = $stmt-> fetch(PDO::FETCH_NUM);
        return $donnees;

    }
    //récupérer tout les artistes
    public static function getAll(){
        MyPDO::setConfiguration('mysql:host=localhost;dbname=estiam;charset=utf8', 'root', '');
        $pdo = MyPDO::getInstance();
        $stmt = $pdo->prepare('SELECT * from artist');
        $stmt->execute();
        $donnees = $stmt-> fetchAll();
        return $donnees;
    }

    //retourne albums de l'artiste
    public function getAlbums($id){
        MyPDO::setConfiguration('mysql:host=localhost;dbname=estiam;charset=utf8', 'root', '');
        $pdo = MyPDO::getInstance();
        $stmt = $pdo->prepare('SELECT * from album WHERE artistId=?');
        $stmt->execute(array($id));
        $donnees = $stmt-> fetchAll();
        return $donnees;
}

   
}