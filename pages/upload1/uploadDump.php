<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo1"]) && $_FILES["photo1"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo1"]["name"];
        $filetype = $_FILES["photo1"]["type"];
        $filesize = $_FILES["photo1"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("<p class='error-message'>Erreur : Veuillez sélectionner un format de fichier valide.</p>");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("<p class='error-message'>Error: La taille du fichier est supérieure à la limite autorisée.</p>");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("../upload/" . $_FILES["photo1"]["name"])){
                echo "<p class='error-message'>".$_FILES["photo1"]["name"] . " existe déjà.</p>";
            } else{
                move_uploaded_file($_FILES["photo1"]["tmp_name"], "../upload/" . $_FILES["photo1"]["name"]);
                header('Location: contact.php');
                
                $file_path="upload/" . $_FILES["photo1"]["name"];

                //récupérer le chemin du serveur soit avec une super globale SERVER ou le taper en dur

            } 
        } else{
            echo "<p class='error-message'>Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.</p>"; 
        }
    }
}

?>