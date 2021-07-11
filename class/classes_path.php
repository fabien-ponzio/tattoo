<?php
if ($page === "index")
{
    //REQUIRE DE CHAQUE CLASSES
    require_once('class/dbconnect.php');
    require_once('class/admin.php'); 
    require_once('class/contact.php');
    require_once('class/display.php');    
    require_once('class/planning.php'); 
    require_once('class/reservation.php'); 
    require_once('class/upload.php'); 
    //CHEMIN DE CHAQUES CLASSES
    $path_admin = 'class/admin.php';
    $path_contact = 'class/contact.php';
    $path_db = 'class/dbconnect.php';
    $path_display='class/display.php';
    $path_planning = 'class/planning.php'; 
    $path_reservation = 'class/reservation.php';
    $path_upload = 'class/upload.php'; 
    //LOGO LOGO LOGO LOGO LOGO LOGO
    $path_logo = 'images/logo.PNG'; 
}else{
    //REQUIRE DE CHAQUE CLASSES
    require_once('../class/admin.php');
    require_once('../class/contact.php');
    require_once('../class/dbconnect.php');
    require_once('../class/display.php');
    require_once('../class/planning.php'); 
    require_once('../class/reservation.php');
    require_once('../class/upload.php');  
    //CHEMIN DE CHAQUES CLASSES
    $path_admin = '../class/admin.php';
    $path_contact = '../class/contact.php';
    $path_db = '../class/dbconnect.php';
    $path_display='../class/display.php';
    $path_planning = '../class/planning.php'; 
    $path_reservation = '../class/reservation.php';
    $path_upload = '../class/upload.php';  
    //LOGO LOGO LOGO LOGO LOGO LOGO
    $path_logo = '../images/logo.PNG'; 
}
?>