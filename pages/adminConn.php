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
    if (isset($_POST['connectAdmin'])) {
        $admin = new Admin;
        $admin->connectAdmin();
}?>

<body>
    <main>
    <form action="" method="POST">

    <h1>Connexion Admin</h1>
    <label for="login">Login:</label>
    <input type="text" name="login" required="">
    
    <label for="password">Mot de passe:</label>
    <input type="password" name="password" required="">

    <input type="submit" name="connectAdmin">

    </form>
    </main>
<?php require_once('footer.php');
ob_end_flush(); ?> 