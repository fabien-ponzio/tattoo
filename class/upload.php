<?php
require_once('dbconnect.php'); 

// class Upload 
// {
//     public function registerFile($path){
//         if (isset($_POST['upload'])) {
//             $file = $_FILES['imgUpload'];
//             print_r($fileUpload);
//             $fileName = $_FILES['imgUpload']['name'];
//             $fileTmpName = $_FILES['imgUpload']['tmp_name'];
//             $fileSize = $_FILES['imgUpload']['size'];
//             $fileError = $_FILES['imgUpload']['name'];
//             $fileType = $_FILES['imgUpload']['type'];
        
//             $fileExt = explode('.', $fileName);
//             $fileActualExt = strtolower(end($fileExt));
        
//             $authorized = array('jpg','jpeg','png');
        
//             if (in_array($fileActualExt, $allowed)) {
//                 if ($fileError === 0) {
//                     if ($fileSize < 4194304){
//                         $fileNameNew = uniqid('', true).".".$fileActualExt;
//                         $fileDestination = '../class/upload/'.$fileNameNew;
        
        
//                         move_uploaded_file($fileTmpName, $fileDestination);
//                         header("location: index.php?uploadsuccess");
//                     }else{
//                         echo "Votre fichier est trop volumineux";
//                     }
//                 }else {
//                     echo "Il y a eu une erreur dans le téléchargement de votre fichier";
//                 }
//             }else {
//                 echo "Vous ne pouvez pas télécharger des fichiers de ce type";
//             }
//          var_dump($_FILES); 
//         }    
//     }

        // if (isset($_POST['submit'])) {
        //     // $file = $_FILES['imgUpload'];
        //     print_r($_FILES['imgUpload']['name']);
        //     $fileName = $_FILES['imgUpload']['name'];
        //     $fileTmpName = $_FILES['imgUpload']['tmp_name'];
        //     $fileSize = $_FILES['imgUpload']['size'];
        //     $fileError = $_FILES['imgUpload']['name'];
        //     $fileType = $_FILES['imgUpload']['type'];
        
        //     $fileExt = explode('.', $fileName);
        //     $fileActualExt = strtolower(end($fileExt));
        
        //     $authorized = array('jpg','jpeg','png');
        
        //     if (in_array($fileActualExt, $allowed)) {
        //         if ($fileError === 0) {
        //             if ($fileSize < 4194304){
        //                 $fileNameNew = uniqid('', true).".".$fileActualExt;
        //                 $fileDestination = '../upload/'.$fileNameNew;
        //                 echo "Votre fichier est trop téléchargé";
        
        //                 move_uploaded_file($fileTmpName, $fileDestination);
        //                 header("location: index.php?uploadsuccess");
        //             }else{
        //                 echo "Votre fichier est trop volumineux";
        //             }
        //         }else {
        //             echo "Il y a eu une erreur dans le téléchargement de votre fichier";
        //         }
        //     }else {
        //         echo "Vous ne pouvez pas télécharger des fichiers de ce type";
        //     }
        //  var_dump($_FILES); 
        // }    
    // }


// // INSERTION DES IMAGES EN BDD 
//     public function InsertPics(){
//     if (isset($_POST['publier'])) {
//         $db = new Database;
//         $db->connect();
//         $insert = $db->conn->prepare('INSERT INTO image_tatoueur (nom, classe, id_tatoueur) VALUES (:pic_name, :destination, :tatoueur)'); 
//         // $insert->bindValue("pic_name", $nom, PDO::PARAM_STR); 
//         // $insert->bindValue("destination", $classe, PDO::PARAM_STR); 
//         // $insert->bindValue("tatouer", $id_tatoueur, PDO::PARAM_INT); 
//         $insert->execute(); 
//         return $insert->fetchAll(PDO::FETCH_ASSOC);
//     }
//     }
// }
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("../upload/" . $_FILES["photo"]["name"])){
                echo $_FILES["photo"]["name"] . " existe déjà.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../upload/" . $_FILES["photo"]["name"]);
                echo "Votre fichier a été téléchargé avec succès.";
                
                $file_path="upload/" . $_FILES["photo"]["name"];

                //récupérer le chemin du serveur soit avec une super globale SERVER ou le taper en dur

                $db = new Database;
                $db->connect();
                        $insert = $db->conn->prepare('INSERT INTO image_tatoueur (nom) VALUES (:nom)'); 
                        // $insert->bindValue("pic_name", $nom, PDO::PARAM_STR); 
                        $insert->bindValue("nom", $file_path, PDO::PARAM_STR); 
                        // $insert->bindValue("tatouer", $id_tatoueur, PDO::PARAM_INT); 
                        $insert->execute(); 
                        return $insert->fetchAll(PDO::FETCH_ASSOC);
               //"UPDATE utilisateurs SET avatar='$file_path'"; //ajouter id utilisateur

                
            } 
        } else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }
    } else{
    }
}
?>