<?php 
// session_start();
require_once('dbconnect.php');

class Contact
{
public $mailFrom;
public $mailTo; 
public $motifContact;
public $tatoueur;
public $budget;
public $majeur; 
public $mineur; 
public $description;
public $file;

public function getRequests( $mailFrom, $mailTo, $motifContact, $tatoueur, $budget, $majeur, $mineur, $description, $file){
    if (isset($_POST['contact'])) {
    
        $mailFrom = $_POST['prenom']; 
        $mailTo = "ponzio.fabien@gmail.com"; 
        $motifContact = $_POST['motif-contact']; 
        $tatoueur = $_POST['tatoueur']; 
        $budget = $_POST['budget']; 
        $majeur = $_POST['ageInput'];
        $mineur = $_POST['ageInput'];
        $file = $_FILES['fileUpload'];
        // var_dump($file); 
        $description = $_POST['description']; 
        
        $headers = "From : ".$mailFrom;
        $txt = "Vous avez un reçu une demande de : ".$mailFrom.".\n\n".$description;
    
        $description = wordwrap($description, 70, "\r\n"); 
        mail($mailTo, $motifContact, $txt, $headers);
        // header("Location: index.php?mailsend");
        // var_dump($_POST);
        // var_dump($txt); 
    } 
}
public function InsertRequests($name, $reason,$email, $phone, $tatoueur, $budget, $majeur, $description, $file){
        $name = htmlspecialchars(trim($name));
        $reason = htmlspecialchars(trim($reason));
        $email = htmlspecialchars(trim($email));
        $phone = htmlspecialchars(trim($phone));
        $tatoueur = htmlspecialchars(trim($tatoueur));
        $budget = htmlspecialchars(trim($budget));
        $majeur = htmlspecialchars(trim($majeur));
        $description = htmlspecialchars(trim($description));
        //CONNEXION BDD
        $db = new Database;
        $db->connect();
        $insert = $db->conn->prepare("INSERT INTO contact (motif_contact, mail_contact, age, budget, tatoueur, textarea, image_contact, nom, phone)VALUES(:reason, :mail_contact, :age, :budget, :tatoueur, :textarea, :image_contact, :nom, :phone)");
        $insert->bindValue(":reason", $reason, PDO::PARAM_STR);
        $insert->bindValue(":mail_contact", $email, PDO::PARAM_STR);
        $insert->bindValue(":age", $majeur, PDO::PARAM_STR);
        $insert->bindValue(":budget", $budget, PDO::PARAM_STR); 
        $insert->bindValue(":tatoueur", $tatoueur, PDO::PARAM_STR);
        $insert->bindValue(":textarea", $description, PDO::PARAM_STR); 
        $insert->bindValue(":image_contact", $file, PDO::PARAM_STR);
        $insert->bindValue(":nom", $name, PDO::PARAM_STR);
        $insert->bindValue(":phone", $phone, PDO::PARAM_STR);
        // var_dump($name, $reason,$email, $phone, $tatoueur, $budget, $majeur, $description, $file);
        $insert->execute();
}

public function deleteRequest($id){
    $db = new Database;
    $db->connect();
    $delete = $db->conn->prepare("DELETE FROM contact WHERE id = :id");
    $delete->bindValue(":id", $id, PDO::PARAM_INT);
    $delete->execute(); 
    header('location:admin_contact.php');
}
//echo"hello";
}
?>