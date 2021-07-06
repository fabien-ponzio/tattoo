<?php 

require_once('dbconnect.php');

class Admin
{
    private $id;
    public $login;
    private $password;
    private $droit; 
    
 // CONNEXION DE L'ADMIN

    public function connectAdmin(){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $login = htmlspecialchars(trim($login)); 
        $password = htmlspecialchars(trim($password)); 
        if (isset($_POST['connectAdmin']) && !empty($login)&& !empty($password)) {
            $db = new Database;
            $db->connect();

            $connectAdmin = $db->conn->prepare("SELECT * FROM admin WHERE login = :login");
            $connectAdmin->bindValue(':login', $login, PDO::PARAM_STR); 
            $connectAdmin->execute(); 
            $admin = $connectAdmin->fetch();
            var_dump($admin);
        }else{
        echo"aeoihfaelbgaelbjg";
        }
        if (!empty($login)) {
            echo $password .  "<br>"; 
            echo $admin['password'];
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
                    $this->droits, 
                ];
                var_dump($_SESSION['admin']);
                header('location:../pages/panel_admin.php');
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
        $register = $db->conn->prepare("SELECT login FROM admin WHERE login=:login");
        $register->bindValue(":login", $login, PDO::PARAM_STR); 
        $register->execute();
        $fetch = $register->fetch();
            if (!$fetch){
                if ($password == $confirmPW) {
                $cryptedpass = password_hash($password, PASSWORD_ARGON2I); 
                $insert = $db->conn->prepare("INSERT INTO admin (login, password, id_droit)  VALUES (:login, :cryptedpass, 1337)");
                $insert->bindValue (":login", $login, PDO::PARAM_STR); 
                $insert->bindValue (":cryptedpass", $cryptedpass, PDO::PARAM_STR); 
                $insert->execute();
                echo"Nouvel administrateur ajouté";
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
// TABLE DES ADMIN - ON DISPLAY LES ADMIN DANS UN TABLEAU AVEC LA POSSIBILITE DE LES SUPPRIMER

    public function AdminTable(){
        $db = new Database;
        $db->connect();
        $tableUser = $db->conn->query("SELECT d.nom, a.login, a.id_droits, d.id FROM droit d INNER JOIN admin a ON a.id_droit = d.id WHERE a.id_droit = 1337"); 
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

        var_dump($conn);

        $drop = $conn->query("SELECT * FROM admin");

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
    
    $deleteAdmin =  $db->conn->prepare("DELETE FROM admin WHERE id = :login");
    $deleteAdmin->bindValue(":login", $login, PDO::PARAM_INT);
    $deleteAdmin->execute();
    }


}

?>