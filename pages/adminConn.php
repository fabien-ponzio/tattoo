<?php 

  ob_start();

  $page = "Connexion Admin";
    if($page ==="index"){
      require_once('class/classes_path.php');
      }
      else{
      require_once('../class/classes_path.php'); 
      }
      require_once('header.php');
?>
    <title><?=$page?></title>

<?php 
//     // if (isset($_POST['connectAdmin'])) {
//     //     $admin = new Admin;
//     //     $admin->connectAdmin();
// }?>

<body>
    <main>
    <!-- <form action="" method="POST">

    <h1>Connexion Admin</h1>
    <label for="login">Login:</label>
    <input type="text" name="login" required="">
    
    <label for="password">Mot de passe:</label>
    <input type="password" name="password" required="">

    <input type="submit" name="connectAdmin">

    </form> -->
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

    </main>
<?php require_once('footer.php');
ob_end_flush(); ?> 

