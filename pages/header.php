<?php
session_start();
require_once('../class/display.php'); 
$tatoueur = new Display(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--  STYLE STYLE STYLE STYLE STYLE -->
  <link rel="stylesheet" href="../css/header.css">
  <!-- POLICE TEXTE -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">
  <!-- font-family: 'Montserrat', sans-serif; -->
  <!--  STYLE STYLE STYLE STYLE STYLE -->
  <title>###########</title>
</head>
<body>
  <header>
<!--  -->
<div class="wrapper"> 
  <div class="logoHeader">
    <img src="../images/logo.png" alt="logo">
  </div>
  <div class="headerLink">
    <a href="">Accueil</a>
    <div class="dropdown">
    <a class="dropbtn">Artistes</a>
    <div class="dropdown-content">
    <?php 
      $artists = $tatoueur->getArtists();
      foreach ($artists as $tatoueur){?>
      <a><?= $tatoueur['nom']?></a>
          <?php
          }
          ?>
    </div>
    </div>
    <?php 
            // var_dump($_SESSION);

      if (($_SESSION['admin']['droit'])==1337){
        ?>
        <a href="panel_admin.php">ADMINADMINADMIN</a>
    <?php
      }
    
    ?>
    <a href="">A propos</a>
    <a href="">Contact</a>
    <a href="">F.A.Q</a>
  </div>
</div>
  </header>

