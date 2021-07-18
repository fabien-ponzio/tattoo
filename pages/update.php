<?php 
$page = "Update Admin"; 
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
    if (isset($_POST['updateAdmin'])) {
        //var_dump($_POST['confirmPassword']);
        $admin = new Admin;
        $admin->updateAdmin($_POST['name'], $_POST['newLogin'], $_POST['newPassword'], $_POST['confirmPassword'], $_SESSION['admin']['id']);
    }
?>

<body>
    <link rel="stylesheet" href="../css/update.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <main id="update">
    <form action="" method="POST">
  <div class='bold-line'></div>
<div class="container">
  <div class="window">
    <div class="overlay"></div>
    <div class="content">
      <div class="welcome">Administrateur</div>
      <div class="subtitle">Mets a jour ton profil</div>
      <div class="input-fields">
        <input type="text" name="name" required="" placeholder="Nom" class="input-line full-width">
        <input type="text" name="newLogin" required="" placeholder="Login" class="input-line full-width">
        <input type="password" name="newPassword" required="" placeholder="Mot de passe" class="input-line full-width">
        <input type="password" name="confirmPassword" required="" placeholder="confirmez le mot de passe" class="input-line full-width">
      <div><input type="submit" name="updateAdmin" class="ghost-round full-width" value="Mettre a jour le profil"></div>
      </div>
    </div>
  </div>
  </form>
    </main>
<?php require_once('footer.php') ?>


</div>
