<?php 
$page = "Planning";
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
</head>
<body>
    <main>
    <?php 
if (isset($_SESSION['admin']['login']) &&( $_SESSION['admin']['id_droit'] === 1337)) {
    $dateComponents = getdate(); 
    $month = $dateComponents['mon']; 
    $year = $dateComponents['year']; 
    $planning = new Planning(); 
    $planning->build_calendar($month, $year); 

    $dateFocus = new Datetime('now');
    $dateFocus->setTime(07, 00);

    $weeklyCalendar = new Planning(); 
    $weeklyCalendar->displayHtmlTable($dateFocus);
     }
    ?>
    </main>
<?php  require_once('footer.php');?>