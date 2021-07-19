<?php
/*if ($page === "index")
{
    //REQUIRE DE CHAQUE CLASSES
    require_once('class/dbconnect.php');
    require_once('class/admin.php'); 
    require_once('class/contact.php');
    require_once('class/display.php');    
    require_once('class/planning.php'); 
    require_once('class/reservation.php'); 
    //require_once('class/logout.php'); 
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
    $contactAdmin = 'pages/admin_contact.php';
    $updatePath = 'pages/update.php' ;
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
    $contactAdmin = '../pages/admin_contact.php' ;
    $updatePath = '../pages/update.php' ;

    //LOGO LOGO LOGO LOGO LOGO LOGO
    $path_logo = '../images/logo.PNG'; 
}*/

if ($page === "index")
{
    define('GENERAL_PATH', '');
}
else{
    define('GENERAL_PATH', '../');
}

//REQUIRE DE CHAQUE CLASSES
require_once(GENERAL_PATH.'class/dbconnect.php');
require_once(GENERAL_PATH.'class/admin.php'); 
require_once(GENERAL_PATH.'class/contact.php');
require_once(GENERAL_PATH.'class/display.php');    
require_once(GENERAL_PATH.'class/planning.php'); 
require_once(GENERAL_PATH.'class/reservation.php'); 
//require_once(GENERAL_PATH.'class/logout.php'); 
//require_once('class/logout.php'); 
//CHEMIN DE CHAQUES CLASSES
$path_admin = GENERAL_PATH.'class/admin.php';
$path_contact = GENERAL_PATH.'class/contact.php';
$path_db = GENERAL_PATH.'class/dbconnect.php';
$path_display=GENERAL_PATH.'class/display.php';
$path_planning = GENERAL_PATH.'class/planning.php'; 
$path_reservation = GENERAL_PATH.'class/reservation.php';
$path_upload = GENERAL_PATH.'class/upload.php'; 
$path_logout = GENERAL_PATH.'class/logout.php'; 

//CHEMINS PAGES 
$indexPath = GENERAL_PATH.'index.php'; 
$adminConnPath =GENERAL_PATH.'pages/adminConn.php'; 
$contactPath=GENERAL_PATH.'pages/contact.php';
$registerAdminPath=GENERAL_PATH.'pages/inscription_admin.php';
$AdminPanelPath=GENERAL_PATH.'pages/panel_admin.php';  
$planningPath=GENERAL_PATH.'pages/planning.php'; 
$reservationPath=GENERAL_PATH.'pages/reservation_form.php'; 
$tatoueursPath=GENERAL_PATH.'pages/tatoueurs.php'; 
$FAQpath = GENERAL_PATH.'pages/FAQ.php';
$contentPanel = GENERAL_PATH.'pages/content_panel.php'; 
$contactAdmin = GENERAL_PATH.'pages/admin_contact.php';
$updatePath = GENERAL_PATH.'pages/update.php' ;
//LOGO LOGO LOGO LOGO LOGO LOGO
$path_logo = GENERAL_PATH.'images/logo.PNG';
?>