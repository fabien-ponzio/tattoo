
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
  <title>###########</title>
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
<!--  -->
<div class="wrapper"> 
  <div class="logoHeader">
    <img src="<?php echo $path_logo ?>" alt="logo">
  </div>
  <div class="headerLink">
    <a href="">Accueil</a>
    <div class="dropdown">
    <a class="dropbtn">Artistes</a>
    <div class="dropdown-content">
    <?php 
      $tatoueur = new Display(); 
      $artists = $tatoueur->getArtists();
      foreach ($artists as $tatoueur){?>
      <a><?= $tatoueur['nom']?></a>
          <?php
          }
          ?>
    </div>
    </div>
    <a href="">A propos</a>
    <a href="">Contact</a>
    <a href="">F.A.Q</a>
    <?php 
      if (($_SESSION['admin']['droit'])==1337){
        ?>
        <a href="panel_admin.php">Admin</a>
    <?php
      }
    ?> 
  </div>
</div>
  </header>

