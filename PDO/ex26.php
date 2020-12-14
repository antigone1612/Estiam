<?php
require_once 'class/MyPDO.class.php';
MyPDO::setConfiguration('mysql:host=localhost;dbname=estiam;charset=utf8', 'root', '');
$stmt = MyPDO::getInstance()->prepare(<<<SQL
SELECT name
FROM artist
ORDER BY name
SQL
);
$stmt->execute();
while (($ligne = $stmt->fetch()) !== false) {
echo "<p>{$ligne['name']}</p>\n";
}