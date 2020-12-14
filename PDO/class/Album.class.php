<?php
include "autoload.php";

class Album extends Entity{
  
    //récupère un album
    public static function getById($id){
        MyPDO::setConfiguration('mysql:host=localhost;dbname=estiam;charset=utf8', 'root', '');
        $pdo = MyPDO::getInstance();
        $stmt = $pdo->prepare('SELECT * from album WHERE id = ?');
        $stmt->execute(array($id));
        $donnees = $stmt-> fetch(PDO::FETCH_NUM);
        return $donnees;

    }
    //récupère tout les albums
    public static function getAll(){
        MyPDO::setConfiguration('mysql:host=localhost;dbname=estiam;charset=utf8', 'root', '');
        $pdo = MyPDO::getInstance();
        $stmt = $pdo->prepare('SELECT * from album');
        $stmt->execute();
        $donnees = $stmt-> fetchAll();
        return $donnees;
    }

    //récupère les albums d'un artistes donné
    public static function getByArtistId($artistId){
        MyPDO::setConfiguration('mysql:host=localhost;dbname=estiam;charset=utf8', 'root', '');
        $pdo = MyPDO::getInstance();
        $stmt = $pdo->prepare('SELECT * from album WHERE artistId=?');
        $stmt->execute(array($artistId));
        $donnees = $stmt-> fetchAll();
        return $donnees;
    }

    public function getYear(){
    
    }

    public function getGenreId(){

    }

    public function getArtistId(){

    }

    public function getCoverId(){
        
    }

   
}