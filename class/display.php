<?php 
require_once('dbconnect.php');

class Display{
    public $db; 
    
    public function getArtists(){
    $db = new Database; 
    $conn =   $db->connect();
    $getArtists = $conn->prepare("SELECT nom, id FROM tatoueur"); 
    $getArtists->execute();
    $artist = $getArtists->fetchAll(PDO::FETCH_ASSOC); 
// NE PAS AFFIHER ADMIN DANS LE SELECT 
    return $artist;
    }
}
?>