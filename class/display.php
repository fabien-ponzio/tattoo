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
      $getArtists = $conn->prepare("SELECT * FROM tatoueur INNER JOIN presentation_tatoueur ON tatoueur.id = presentation_tatoueur.id_tatoueur WHERE id = $id"); 
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

     public function getImages($id){
      $db = new Database; 
      $conn =   $db->connect(); 
      $getCategories = $conn->prepare("SELECT nom FROM image_tatoueur WHERE id_tatoueur = $id");
      $getCategories->execute();
      $images = $getCategories->fetchAll(PDO::FETCH_ASSOC);
      return $images;
     }

     public function getContact($tatoueur){
       $db = new Database; 
       $conn = $db->connect();
       $getContact = $conn->prepare("SELECT * FROM contact  WHERE tatoueur = '$tatoueur'");
       $getContact->execute();
       $contact = $getContact->fetchAll(PDO::FETCH_ASSOC);
       return $contact;
      }
}
?>