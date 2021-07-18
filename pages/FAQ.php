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
<link rel="stylesheet" href="../css/faq.css">
 <title><?= $page ?></title>

 <body>
     <main>
        <div class="box">
            <div class="question">
                Comment prendre rendez-vous ? 
            </div>
            <div class="hide">Nous encourageons toute prise de RDV via notre formulaire de contact de notre site internet, le tatoueur le plus apte à réaliser votre demande reviendra vers vous par mail.
                Si l'échange par mail s'avère être positif vous serez amener à vous déplacer au salon pour y verser des arrhes.
            Il est important d'être le plus précis possible dans votre demande, nous comptons sur vous!
            </div>
        </div>
        <div class="box">
            <div class="question">
                Les retouches sont-elles payantes ? 
            </div>
            <div class="hide">
                Non, les retouches sont comprises dans le prix du tatouage.
            </div>
        </div>
        <div class="box">
            <div class="question">
                Quels sont vos prix ? 
            </div>
            <div class="hide">
            Tout dépend du tatouage désiré, sa taille, sa spécificité. Nos prix sont calculés en fonction du temps qu’il prendra pour être réalisé.
            Notre prix de départ est de 80€  
            </div>
        </div>
        <div class="box">
            <div class="question">
            Peut-on se faire tatouer si l'on est mineur ?
            </div>
            <div class="hide">
            Oui c'est possible sous accord parental 
            </div>
        </div>
        <div class="soins">
        <a href="#" download="#">Telecharger notre fiche de soin</a>
        </div>
     </main>
<?php require_once('footer.php'); ?>