<?php ob_start();
if (!isset($_SESSION)) {
  session_start(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--  STYLE STYLE STYLE STYLE STYLE -->
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/foooter.css">

  <!-- POLICE TEXTE -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">
  <!-- font-family: 'Montserrat', sans-serif; -->
  <!--  STYLE STYLE STYLE STYLE STYLE -->
  <title><?= $page; ?></title>
</head>

<body>
  <header>
  <?php
/* if($page === "index"){
  require_once('class/classes_path.php');
  }
  else{
  require_once('../class/classes_path.php'); 
  } */
  require_once($_SERVER['DOCUMENT_ROOT'].'/tattoo/class/classes_path.php');
?>
<div class="wrapper"> 
  <!-- RESPONSIVE BURGER NAV -->
<nav role="navigation" class="burgerMenu">
  <div id="menuToggle">

    <input type="checkbox" />
    
    <span></span>
    <span></span>
    <span></span>
    
    <ul id="menu">
      <a href="<?= $indexPath ?>"><li>Accueil</li></a>
      <div>
        <nav class="nav-responsive">
          <li class="bouton-menu-responsive">
            Artistes
          </li>
          <div class="bottom-child">
          <?php 
            $tatoueur = new Display(); 
            $artists = $tatoueur->getArtists();
            foreach ($artists as $tatoueur){
              if ($tatoueur['nom'] != ''){ ?>
                <li><a class="bottomlist" href="<?=$tatoueursPath?>?id=<?=$tatoueur['id']?>"><?= $tatoueur['nom']?></a></li>
            <?php
              }
            }
          ?>
          </div>
        </nav>
      </div>
      <a href="<?=$contactPath?>"><li>Contact</li></a>
      <a href="<?=$FAQpath?>"><li>F.A.Q</li></a>
      <?php 
      if (isset($_SESSION['admin']['id_droit'])== '1337'){
        ?>
        <div>
        <nav class="nav-responsive">
          <li class="bouton-menu-responsive">
            Admin
          </li>
          <div class="bottom-child">
            <li><a class="bottomlist" href="<?=$planningPath?>">Planning</a></li>
            <li><a class="bottomlist" href="<?=$AdminPanelPath?>">Gestion d'admin</a></li>
            <li><a class="bottomlist" href="<?=$contentPanel?>">Gestion de contenu</a></li>
            <li><a class="bottomlist" href="<?=$updatePath?>">Mise à jour profil</a></li>
          </div>
        </nav>
      </div>
      <?php
      }
      ?>
          <a href="<?=$path_logout?>" name="logout">Deconnexion</a>

    </ul>
  </div>
</nav>


  <div class="logoHeader">
    <img src="<?= $path_logo ?>" alt="logo" width="800px">
  </div>
  <div class="headerLink">
    <a href="<?= $indexPath ?>">Accueil</a>
    <div class="dropdown">
    <a href="#" class="dropbtn">Artistes</a>
    <div class="dropdown-content">
    <?php 
      $tatoueur = new Display(); 
      $artists = $tatoueur->getArtists();
      foreach ($artists as $tatoueur){
        if ($tatoueur['nom'] != ''){ ?>
          <a href="<?=$tatoueursPath?>?id=<?=$tatoueur['id']?>"><?= $tatoueur['nom']?></a>
          <?php
          }
        }
      ?>
    </div>
    </div>
    <?php
    if (empty($_SESSION)) {?>
      <a href="<?= $contactPath ?>">Contact</a>
    <?php }
    ?>
    <a href="<?= $FAQpath ?>">F.A.Q</a>
    <?php 
      if (isset($_SESSION['admin']['id_droit'])==1337){
        ?>

        <div class="dropdown">
        <a href="#" class="dropbtn">Admin</a>
        <div class="dropdown-content">
          <a href="<?=$planningPath?>">Planning</a>
          <a href="<?=$AdminPanelPath?>">Gestion d'admin</a>
          <a href="<?=$contentPanel?>">Gestion de contenu</a>
          <a href="<?=$updatePath?>">Mise à jour profil</a>
        </div>
        </div>
        <a href="<?=$path_logout?>" name="logout">Deconnexion</a>     
        <?php }  ?>
  </div>
</div>
  </header>

