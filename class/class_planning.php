<?php 
class Planning
{
    public $month; 
    public $year; 
    public $daysOfWeek; 

    public function build_calendar($month, $year){
        // ini_set('memory_limit', '1024M');
        //tableau des jours de la semaine
        $daysOfWeek = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');   

        // on récupère les premiers jours du mois
        $firstDayOfMonth = mktime(0,0,0,$month,1,$year); 

        // on récupère le nombre de jours dans ce mois
        $numberDays = date('t', $firstDayOfMonth);

        // on récupère les informations à propos du premier jour du mois 
        $dateComponents = getdate($firstDayOfMonth); 

        // on récupère le nom du mois en cours 
        $monthName = $dateComponents['month']; 

        // on récupère l'index 0-6 du premier jours du mois en cours 
        $dayOfWeek = $dateComponents['wday']; 

        // on récupère la date actuelle 
        $datetoday = date('Y-m-d'); 

        // Génération du tableau HTML
        $calendar = "<table class='table table-bordered'>"; 
        $calendar.="<center><h2>$monthName $year</h2></center>";

        $calendar.="<tr>"; 

        //creation des lignes du calendrier
        foreach ($daysOfWeek as $day) {
            $calendar.="<th class='header'>$day</th>";
        }
        $calendar="</tr><tr>"; 

        //$dayOfWeek va s'assurer que le tableau contient bien 7 jours 
        if ($dayOfWeek > 0) {
            for ($i=0; $i < $dayOfWeek ; $i++) { 
                $calendar.="<td></td>"; 
            }
        }

        // compteur de jours 
        $currentDay = 1;

        // on récupère le numéro du mois

        $month = str_pad($month, 2, "O", STR_PAD_LEFT); 

        while($currentDay <= $numberDays){
            $currentDayRel = str_pad($currentDay, 2, "O", STR_PAD_LEFT); 
            $date = "$year-$month-$currentDayRel"; 

            $calendar.="<td><h4>$currentDay</h4>";
            $calendar.="</td>"; 
        }
        //incrémentation
        $currentDay++;
        $dayOfWeek++;
        //Complétion de la dernière ligne de la dernière semaine du mois si besoin

        if($dayOfWeek != 7){
            $remainingDays = 7-$dayOfWeek;
            for($i=0; $i<$remainingDays; $i++){
                $calendar.="<td></td>";
            }
        }
        $calendar.="</tr>"; 
        $calendar.="</table>"; 

        echo $calendar; 

    }
    

}

  



?>
