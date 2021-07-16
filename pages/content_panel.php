<?php 
$page = "Panel contenu";
require_once('header.php'); 
if($page ==="index"){
    require_once('class/classes_path.php');
    }
    else{
    require_once('../class/classes_path.php'); 
    }
?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="../css/content_panel.css">
<link rel="stylesheet" href="css/footer.css">
    <title><?= $page ?></title>

    <form action="../class/upload.php" enctype="multipart/form-data">
        <div class='bold-line'></div>
        <div class="container">
            <div class="window">
                <!-- <div class="overlay"></div> -->
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
<?php require_once('footer.php'); ?>