<?php 
$body .= <<<HTML
  <hr>
    <form action="calendar" id="formulaire" method="GET">
        <fieldset>
            <legend style="background-color: plum; font-size:20px"> Choisir Année </legend>
            <div>
                <input type="numeric" name="annee"  maxlength="4"/>
                <br>
            </div>
        <div class="button">
            <button type="submit">Soumettre formulaire</button>
        </div>
    </form>
    
HTML;
$page = new WebPageWithBootstrap("Calandrier");
$page->appendCss("th,td{
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
$page->appendContent($body);
echo $page->buildPage();

