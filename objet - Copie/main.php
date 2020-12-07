<?php
include "Webpage.php";
$body = <<<HTML
<table>
<thead>
    <tr>
        <th colspan="2">WebPage</th>
        <tr><td><hr></td></tr>
    </tr>
</thead>
<tbody>
    <tr><td>- &#36;title</td></tr>
    <tr><td>- &#36;body</td></tr>
    <tr><td>- &#36;header</td></tr>
    <tr><td><hr></td></tr>
    <tr><td>+ __construct(&#36;title)</td></tr>
    <tr><td>+ appendCss(&#36;css)</td></tr>
    <tr><td>+ appendJs(&#36;js)</td></tr>
    <tr><td>+ appendToHead(&#36;str)</td></tr>
    <tr><td>+ appendJsUrl(&#36;js)</td></tr>
    <tr><td>+ appendCssUrl(&#36;css)</td></tr>
    <tr><td>+ appendContent(&#36;content)</td></tr>
    <tr><td>+  buildPage()</td></tr>
</tbody>
</table>
HTML;

$css = <<<CSS
tr {
    border: 1px solid rgb(15, 15, 15);
}
table {
    border : 1px solid black;
}
CSS;
$page = new WebPage("Antigone");
$page->appendCss($css);
$page->appendContent($body);
echo $page->buildPage();


?>