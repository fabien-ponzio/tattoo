<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_panel</title>
</head>
<body>
    <main>
    <form action="../class/class_admin.php">
    
    <label for="imgUpload">Télécharger image</label>
    <input type="file" name="imgUpload">

    <label for="pic_name">Nom de l'image</label>
    <input type="text">

    <label for="artist">Tatoueur correspondant</label>
    <select name="tatoueur" id="tatoueur">
            <option value="tchang">Tchang</option>
            <option value="poupou">Poupou</option>
            <option value="nachos">Nachos</option>
            <option value="serge">Serge</option>
            <option value="fanny">Fanny</option>
    </select>

    <label for="taille">Taille du tatouage</label>
    <input type="text" name="taille">

    <label for="destination">Destination</label>
    <label for="flash">Flash</label>
    <input type="radio" id="flash" name="destination" value="flash">
    <label for="flash">Réalisations</label>
    <input type="radio" id="realisation" name="destination" value="realisation">

    <input type="submit" name="publier" value="publier">

    </form>
    </main>
</body>
</html>