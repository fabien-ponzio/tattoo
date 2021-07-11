<?php 
$page = "Formulaire de reservation";
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

<main>
        
<form method="POST">
    <label for="title"> Titre:</label>
    <input class="BookingInput" type="text" name="title" id="title" placeholder="Entrez votre titre ici"/><br />

    <label for="date"> Date:</label>
    <input class="BookingInput" type="date" name="date" id="date"/><br />

    <label for="timeStart"> Heure de début:<br /><small>de 8:00 à 19:00</small></label>
    <input class="BookingInput" type="time" id="timeStart" name="startTime" min="08:00" max="19:00" /><br />

    <label for="timeEnd"> Heure de fin:<br /><small>de 9:00 à 19:00</small></label>    
    <input class="BookingInput" type="time" id="timeEnd" name="endTime" min="09:00" max="19:00" /> <br />

    <label for="description">Description:</label> <br />
    <textarea class="BookingInput" name="description" id="description" cols="33" rows="10" maxlength="65535"></textarea/><br />

    <input type="submit" class="BookingInput" name='cancel' value="Annuler">
    <input type="reset"  class="BookingInput" name='reset' value="Réinitialiser">
    <input type="submit" class="BookingInput" name='submit' value="Valider">
</form>
</main>
<?php  require_once('footer.php');?>