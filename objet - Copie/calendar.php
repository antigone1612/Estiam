<?php
include "Webpage.php";
include "calendarFunction.php";
if (isset($_GET['annee'])&& !empty($_GET['annee'])){
    $annee = intval($_GET['annee']);
}
$anneeSuivante = $annee +1;
$anneePrecedente = $annee -1;
$body = <<<HTML
    <h1 style="text-align : center"> CALENDRIER $annee</h1>
        
        
    <div class="container">
    
HTML;
    for($i=0; $i<3;$i++){
        $body .= '<div class="row">';
        if($i==0){
            $body .=<<<HTML
            <div class='col-2' style="text-align : center">
            <a href="calendar.php?annee=$anneePrecedente"><img width="50px" src="icone.png" style="transform:scaleX(-1);"><a>
            </div>
HTML;
        }
        else{
            $body .= "<div class='col-2'></div>";
        }
        for ($j = 1; $j<=4; $j++){
            $body .= "<div class='col-2'>";
            $body.=calendar($j+$i*4, $annee, False);
            $body .= "</div>";
        }
        if($i==0){
            $body .=<<<HTML
             <div class='col-2' style="text-align : center">
            <a  class="align-middle" href="calendar.php?annee=$anneeSuivante"><img width="50px" src="icone.png"><a>
            </div>
HTML;
        }
        else{
            $body .= "<div class='col-2'></div>";
        }

        $body .= '</div>';
    }
    $body .= <<<HTML
    </div>
HTML;

$page2 = new WebPage("Calandrier");
$page2->addKeyWord('testeur');
$page2->addAuthor("Antigone");
$page2->addDescription("Page qui affiche le calandrier de l'année");
$page2->setLangue('de');
$page2->appendCss("th,td{
    width: 25px;
    border-left: 1px solid black;
    border-right: 1px solid black;
    
}
th{
    background-color: rgb(192, 188, 188);
    text-align: center !important;
}
td {
    text-align: right !important;
    padding-right: 3px !important;
}
.weekEnd{
    background-color: #FF33A4;
}");
$page2->appendContent($body);
echo $page2->buildPage();




