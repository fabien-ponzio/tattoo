<?php
$page="Artistes"; 
require_once('header.php');
if($page ==="index"){
    require_once('class/classes_path.php');
    }
    else{
    require_once('../class/classes_path.php'); 
    }
?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
 <title><?= $page ?></title>

 <body>
     <main>

     <?php 
     $id = $_GET['id'];
     var_dump($id); 
     $caca = new Display;
    $caca1= $caca->AllArtistInfo($id); 
    var_dump($caca1); 
     ?>
     </main>
<?php require_once('footer.php'); ?>