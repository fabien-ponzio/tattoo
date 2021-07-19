<?php 
$page = "Panel contenu";
require_once('header.php'); 
$showArtists = new Admin();

if($page ==="index"){
    require_once('class/classes_path.php');
    }
    else{
    require_once('../class/classes_path.php'); 
    }
    // if (isset($_SESSION['admin']['login']) &&( $_SESSION['admin']['id_droit'] === 1337)) {
        if (isset($_POST['publish'])) {
        $namePhoto = $_FILES['photo']['name'];
        $class = $_POST['destination'];
        $tattooArtist = $_POST['tatoueur'];

        $insertImage = $showArtists->registerImage($namePhoto, $class, $tattooArtist);
        require_once("upload1/upload.php");
        var_dump($_POST);

    }
?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="../css/content_panel.css">
<link rel="stylesheet" href="css/footer.css">
    <title><?= $page ?></title>
<main id="mainContent">
    <form action="" method="POST" enctype="multipart/form-data"class="pain">
    <h1 id="contenu">Contenu</h1>
        <div>
            <div class="upload">
                <label for="imgUpload">Téléchargez une image</label>
                <input type="file" id="photo" name="photo">
            </div>
            <div class="artist">
                <label for="tatoueur">Tatoueur correspondant</label>
                <select name="tatoueur" id="tatoueur">
                    <?php $showArtists->dropDownDisplay();?>
                </select>
                <label for="flash">Flash</label>
                <input type="radio" id="flash" name="destination" value="flash">
                <label class="subtitles" for="realisation">Tattoo</label>
                <input type="radio" id="flash" name="destination" value="tattoo">
            </div>
            <div class="input">
                <input type="submit" name="publish" value="publier">
            </div>
        </div>
    </form>
</main>
<?php //}else{
    echo "Vous ne pouvez pas accéder à cette page.";
//} ?>
<?php require_once('footer.php'); ?>