<?php
// require_once('dbconnect.php'); 

//if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("<p class='error-message'>Erreur : Veuillez sélectionner un format de fichier valide.</p>");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("<p class='error-message'>Error: La taille du fichier est supérieure à la limite autorisée.</p>");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("../upload/" . $_FILES["photo"]["name"])){
                echo "<p class='error-message'>".$_FILES["photo"]["name"] . " existe déjà.</p>";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../upload/" . $_FILES["photo"]["name"]);
                echo "<p class='error-message'>Votre fichier a été téléchargé avec succès.</p>";
                
                $file_path="upload/" . $_FILES["photo"]["name"];
            } 
        } else{
            echo "<p class='error-message'>Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.</p>"; 
        }
    } else{
    }
//}
?>