<?php 
$page = "Panel Admin"; 
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
<?php

if (isset($_POST['register'])) {
    $ajoutAdmin = new Admin;
    $ajoutAdmin->registerAdmin();
}

if (isset($_POST['deleteAdmin'])) {
    $AdminDelete = new Admin;
    $AdminDelete->deleteAdmin(); 
}

?>
    <main>

    <form method="POST" action="../class/upload.php" enctype="multipart/form-data">
            <label> adresse url de l'image </label>
            <input type="file" id="photo" name="photo">
            <input type="submit" name="submit" value="submit">
    </form>

    <form>
    
    
    <!-- <label for="imgUpload">Télécharger image</label>
    <input type="file" name="imgUpload"> -->

    <?php 
    // if (isset($_POST['publier'])){
    // $pictures = new Upload;
    // $pictures->insertPics();
// } ?>

    <label for="pic_name">Nom de l'image</label>
    <input type="text">

    <label for="artist">Tatoueur correspondant</label>
    <select name="tatoueur" id="tatoueur">
            <option value="tchang">Tchang</option>
            <option value="poupou">Poupou</option>
            <option value="nachos">Nachos</option>
            <option value="serge">Serge</option>
            <option value="fanny">Fanny</option>
    </select>

    <label for="taille">Taille du tatouage</label>
    <input type="text" name="taille">

    <label for="destination">Destination</label>
    <label for="flash">Flash</label>
    <input type="radio" id="flash" name="destination" value="flash">
    <label for="flash">Réalisations</label>
    <input type="radio" id="realisation" name="destination" value="realisation">

    <input type="submit" name="publier" value="publier">
    </form>

    <form action="" method="POST">
    <h1>Ajouter un administrateur</h1>
    <label for="login">login</label>
    <input type="text" name="login">

    <label for="login">password</label>
    <input type="password" name="password">

    <label>Confirmez votre mot de passe</label>
    <input type="password" name="confirmPW">

    <input class="register" type="submit" name="register">
    </form>

    <form action="" method="POST">
    <label for="deleteAdmin">Supprimer un admin</label>
    <select name="login" id="adminDropDown">
        <option value="" name="login">Select</option>
        <?php
        $deleteAdmin = new Admin();
        $deleteAdmin->dropDownDisplay();
        ?>
    </select>
    <input type="submit" name="deleteAdmin">
    </form>

    </main>
<?php require_once('footer.php'); ?>