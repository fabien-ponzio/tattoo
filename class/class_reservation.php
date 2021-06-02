<?php
class Reservation
{
public $reservation; 
public $date; 
public DateTime $start; 
public DateTime $end; 

    public function insertEvents(){
        // $insert = "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES (:title, :description, :debut, :fin, :id_user)";
        // $stmt = $db->prepare($insert);
        // $stmt->execute([
        //     ':title'=> htmlentities($_POST['title']),
        //     ':description'=> htmlentities($_POST['description']),
        //     ':debut'=>$dateStart,
        //     ':fin'=>$dateEnd,
        //     ':id_user'=> $_SESSION['id']
        // ]);
        // $_SESSION['succes'] = "Votre reservation a reussi.";
        // }
    }

    public function formatDateForDb($date){
        if (is_string($date)) {
            $date = DateTime::createFromFormat('Y#m#d*H#i#s', $date);
        }
        return $date->format('Y-m-d H:00:00');
    }



    public function get($id){
        $id = (int) $id(); 
        $query = $db->conn->prepare("SELECT * FROM reservation INNER JOIN admin ON id_tatoueur = admin.id WHERE reservation.id = $id");       
        $query->execute(); 
        $reservationInfos = $query->fetch(PDO::FETCH_ASSOC);
        return $this->$reservationInfos;
    }


    public function getByDate(DateTime $start, DateTime $end){
        $start = $this->formatDateForDb($start); 
        $end= $this->formatDateForDb($end); 

        $reservations = []; 
        $db = new Database;
        $db->connect();
    
        $sth = $db->conn->prepare("SELECT id FROM `reservation` WHERE :debut <= `debut` AND `debut` <= :fin;");
        $sth->bindValue(":debut", $start); 
        $sth->bindValue(":fin", $end); 
        $sth->execute(); 
        $result = $sth->fetchAll(PDO::FETCH_COLUMN); 

        foreach ($result as $id) {
            $reservations[] = $this->get($id);
        }
        return $reservations;
    }
    

    public function checkIfAvailable($reservation){
        $querys = []; 
            // Check stardate is not in an interval booked
            $querys[] = 'SELECT COUNT(*) FROM `reservation` WHERE `debut` < \'' . $reservation->debut() . '\' AND \'' . $reservation->debut() . '\' < `fin`';

            // Check enddate is not in an interval booked
            $querys[] = 'SELECT COUNT(*) FROM `reservation` WHERE `debut` < \'' . $reservation->fin() . '\' AND \'' . $reservation->fin() . '\' < `fin`';
    
            // Check if a reservation exist in requested book period
            $querys[] = 'SELECT COUNT(*) FROM `reservation` WHERE \'' . $reservation->debut() . '\' < `debut` AND `debut` < \'' . $reservation->fin() . '\'';
    
            // Check if a reservation exist in requested book period
            $querys[] = 'SELECT COUNT(*) FROM `reservation` WHERE \'' . $reservation->debut() . '\' < `fin` AND `fin` < \'' . $reservation->fin() . '\'';
    
            // Check if a reservation exist for exactly same period
            $querys[] = 'SELECT COUNT(*) FROM `reservation` WHERE `debut` = \'' . $reservation->debut() . '\' AND \'' . $reservation->fin() . '\' = `fin`';
    }
}

?>