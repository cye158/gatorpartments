<?php

class ListingModel
{
  //Connectes and creates db object
  function __construct($db)
  {
    try {
      $this->db = $db;
        } catch (PDOException $e) {
          exit('Database connection could not be established.');
    }
  }

  //Gets all listings in the 'listing' table in the DB
  public function getAllListing()
  {
    $sql = "SELECT * FROM listing";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
   }

  //Gets listings if a keyword is matched
  //Used in search button
  public function getListing($search)
  {
    $search = "%$search%";
    $sql = "SELECT * FROM listing WHERE CONCAT_WS('', address_1, city, zip_code, title, description, room_asize, price) LIKE :search";
    $query = $this->db->prepare($sql);
    $query->bindParam(':search', $search);
    $query->execute();
    return $query->fetchAll();
  }

  //Gets listing by listing's id
  public function getListingById($id)
  {
    $sql = "SELECT * FROM listing WHERE id=:id";
    $query = $this->db->prepare($sql);
    $query->bindParam(':id', $id);
    $query->execute();
    return $query->fetch();
  }

  //Given strings, it will put it in an array
  public function getImagesArray($string)
  {
    $images = explode(" ",$string);
    return $images;
  }

  //Gets all listings in random order
  public function getAllListingRandom()
  {
    $sql = "SELECT * FROM listing ORDER BY RAND()";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

}
?>
