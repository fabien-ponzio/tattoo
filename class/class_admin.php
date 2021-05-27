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
                    # code...
                }
            }else{
                # code...
            }
        }else {
            # code...
        }
    }
}

?>