<?php
if (isset($_POST['upload'])) {
    $file = $_FILES['fileUpload'];
    print_r($fileUpload);
    $fileName = $_FILES['fileUpload']['name'];
    $fileTmpName = $_FILES['fileUpload']['tmp_name'];
    $fileSize = $_FILES['fileUpload']['size'];
    $fileError = $_FILES['fileUpload']['name'];
    $fileType = $_FILES['fileUpload']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $authorized = array('jpg','jpeg','png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 4194304){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../class/upload/'.$fileNameNew;


                move_uploaded_file($fileTmpName, $fileDestination);
                header("location: index.php?uploadsuccess");
            }else{
                echo "Votre fichier est trop volumineux";
            }
        }else {
            echo "Il y a eu une erreur dans le téléchargement de votre fichier";
        }
    }else {
        echo "Vous ne pouvez pas télécharger des fichiers de ce type";
    }
 var_dump($_FILES); 
}
?>