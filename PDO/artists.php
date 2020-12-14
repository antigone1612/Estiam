<?php
include "class/autoload.php";
$artistes = new Artist();

$body ='<h1 style="text-align : center"> Artistes</h1>';

    //on affiche tout les artistes
    foreach ($artistes::getAll() as $donnee){
    $body.="<a href='albums.php?idArtist={$donnee['id']}'>{$donnee['name']}</a><br>";
    }
  
        
//génère l'affichage
$page = new WebPage("Artistes");
$page->appendContent($body);
echo $page->buildPage();