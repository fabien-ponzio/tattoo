<?php 
$page = "contact";
require_once('header.php');
if($page ==="index"){
    require_once('class/classes_path.php');
    }
    else{
    require_once('../class/classes_path.php'); 
    }

if(isset($_POST['contact'])) {
    $name = $_POST['prenom'];
    $reason = $_POST['motif-contact'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $tatoueur = $_POST['tatoueur'];
    $price = $_POST['budget'];
    $age = $_POST['ageInput'];
    $picture = $_FILES['photo1']['name'];
    $description = $_POST['description'];
    $demande = new Contact();
    $demand = $demande->InsertRequests($name, $reason, $email, $phone, $tatoueur, $price, $age, $description, $picture);
    // var_dump($_POST);
    // var_dump($_FILES['photo1']['name']);
    require_once('upload1/uploadDump.php');
}
?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="../css/contact.css">
<link rel="stylesheet" href="css/footer.css">


<main id='main-contact'>
    <section id="main-contact-form">
        <h1 id="main-contact-title">Contacter l'Ornithorynque</h1>
        <p id="main-contact-subtitle">Une idée, une envie ? envoyez votre requête par e-mail, et nous vous répondrons dans les plus brefs délais pour concrétiser votre projet.</p>
        <form class="contact-form" action="" method="POST" enctype="multipart/form-data">
            <div class="contact-form-container">
                <div class="contact-form-subcontainer">
                    <label>Nom & Prénom :</label>
                    <input type="text" name='prenom'>
                </div>
                <div class="contact-form-subcontainer">
                    <label>Motif de votre prise de contact:</label>
                    <select name="motif-contact" id="motif-contact">
                        <option value="rdv">Demande de RDV</option>
                        <option value="question">Questions</option>
                        <option value="retouche">Retouches</option>
                        <option value="partenariat">Demande de partenariat</option>
                        <option value="others">Autres</option>
                    </select>
                </div>
            </div>
            <div class="contact-form-container">
                <div class="contact-form-subcontainer">
                    <label>E-mail :</label>
                    <input type="email" name='email'>
                </div>
                <div class="contact-form-subcontainer">
                    <label>Télephone :</label>
                    <input type="text" name='phone'>
                </div>
            </div>
            <div class="contact-form-container">
                <div class="contact-form-subcontainer">
                    <label>J'adresse ma demande à :</label>
                    <select name="tatoueur" id="tatoueur">
                        <option value="tchang">Tchang</option>
                        <option value="poupou">Poupou</option>
                        <option value="nachos">Nachos</option>
                        <option value="serge">Serge</option>
                        <option value="fanny">Fanny</option>
                        <option value="idk">Je ne sais pas</option>
                    </select>
                </div>
                <div class="contact-form-subcontainer">
                    <label>Votre Budget:</label>
                    <select name="budget" id="budget">
                        <option value="budget1">50-100€</option>
                        <option value="budget2">150-300€</option>
                        <option value="budget3">300€ et plus</option>
                    </select>
                </div>
                <div class="contact-form-subcontainer1">
                    <label>Êtes-vous une personne majeur(e) ? </label> 
                    <div class="contact-form-radio">
                        <input type="radio" name="ageInput" value="majeur">
                        <label for="majeur">oui</label>
                        <input type="radio" name="ageInput" value="mineur">
                        <label for="mineur">non</label>
                    </div>
                </div>
            </div>
          
            <div class="contact-form-container">
                <div class="contact-form-subcontainer">
                    <label>Images d'exemple de votre requête : ATTENTION UNE SEULE IMAGE POSSIBLE 5 MO MAX.(.jpg, .jpeg, .png)</label>
                    <input type="file" id="photo" name="photo1" class="input-line full-width">
                </div>
            </div>
            <div class="contact-form-container">
                <div class="contact-form-subcontainer2">
                <label>Détaillez votre demande au maximum (soyez le plus précis possible: taille, couleur etc...)</label>
                <textarea class="contact-form-textarea" rows="4" cols="100" type="textarea" name="description" placeholder="Taille du tatouage, emplacement, déjà tatoué(e)?.."></textarea>
                </div>
            </div>
            <div class="contact-form-submit">
                <input id="form-contact-submit" type="submit" name="contact" value="Envoyer">
            </div>
        </form>
</section>
    </main>
    
<?php require_once('footer.php'); ?> 
