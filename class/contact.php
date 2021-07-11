<?php 
require_once('dbconnect.php');
session_start();

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


}
if (isset($_POST['contact'])) {
    
    $mailFrom = $_POST['prenom']; 
    $mailTo = "ponzio.fabien@gmail.com"; 
    $motifContact = $_POST['motif-contact']; 
    $tatoueur = $_POST['tatoueur']; 
    $budget = $_POST['budget']; 
    $majeur = $_POST['ageInput'];
    $mineur = $_POST['ageInput'];
    $file = $_FILES['fileUpload'];
    var_dump($file); 
    $description = $_POST['description']; 

    $headers = "From : ".$mailFrom;
    $txt = "Vous avez un reçu une demande de : ".$mailFrom.".\n\n".$description;

    $description = wordwrap($description, 70, "\r\n"); 
    mail($mailTo, $motifContact, $txt, $headers);
    // header("Location: index.php?mailsend");
    var_dump($_POST);
    var_dump($txt); 
}
//echo"hello";
?>