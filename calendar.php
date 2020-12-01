<?php
include "calendarFunction.php";
include "isPublicHoliday.php";
if (isset($_GET['annee'])&& !empty($_GET['annee'])){
    $annee = intval($_GET['annee']);
}
$anneeSuivante = $annee +1;
$anneePrecedente = $annee -1;
$html = <<<HTML
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> My first HTML5 page </title>
        <link rel="stylesheet" media="screen" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <h1 style="text-align : center"> CALENDRIER $annee</h1>
        
    <div class="container">
    
HTML;
    $jour = date("d");
    $mois = date("m");
    $html.= isPublicHoliday($jour,$mois);
    for($i=0; $i<3;$i++){
        $html .= '<div class="row">';
        if($i==0){
            $html .=<<<HTML
            <div class='col-2' style="text-align : center">
            <a href="calendar.php?annee=$anneePrecedente"><img width="50px" src="icone.png" style="transform:scaleX(-1);"><a>
            </div>
HTML;
        }
        else{
            $html .= "<div class='col-2'></div>";
        }
        for ($j = 1; $j<=4; $j++){
            $html .= "<div class='col-2'>";
            $html.=calendar($j+$i*4, $annee, False);
            $html .= "</div>";
        }
        if($i==0){
            $html .=<<<HTML
             <div class='col-2' style="text-align : center">
            <a  class="align-middle" href="calendar.php?annee=$anneeSuivante"><img width="50px" src="icone.png"><a>
            </div>
HTML;
        }
        else{
            $html .= "<div class='col-2'></div>";
        }

        $html .= '</div>';
    }
    $html .= <<<HTML
    </div>
</body>
</html>
HTML;
echo $html;


