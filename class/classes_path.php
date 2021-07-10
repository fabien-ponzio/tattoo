<?php
if ($page == "index")
{
    $path_admin = 'class/admin.php';
    $path_contact = 'class/contact.php';
    $path_db = 'class/dbconnect.php';
    $path_display='class/display.php';
    $path_planning = 'class/planning.php'; 
    $path_reservation = 'class/reservation.php';
    $path_upload = 'class/upload.php'; 
}else{
    $path_admin = '../class/admin.php';
    $path_contact = '../class/contact.php';
    $path_db = '../class/dbconnect.php';
    $path_display='../class/display.php';
    $path_planning = '../class/planning.php'; 
    $path_reservation = '../class/reservation.php';
    $path_upload = '../class/upload.php';  
}
?>