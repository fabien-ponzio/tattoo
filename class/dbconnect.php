<?php 
class Database
{
public $servername;
public $username;
public $password;
public $dbname;
public $conn;
// CONNEXION BDD

public function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tattoo";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connecté";
        $this->conn = $conn;
        return $conn;
    } catch (PDOException $e) {
        echo "connexion échoué:" . $e->getMessage();
    }
}

// DECONNEXION DE LA SESSION
public function disconnect(){
    session_unset();
    session_destroy();
}

}

?>
