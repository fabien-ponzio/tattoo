<?php 
require_once('class_reservation.php');
require_once('dbconnect.php'); 
class Planning
{
    public $date; 
    public $month; 
    public $year; 
    public $daysOfWeek; 
    public DateTime $start; 
    public DateTime $end; 

    // génération du calendrier au mois
    public function build_calendar($month, $year){
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
        $calendar.="</tr><tr>"; 

        //$dayOfWeek va s'assurer que le tableau contient bien 7 jours 
        if ($dayOfWeek > 0) {
            for ($i=0; $i < $dayOfWeek ; $i++) { 
                $calendar.="<td></td>"; 
            }
        }

        // compteur de jours 
        $currentDay = 1;

        // on récupère le numéro du mois

        $month = str_pad($month,2,"0",STR_PAD_LEFT); 

        while($currentDay <= $numberDays){
            if ($dayOfWeek ==7) {
                $dayOfWeek = 0; 
                $calendar.="<tr></tr>";
            } 
            $currentDayRel = str_pad($currentDay,2,"0",STR_PAD_LEFT); 
            $date = "$year-$month-$currentDayRel"; 
        //    $currentDayRel++;

            if($datetoday == $date ){
                $calendar.="<td><h4>$currentDay</h4>";
            }else {
                // var_dump($currentDay);
                $calendar.="<td><h4>$currentDay</h4>";
               
            }
            $calendar.="</td>"; 
            $currentDay++;
            $dayOfWeek++;
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
    

    // génération du semainier 
    public function displayHtmlTable(DateTime $inputDate){
        require_once('class_reservation.php');
        // on clone parce que on abesoin de dupliquer l'objet DATE
        $date = clone $inputDate; 

        // Je créée les colonnes vides
        $day = ['']; 
        $day[] = clone $date; // je clone

        // je boucle les colonnes
        for ($i = 1; $i <= 6; $i++){
            // on ajoute 1 jour au premier jour
            $day[] = clone $date->add(new DateInterval('P1D')); 
        }


        //$reservation est un tableau vide 
        $reservation=[]; 

        // CONNEXION A LA BDD
        $db = new Database;
        $conn = $db->connect(); 
        
        $reservationList = new Reservation($date);
        $result = $reservationList->getByDate($day[1], $date->add(new DateInterval('P1D')));

        var_dump($result);

        foreach ($result as $reservation) {
            
            $date = new Reservation; 

            $debut = $date->dateFromStringToDateTimeObject($date); 
            $fin = $date->dateFromStringToDateTimeObject($date);
            var_dump($fin);

            var_dump($date); 
            $interval = date_diff($debut, $fin);
            var_dump($interval);
            //transformer $date en objet datetime et trouver le type d'objet de $date; 
            $reservation->setHours($fin->diff($debut)->format('%h'));
            echo $reservation;  
        }

        // construction d'un tableau d'heures 
        for ($i=8; $i < 19; $i++) { 
            $hour = $i . ':00'; 
            if (strlen($hour) == 4) {
                $hour = '0' . $hour; 
            }
            $H[] = $hour; 
        }

        // TABLEAU HTML 
        echo '<table class=""><thead><tr>'; 
        foreach ($day as $days){
            if (empty($days)) {
                echo'<th></th>'; 
            }else {
                echo'<th>' . $days->format('D j/m/y') . '</th>';
            }
        }
        echo '</tr></thead><tbody>'; 
        foreach ($H as $hour){
            echo'<tr>'; 
            var_dump($day);
            foreach ($day as $days) {
                if(is_object($days)){
                    $currentDateTime = $days->format('Y/m/d') . ' ' . $hour; 
                }
                if(empty($days)){
                    echo"<th>$hour</th>"; 
                }else {
                    $html = ''; 
                }
                foreach ($reservationList as $reservation) {
                    $currentDateTime = $days->format('Y/m/d') . ' ' . $hour; 
                    if($this->isDateInBetween($currentDateTime, [$reservation->debut(), $reservation->fin()])){
                        if ($reservation->counter() == 0) {
                            $html .= '<td rowspan="' .$reservation->hours() . '"class="">'; 
                            $html .= '<a class="text-decoration-none" href=reservation.php?=' .$reservation->id() . '>'; 
                            $html .= '<div class="" href=reservation.php?=' .$reservation->titre() . '<br />'; 
                            $html .= 'Réservé par <span>' .$reservation->login() . '</span></div>'; 
                            $html .= '</a></td>';
                        }else {
                            $html = 'no_display'; 
                        }
                        $reservation->increment(); 
                    }; 
                }
                if ($html == 'no_display') {
                }elseif (empty($html)) {
                    echo"<td></td>"; 
                }else {
                    echo $html; 
                }
            }
            echo '</tr>'; 
        }
        echo "</tbody></table>"; 
    } 
    
    public function isDateInBetween($date, array $interval){
        $date = new Reservation;
        $date->dateFromStringToDateTimeObject($date); 

        $intStartDate = new Reservation;
        $intStartDate->dateFromStringToDateTimeObject($interval[0]);

        $intEndDate = new Reservation;
        $intEndDate->dateFromStringToDateTimeObject($interval[1]);


       if (($intStartDate <= $date) && ($date < $intEndDate)) {
           return TRUE;
       } else {
           return FALSE; 
       }

    }
}

?>
