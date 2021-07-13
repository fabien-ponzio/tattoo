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
    return $artist; 
    // NE PAS AFFIHER ADMIN DANS LE SELECT 
    }
     public function AllArtistInfo($id){
        $db = new Database; 
        $conn =   $db->connect();    
        $getArtists = $conn->prepare("SELECT * FROM tatoueur WHERE id = $id"); 
        $getArtists->execute();
        $artist = $getArtists->fetchAll(PDO::FETCH_ASSOC); 
        return $artist; 
     }
}
?>