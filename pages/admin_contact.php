<?php 
$page = "admin_contact";
require_once('header.php');
if($page ==="index"){
    require_once('class/classes_path.php');
    }
    else{
    require_once('../class/classes_path.php'); 
    }
    if (isset($_SESSION['admin']['login']) &&( $_SESSION['admin']['id_droit'] === 1337)) {

//var_dump($_SESSION['admin']['login']);
if (isset($_POST['deleteRequest'])) {
    $id_message = $_POST['contactId'];
    var_dump($id_message);
    $RequestDelete = new Contact;
    //$RequestDelete->deleteRequest($id_message); 
}
?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="../css/admin_contact.css">
<link rel="stylesheet" href="css/footer.css">

<main id='main-admin-contact'>
    <section id="admin-contact">
        <h1 id="main-admin-contact-title">Messagerie</h1>
        <p id="main-admin-contact-subtitle"><?= $_SESSION['admin']['login'] ?>, voici vos derniers messages : </p>
       
            <?php 
            $contact = new Display();
            $displayMessage = $contact->getContact($_SESSION['admin']['login']);
            //var_dump($displayMessage);
            foreach ($displayMessage as $message) {?>
            <article class="admin-contact-message">
                <div class="admin-contact-refs">
                    <p class="admin-contact-message-label">
                        Vous avez reçu un message de: 
                        <span><?= $message['nom']?></span>
                    </p>
                    <p class="admin-contact-message-label">  
                        Adresse Mail :
                        <a class="contact" href="mailto:<?= $message['mail_contact'] ?>" target="_blank"><?= $message['mail_contact'] ?></a>
                    </p>
        
                    <form class="admin-contac-delete" action="" method="POST">
                        <input type="hidden" name="contactId" value="<?= $message['id'] ?>">
                        <input class="admin-contact-submit" type="submit" name="deleteRequest" value="supprimer">
                    </form>
                </div>
                <div class="admin-contact-infos">
                    <p class="admin-contact-message-label">
                        âge : 
                        <span class="admin-contact-text"><?= $message['age']?></span>
                    </p>
                    <p class="admin-contact-message-label">
                        budget : 
                        <span class="admin-contact-text"><?= $message['budget']?></span>
                    </p>
                    <p class="admin-contact-message-label">
                        Demande : 
                        <span class="admin-contact-text"><?= $message['textarea']?></span>
                    </p><br>
                    <img class="admin-contact-img" src="../upload/<?= $message['image_contact']?>" alt="">
                </div>
            </article>
            <?php };?>
    </section>
</main>
    <?php }else{
        echo"Vous ne pouvez pas accéder à cette page";
    }?>
<?php require_once('footer.php'); ?>