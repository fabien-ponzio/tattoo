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

    <form action="../class/upload.php" enctype="multipart/form-data">
        <div class='bold-line'></div>
        <div class="container">
            <div class="window">
                <div class="overlay"></div>
                <div class="content"></div>
                <div class="welcome">Telecharger une image</div>
                <input type="file" id="photo" name="photo" class="input-line full-width">
                <input type="submit" name="submit" value="télécharger" class="input-line full-width">
            </div>
        </div>
    </form>


    <form action="" method="POST">
        <div clas="bold-line"></div>
        <div class="container">
            <div class="window">
                <div class="overlay"></div>
                <div class="content">
                    <div class="subtitle">Nom de l'image</div>
                    <div class="input-fields">
                        <input type="text">
                        <div class="subtitles">Tatoueur correspondant</div>
                        <div class="input-fields">
                            <select name="tatoueur" id="tatoueur" class="input-line full-width">
                            <?php
                                $showArtists = new Admin();
                                $showArtists->dropDownDisplay();
                            ?>                                
                            </select>
                            <input type="text" name="taille" placeholder="taille du tattoo" class="input-line full-width">
                        </div>
                        <div class="welcome">Page de destination</div>
                        <label class="subtitles" for="flash">Flash</label>
                        <div class="input-fields">
                            <input type="radio" id="flash" name="destination" value="flash" class="input-line full-width">
                        </div>
                        <label class="subtitles" for="realisation">Réalisations</label>
                        <div class="input-fields">
                            <input type="radio" id="flash" name="destination" value="flash" class="input-line full-width">
                        </div>
                            <input type="submit" name="publier" value="publier" class="input-line full-width">
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
</main>
<?php require_once('footer.php'); ?>