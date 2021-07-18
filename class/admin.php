<?php 

require_once('dbconnect.php');

class Admin 
{
    private $id;
    public $login;
    private $password;
    public $droit; 
    
 // CONNEXION DE L'ADMIN

    public function connectAdmin(){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $login = htmlspecialchars(trim($login)); 
        $password = htmlspecialchars(trim($password)); 
        if (isset($_POST['connectAdmin']) && !empty($login)&& !empty($password)) {
            $db = new Database;
            $db->connect();

            $connectAdmin = $db->conn->prepare("SELECT * FROM tatoueur WHERE login = :login");
            $connectAdmin->bindValue(':login', $login, PDO::PARAM_STR); 
            $connectAdmin->execute(); 
            $admin = $connectAdmin->fetch();
        }else{
        echo"aeoihfaelbgaelbjg";
        }
        if (!empty($login)) {
            echo $password .  "<br>"; 
            if (password_verify($password, $admin['password'])) {
                $this->id = $admin['id']; 
                $this->login = $admin['login']; 
                $this->password = $admin['password']; 
                $this->droit = $admin['id_droit']; 

                $_SESSION['admin'] = [
                'id' =>
                    $this->id, 
                'login' =>
                    $this->login,
                'password' =>
                    $this->password, 
                'droit' => 
                    $this->droit, 
                ];
                if(__DIR__ == 'C:\wamp64\www\tattoo\pages' ){
                    header("location: ../index.php");

                }
                  elseif(__DIR__ == 'C:\wamp64\www\tattoo' ){
                    header("location: index.php");
                  }
            }else{
                echo "Mot de passe erroné"; 
            }
        }else{
            echo 'veuillez remplir les champs';
        }
    }

// AJOUT D'ADMIN
    public function registerAdmin(){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirmPW = $_POST['confirmPW'];
    
    $login = htmlspecialchars(trim($login)); 
    $password = htmlspecialchars(trim($password)); 
    $confirmPW = htmlspecialchars(trim($confirmPW)); 

    if (!empty($login) && !empty($password) && !empty($confirmPW)) {
        $db = new Database;
        $db->connect();
        $register = $db->conn->prepare("SELECT login FROM tatoueur WHERE login=:login");
        $register->bindValue(":login", $login, PDO::PARAM_STR); 
        $register->execute();
        $fetch = $register->fetch();
            if (!$fetch){
                if ($password == $confirmPW) {
                $cryptedpass = password_hash($password, PASSWORD_ARGON2I); 
                $insert = $db->conn->prepare("INSERT INTO tatoueur (login, password, id_droit)  VALUES (:login, :cryptedpass, 1337)");
                $insert->bindValue (":login", $login, PDO::PARAM_STR); 
                $insert->bindValue (":cryptedpass", $cryptedpass, PDO::PARAM_STR); 
                $insert->execute();
                echo"Nouvel administrateur ajouté";
                header('location:../pages/adminConn.php');
                }else{
                    echo "Les mots de passe ne correspondent pas"; 
                }
            }else{
                echo "l'utilisateur n'existe pas";
            }
        }else {
            echo"veuillez remplir tous les champs";
        }
    }
// UPDATE ADMIN
    public function updateAdmin($name, $newLogin, $newPassword, $confirmPW, $myID){
    $nom = htmlspecialchars(trim($name));
    $newLogin = htmlspecialchars(trim($newLogin));
    $newPassword = htmlspecialchars(trim($newPassword));
    $confirmPassword = htmlspecialchars(trim($confirmPW));
    $id = $myID;
    //var_dump($confirmPW); 
    if (!empty($name) && !empty($newLogin) && !empty($newPassword) && !empty($confirmPW) && !empty($id)){
            //$db = new Database; 
            //$db->connect();
            // $select = $db->conn->prepare("SELECT * FROM tatoueur WHERE id =: myID"); 
            // $select->bindValue(":myID", $myID);
            // $select->execute();
            // $fetch = $select->fetch(PDO::FETCH_ASSOC);

            if($confirmPassword == $newPassword){
                echo "lesang"; 
                $cryptedpass = password_hash( $newPassword, PASSWORD_ARGON2I);
                $db = new Database; 
                $connect = $db->connect();
                $update = $connect->prepare("UPDATE tatoueur SET nom=:nom, login=:login, password=:password WHERE id = $id"); 
                $update->bindValue(":nom", $nom, PDO::PARAM_STR);
                $update->bindValue(":login", $newLogin, PDO::PARAM_STR);
                $update->bindValue(":password", $cryptedpass);
                
                $update->execute(); 
                header('location:../pages/panel_admin.php'); 
            }else {
                echo "Confimation de votre mot de passe incorrecte"; 
            }
        }else {
            echo "Veuillez remplir les champs pour mettre à jour votre profil"; 
        }

    }

// TABLE DES ADMIN - ON DISPLAY LES ADMIN DANS UN TABLEAU AVEC LA POSSIBILITE DE LES SUPPRIMER

    public function AdminTable(){
        $db = new Database;
        $db->connect();
        $tableUser = $db->conn->query("SELECT d.nom, a.login, a.id_droits, d.id FROM droit d INNER JOIN tatoueur a ON a.id_droit = d.id WHERE a.id_droit = 1337"); 
        // SI PAS DE VARIABLE = PAS DE bindValue 
        $result = $tableUser->fetchAll(PDO::FETCH_ASSOC);
        echo"<table> <th> Admin </th>"; 
        for ($i=0; $i < count($result) ; $i++) {       
          echo"<tr>
          <td>" . $result[$i]['login'] . "</td>
            </tr>";
        }
    echo"</table>"; 
}
// MENU DEROULANT 

    public function dropDown(){
        $db = new Database;
        $conn = $db->connect();
        $i = 0;

        // var_dump($conn);

        $drop = $conn->query("SELECT * FROM tatoueur");

        while($fetch = $drop->fetch(PDO::FETCH_ASSOC)){
            $tableau[$i][] = $fetch['id'];
            $tableau[$i][] = $fetch['login'];
            $i++;
            // var_dump($drop);
        }
        return $tableau; 
    }
// MENU DEROULANT 
    public function dropDownDisplay(){
        $db = new Database;
        $db->connect();
        $admin = new Admin;
        $adminTab = $admin->dropDown();

        foreach ($adminTab as $value) {
            echo '<option value="' . $value[0] . '">' . $value[1] . '</option>';
            var_dump($value[0]);
        }
    }

// SUPPRESSION D'ADMIN
    public function deleteAdmin(){
    $login = $_POST['login'];
    $db = new Database;
    $db->connect();
    
    $deleteAdmin =  $db->conn->prepare("DELETE FROM tatoueur WHERE id = :login");
    $deleteAdmin->bindValue(":login", $login, PDO::PARAM_INT);
    $deleteAdmin->execute();
    }

    public function registerImage($namePhoto, $class, $tattooArtist){
        $db = new Database; 
        $connect = $db->connect();
        $InsertImage = $connect->prepare('INSERT INTO image_tatoueur (nom, classe, id_tatoueur) VALUES (:nom, :classe, :id_tatoueur)'); 
        $InsertImage->bindValue(":nom", $namePhoto, PDO::PARAM_STR);
        $InsertImage->bindValue(":classe", $class, PDO::PARAM_STR);
        $InsertImage->bindValue(":id_tatoueur", $tattooArtist, PDO::PARAM_INT);
        $InsertImage->execute();
    }
}

?>