<?php
$html = <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>UML</title>
    <link rel="stylesheet" media="screen" href="style.css">
  </head>
  <body>
  <table>
    <thead>
        <tr>
            <th colspan="2">WebPage</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>- &#36;title</td></tr>
        <tr><td>- &#36;link</td></tr>
        <tr><td>- &#36;css</td></tr>
        <tr><td>- &#36;body</td></tr>
        <tr><td>- &#36;header</td></tr>
        <tr><td>+ afficher()</td></tr>
        <tr><td>+ appendCss()</td></tr>
        <tr><td>+ appendCssUrl()</td></tr>
        <tr><td>+ appendToHead()</td></tr>
        <tr><td>+ appendJs()</td></tr>
        <tr><td>+ appendJsUrl()</td></tr>
        <tr><td>+ appendContent()</td></tr>
    </tbody>
</table>

    
HTML;
//traitement
$table = null;
$html .= <<<HTML
</body>
</html>
HTML;
echo $html;