<?php
// Réglage des paramètre d'affichage en Français
setlocale(LC_ALL, 'fr_FR.utf8') ;
// Les jours de la semaine
$semaine = array('L', 'M', 'M', 'J', 'V', 'S', 'D') ;
// Le premier jour du mois courant sous forme de timestamp
$date = mktime(0, 0, 0, date("n"), 1, date("Y")) ;
// Nom du mois et année
$nom_mois = strftime("%B %Y", $date) ;
// Numéro du premier jour du mois (1:lundi, 7:dimanche)
$premier_jour_mois = date('N', $date) ;
// Nombre de jours dans le mois
$nombre_jours_mois = date('t', $date) ;