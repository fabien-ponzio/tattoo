<?php 
class Database
{
public $servername;
public $username;
public $password;
public $dbname;
public $conn;

public function connect(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tattoo";

try {
    $conn = new PDO("mysql:host=$servername;$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->conn = $conn;
    echo "connecté";
} catch (PDOException $e) {
    echo "connexion échoué:" . $e->getMessage();
}
var_dump($conn);     
}

public function disconnect(){
    session_unset();
    session_destroy();
}

}

?>
