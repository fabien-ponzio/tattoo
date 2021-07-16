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
<link rel="stylesheet" href="../css/panel_admin.css">
<link rel="stylesheet" href="css/footer.css">
    <title><?= $page ?></title>
</head>
<body>
<?php

if (isset($_POST['register'])) {
    $ajoutAdmin = new Admin;
    $ajoutAdmin->registerAdmin($_POST['login'],$_POST['password'],$_POST['confirmPW']);
}

if (isset($_POST['deleteAdmin'])) {
    $AdminDelete = new Admin;
    $AdminDelete->deleteAdmin(); 
}
?>
    <main>
    <form action="" method="POST">
    <div class="bold-line"></div>
    <div class="container">
        <div class="window">
            <div class="overlay"></div>
            <div class="content">
                <div class="welcome">Ajouter un nouveau tatoueur</div>
                <div class="input-fields">
                <input type="text" name="login" required="" placeholder="login" class="input-line full-width">
                <input type="password" name="password" required="" placeholder="Mot de passe" class="input-line full-width">
                <input type="password" name="confirmPW" required="" placeholder="confirmez le mot de passe" class="input-line full-width">
                <div><input type="submit" name="register" class="ghost-round full-width" value="Go"></div>
            </div>
            </div>
        </div>
    </div>
    </form>

    <form action="" method="POST">
    <div class="bold-line"></div>
    <div class="container">
        <div class="window">
            <div class="overlay"></div>
            <div class="content">
                <div class="welcome">Supprimer un tatoueur</div>
                <select name="login" id="adminDropDown">
                    <option value="" name="login">Select</option>
                    <?php
                    $deleteAdmin = new Admin();
                    $deleteAdmin->dropDownDisplay();
                    ?>
                </select>
                <div><input type="submit" name="deleteAdmin" class="ghost-round full-width" value="Go"></div>
            </div>
            </div>
        </div>
    </form>
    <div>
    <?php var_dump($_SESSION['admin']['login']);?>
        <p>Messages :</p>
        <div>
            <?php 
            $contact = new Display();
            $displayMessage = $contact->getContact($_SESSION['admin']['login']);
            var_dump($displayMessage);
            foreach ($displayMessage as $message) {?>
            <p>Vous avez reçu un message de :<?= $message['nom']?></p> 
            <p></p>
            <?php };?>
            
        </div>
    </div>
</main>
<?php require_once('footer.php'); ?>