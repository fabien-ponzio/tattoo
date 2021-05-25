<?php 
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

    mail($mailTo, $motifContact, $txt, $headers);
    // header("Location: index.php?mailsend");
    var_dump($_POST);
    var_dump($txt); 
}
echo"hello";
?>