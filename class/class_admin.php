<?php 
require_once('dbconnect.php');
class Admin
{
    private $id;
    public $login;
    private $password;
    private $id_droits; 

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
            $admin = $connectAdmin->fetch(PDO::FETCH_ASSOC);
            var_dump($admin);
        }else{
        echo"aeoihfaelbgaelbjg";
        }
    }

    public function addArtist(){

    }
}

?>