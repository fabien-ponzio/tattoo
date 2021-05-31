<?php 
require_once('../class/class_planning.php');
// ini_set('memory_limit', '1024M');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <main>
    <?php 
        $dateComponents = getdate(); 
        $month = $dateComponents['mon']; 
        $year = $dateComponents['year']; 
        $planning = new Planning(); 
        $planning->build_calendar($month, $year); 
    ?>
    </main>
</body>
</html>