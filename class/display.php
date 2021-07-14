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

     public function AllArtistImage($id){
      $db = new Database; 
      $conn =   $db->connect();    
      $getCategories = $conn->prepare("SELECT * FROM image_tatoueur WHERE id_tatoueur = $id");
      $getCategories->execute();
      $image = $getCategories->fetchAll(PDO::FETCH_ASSOC);
      return $image;
     }

     public function getImage($id){
      $db = new Database; 
      $conn =   $db->connect(); 
      $getCategories = $conn->prepare("SELECT nom FROM image_tatoueur WHERE id_tatoueur = $id");
      $getCategories->execute();
      $image = $getCategories->fetchAll(PDO::FETCH_ASSOC);
      return $image;
     }
}
?>