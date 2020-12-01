<?php
function calendar(int $month, int $year, bool $showYear) {
    // Réglage des paramètre d'affichage en Français
    setlocale(LC_ALL, 'fr_FR.utf8');

    // Les jours de la semaine
    $semaine = array('L', 'M', 'M', 'J', 'V', 'S', 'D');

    // Le premier jour du mois courant sous forme de timestamp
    $date = mktime(0, 0, 0, $month, 1, $year);
    if($showYear){
        // Nom du mois et année
        $nom_mois = strftime("%B %Y", $date);
    }
    else{
        // Nom du mois et année
        $nom_mois = strftime("%B", $date);
    }
    

    // Numéro du premier jour du mois (1:lundi, 7:dimanche)
    $premier_jour_mois = date('N', $date);

    // Nombre de jours dans le mois
    $nombre_jours_mois = date('t', $date);

    $html = <<<HTML
            <table>
                <tr>
                   <th colspan="7">$nom_mois</th>
                </tr>
                <tr>
HTML;

    foreach ($semaine as $jour) {
        $html .= <<<HTML
                <th>$jour</th>
HTML;

    }
    $nombre_semaines = ceil((($nombre_jours_mois - (8 - $premier_jour_mois)) / 7) + 1);
    $jour_semaine = date('N', $date);
    $jour = 1;
    $j = 1;

    for ($i = 0; $i < $nombre_semaines; $i++) {
        $html .= "<tr>";

        while ($jour_semaine <= 7 and $jour <= $nombre_jours_mois) {
            while ($j < $premier_jour_mois) {
                $j++;
                $html .= "<td></td>";
            }
            if ($jour_semaine == 6 || $jour_semaine == 7){
                if (isPublicHoliday($jour, date("n",$date), date("y",$date)) == "Jour Férié !"){
                    $html .= "<td style = 'color : red' class='weekEnd'>$jour</td>";
                } else {
                    $html .= "<td class='weekEnd'>$jour</td>";
                }
            }
            else{
                if (isPublicHoliday($jour, date("n",$date), date("y",$date)) == "Jour Férié !"){
                    $html .= "<td style = 'color : red'>$jour</td>";
                } else {
                    $html .= "<td>$jour</td>";
                }
            }

            $jour++;
            $jour_semaine++;

        }
        if ($jour > $nombre_jours_mois){
            while ($jour_semaine <= 7){
                $html .= "<td></td>";
                $jour_semaine++;
            }
        }
        $jour_semaine = 1;
        $html .= "</tr>";
    }

    $html .= <<<HTML
                </tr>
                <tr></tr>
            </table>
    
        
HTML;

    return $html;

}
