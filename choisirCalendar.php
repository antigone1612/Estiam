<?php 
$html = <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Php E2</title>
    <link rel="stylesheet" media="screen" href="css/style.css">
  </head>
  <body>
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
//traitement
$table = null;
$html .= <<<HTML
<p>$table</p>
</body>
</html>
HTML;
echo $html;