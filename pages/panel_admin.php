<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_panel</title>
</head>
<body>
<?php
require_once('../class/dbconnect.php');
require_once('../class/admin.php');

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
    <form action="../class/class_admin.php">
    
    <label for="imgUpload">Télécharger image</label>
    <input type="file" name="imgUpload">

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
</body>
</html>