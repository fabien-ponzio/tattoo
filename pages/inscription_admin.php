<?php 
require_once('../class/dbconnect.php');
require_once('../class/class_admin.php');

if (isset($_POST['register'])) {
    $user = new Admin(); 
    $user->register($_POST['login'],$_POST['password'],$_POST['confirmPW']); 
}
?>

