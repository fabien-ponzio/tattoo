<?php 
$page = "contact";
require_once('header.php');
if($page ==="index"){
    require_once('class/classes_path.php');
    }
    else{
    require_once('../class/classes_path.php'); 
    }
?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
    <title><?= $page ?></title>
</head>
<body>
    <main>
        <p>Envoyez votre requête e-mail</p>
        <form class="contact-form" action="" method="POST" enctype="multipart/form-data">
        <p>Votre nom :</p>
        <input type="text" name='prenom'>
        <p>Motif de votre prise de contact:</p>
        <select name="motif-contact" id="motif-contact">
            <option value="rdv">Demande de RDV</option>
            <option value="question">Questions</option>
            <option value="retouche">Retouches</option>
            <option value="partenariat">Demande de partenariat</option>
            <option value="others">Autres</option>

        </select>

        <p>J'adresse ma demande à :</p>
        <select name="tatoueur" id="tatoueur">
            <option value="tchang">Tchang</option>
            <option value="poupou">Poupou</option>
            <option value="nachos">Nachos</option>
            <option value="serge">Serge</option>
            <option value="fanny">Fanny</option>
            <option value="idk">Je ne sais pas</option>
        </select>

        <p>Votre Budget:</p>
        <select name="budget" id="budget">
            <option value="budget1">50-100€</option>
            <option value="budget2">150-300€</option>
            <option value="budget3">300€ et plus</option>
        </select>

       <p>Êtes-vous une personne majeur(e) ? </p> 
        <input type="radio" name="ageInput" value="majeur">
        <label for="majeur">oui</label>
        <input type="radio" name="ageInput" value="mineur">
        <label for="mineur">non</label>

       <p>Images d'exemple de votre requête</p>
       <!-- <form action="index.php" method="POST"> -->
        <input type="file" name="fileUpload">
        <!-- <button type="submit" name="upload">UPLOAD IMAGE</button> -->
        <!-- </form> -->

       <p>Détaillez votre demande au maximum (soyez le plus précis possible)</p>
        <input type="textarea" name="description" rows="8" cols="80" placeholder="Taille du tatouage, emplacement, déjà tatoué(e)?..">

       <input type="submit" name="contact" value="Envoyer">

        </form>
    </main>
<?php require_once('footer.php'); ?> 