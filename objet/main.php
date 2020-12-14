<?php
include "Webpage.php";

$page = new WebPage("Antigone");
$page->appendCss("p {font-weight : bold;}");
$page->appendContent("<p>je suis une grenouille</p>");
echo $page->buildPage();


?>