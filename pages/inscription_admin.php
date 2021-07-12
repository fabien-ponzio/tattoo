<?php 
$page = "Inscription Admin";
if($page ==="index"){
    require_once('class/classes_path.php');
    }
    else{
    require_once('../class/classes_path.php'); 
    }
    require_once('header.php');
?>
<title><?= $page?></title>

<?php
if (isset($_POST['register'])) {
    $user = new Admin(); 
    $user->registerAdmin($_POST['login'],$_POST['password'],$_POST['confirmPW']); 
}
?>
<link rel="stylesheet" href="../css/inscription_admin.css">

<form action="" method="POST">
  <div class='bold-line'></div>
<div class="container">
  <div class="window">
    <div class="overlay"></div>
    <div class="content">
      <div class="welcome">Administrateur</div>
      <div class="subtitle">Inscris un nouveau tatoueur</div>
      <div class="input-fields">
      <input type="text" name="login" required="" placeholder="login" class="input-line full-width">
      <input type="password" name="password" required="" placeholder="Mot de passe" class="input-line full-width">
      <input type="password" name="confirmPW" required="" placeholder="confirmez le mot de passe" class="input-line full-width">
      <div><input type="submit" name="register" class="ghost-round full-width" value="Go"></div>
      </div>
    </div>
  </div>
  </form>
</div>
<?php require_once('footer.php'); ?> 
