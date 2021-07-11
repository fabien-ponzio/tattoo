<?php
$page="F.A.Q"; 
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

     </main>
<?php require_once('footer.php'); ?>