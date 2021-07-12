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
    <main>
        <form action="" method="POST">
            <h1>Mettez à jour votre profil</h1>

            <label for="name">Spécifiez votre nom:</label>
            <input type="text" name="name" required="">

            <label for="newLogin">Nouveau Login:</label>
            <input type="text" name="newLogin" required="">

            <label for="newPassword">Nouveau mot de passe:</label>
            <input type="password" name="newPassword" required="">

            <label for="ConfirmPW">Confirmez votre nouveau mot de passe :</label>
            <input type="password" name="confirmPassword" required="">

            <input type="submit" name="updateAdmin" value="Mettre à jour mon profil">
        </form>
    </main>
<?php require_once('footer.php') ?>