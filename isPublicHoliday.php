<?php 
function isPublicHoliday(int $day, int $month){
// dates fériées fixes
$EstFerie = "Jour normal";
if($day == 01 && $month == 01) $EstFerie = 1; // 1er janvier
if($day == 01 && $month == 5) $EstFerie = 1; // 1er mai
if($day == 8 && $month == 5) $EstFerie = 1; // 8 mai
if($day == 14 && $month == 7) $EstFerie = 1; // 14 juillet
if($day == 15 && $month == 8) $EstFerie = 1; // 15 aout
if($day == 01 && $month == 11) $EstFerie = 1; // 1 novembre
if($day == 11 && $month == 11) $EstFerie = 1; // 11 novembre
if($day == 25 && $month == 12) $EstFerie = 1; // 25 décembre
if ($EstFerie == 1) $EstFerie = "Jour Férié !";

return $EstFerie;
}