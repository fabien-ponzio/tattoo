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
    // require_once('class/logout.php'); 
    //CHEMIN DE CHAQUES CLASSES
    $path_admin = 'class/admin.php';
    $path_contact = 'class/contact.php';
    $path_db = 'class/dbconnect.php';
    $path_display='class/display.php';
    $path_planning = 'class/planning.php'; 
    $path_reservation = 'class/reservation.php';
    $path_upload = 'class/upload.php'; 
    $path_logout = 'class/logout.php'; 

    //CHEMINS PAGES 
    $indexPath = 'index.php'; 
    $adminConnPath ='pages/adminConn.php'; 
    $contactPath='pages/contact.php';
    $registerAdminPath='pages/inscription_admin.php';
    $AdminPanelPath='pages/panel_admin.php';  
    $planningPath='pages/planning.php'; 
    $reservationPath='pages/reservation_form.php'; 
    $tatoueursPath='pages/tatoueurs.php'; 
    $FAQpath = 'pages/FAQ.php';
    $contentPanel = 'pages/content_panel.php'; 
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
    // require_once('../class/logout.php'); 
    //CHEMIN DE CHAQUES CLASSES
    $path_admin = '../class/admin.php';
    $path_contact = '../class/contact.php';
    $path_db = '../class/dbconnect.php';
    $path_display='../class/display.php';
    $path_planning = '../class/planning.php'; 
    $path_reservation = '../class/reservation.php';
    $path_upload = '../class/upload.php'; 
    $path_logout = '../class/logout.php'; 
    //CHEMINS PAGES 
    $indexPath = '../index.php'; 
    $adminConnPath ='../pages/adminConn.php'; 
    $contactPath='../pages/contact.php';
    $registerAdminPath='../pages/inscription_admin.php';
    $AdminPanelPath='../pages/panel_admin.php';  
    $planningPath='../pages/planning.php'; 
    $reservationPath='../pages/reservation_form.php'; 
    $tatoueursPath='../pages/tatoueurs.php'; 
    $FAQpath = '../pages/FAQ.php';
    $contentPanel = '../pages/content_panel.php'; 

    //LOGO LOGO LOGO LOGO LOGO LOGO
    $path_logo = '../images/logo.PNG'; 
}
?>