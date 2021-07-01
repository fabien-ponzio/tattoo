<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<?php 
    require_once('../class/dbconnect.php');
    require_once('../class/admin.php');
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

    <form action="" method="POST">

    <h1>Inscription</h1>
    <div class="user-box">
      <input type="text" name="login" required="">
      
      <label>Login</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Mot de passe</label>
    </div>
    <div class="user-box">
      <input type="password" name="confirmPW" required="">
      <label>Confirmez votre mot de passe</label>
    </div>
    <input class="register" type="submit" name="register">
    <a href="#">

    </form>
</body>
</html>