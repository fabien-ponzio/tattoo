<?php
$page="Artistes"; 
require_once('header.php');
if($page ==="index"){
    require_once('class/classes_path.php');
} else {
    require_once('../class/classes_path.php'); 
}
$id = $_GET['id'];
//var_dump($id); 
$display = new Display;
$infosArtist = $display->AllArtistInfo($id); 
$imagesTattoo = $display->getImagesTattoo($id);
$imagesFlash = $display->getImagesFlash($id);
//var_dump($imagesFlash); 
//var_dump($imagesTattoo);
?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="../css/tatoueurs.css">
<link rel="stylesheet" href="css/footer.css">
<title><?= $page ?></title>
<body>
    <main id="main-presentation-artist">
        <section class="presentation-artist">
            <img src="../images/<?= $infosArtist[0]['image']?>" width="600px" alt='picture_artist'>
            <h1><?= $infosArtist[0]['nom'] ?></h1>
        </section>
        <section id="main-news-title">
            <h2> Nouveautés</h2>
        </section>
        <section id="main-artist-gallery-flash">
            <?php foreach ($imagesFlash as $image) { ?>
                <img class="gallery-flash" src = "../<?= $image['nom'] ?>">
            <?php } ?>
        </section>
        <section id="main-artist-gallery-tattoo">
            <?php foreach ($imagesTattoo as $image) { ?>
                <img class="gallery-tattoo" src = "../<?= $image['nom'] ?>">
            <?php } ?>
        </section>
        <article class="presentation-artist-bio">
            <p>
                <?= $infosArtist[0]['contenu'] ?>
                The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are build into Bootstrap 4.
                Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet. The overlay color can be changed by changing the
            </p>
        </article>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-91af20a2-1683-4a44-b038-319d1d7a4b45"></div>
    </main>
<?php require_once('footer.php'); ?>

