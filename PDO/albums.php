<?php
include "class/autoload.php";

if (!isset($_GET['idArtist'])|| empty($_GET['idArtist'])){
    echo "Oups ! Il semble qu'il manque un paramètre...";
   return ; 
}
$id = intval($_GET['idArtist']);
$artistes = new Artist();
$album = new Album();

$body ='<h1 style="text-align : center"> Artiste</h1>';
$body.="<p style='text-align : center;text-decoration: underline;'>{$artistes->getById($id)[1]}</p>\n";
$body.='<h3 style="text-align : center"> Ces albums</h3>';

    //on affiche tout les albums d'un artiste
    foreach ($album::getByArtistId($id) as $donnee){
    $body.="<p style='text-align : center'>{$donnee['name']}</p>\n";
    }
  
        
//génère l'affichage
$page = new WebPage("Album");
$page->appendContent($body);
echo $page->buildPage();