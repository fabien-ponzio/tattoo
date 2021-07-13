<?php ob_start(); ?>
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
if($page ==="index"){
  require_once('class/classes_path.php');
  }
  else{
  require_once('../class/classes_path.php'); 
  }
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
      <a href="#"><li>Accueil</li></a>
      <a class="dropResponsive" href="#">
        <li>Artistes</li>
          <div class="dropResponsive-content">
          <?php 
            $tatoueur = new Display(); 
            $artists = $tatoueur->getArtists();
            foreach ($artists as $tatoueur){
              if ($tatoueur['nom'] != ''){ ?>
                <p><?= $tatoueur['nom']?></p>
            <?php
              }
            }
          ?>
          </div>
      </a>
      <a href="#"><li>A propos</li></a>
      <a href="#"><li>Contact</li></a>
      <a href="#"><li>F.A.Q</li></a>
      <?php 
      if (($_SESSION['admin']['droit'])=== '1337'){
        ?>
        <a href="panel_admin.php"><li>Admin</li></a>
        <a href="#"><li><button type="submit" href="#" name="logout" value="logout">Deconnexion</button></li></a>
      <?php
      }
      ?>
    </ul>
  </div>
</nav>


  <div class="logoHeader">
    <img src="<?= $path_logo ?>" alt="logo" width="800px">
  </div>
  <div class="headerLink">
    <a href="<?= $indexPath ?>">Accueil</a>
    <div class="dropdown">
    <a href="<?= $tatoueursPath ?>" class="dropbtn">Artistes</a>
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
    <a href="<?= $contactPath ?>">Contact</a>
    <a href="<?= $FAQpath ?>">F.A.Q</a>
    <?php 
    if (isset($_SESSION['admin'])) {
      if (($_SESSION['admin']['droit'])==1337){
        ?>
        <a href="panel_admin.php">Admin</a>
        
        <?php 
        if($page ==="index"){
            echo '<a href="class/logout.php" name="logout">Deconnexion</a>';
          }
          else{
            echo '<a href="../class/logout.php" name="logout">Deconnexion</a>';

          }
        }
      }
        ?>
  </div>
</div>
  </header>

