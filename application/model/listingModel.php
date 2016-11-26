<?php 

class ListingModel
{
  //Creates db connection
  function __construct($db)
  {
    try{
      $this->db = $db;
    } catch (PDOException $e) {
      exit('Database connection could not be established.');
    }
  }

  //gets all listings from DB
  public function getAllListing()
  {
      $sql = "SELECT * FROM listing";
      $query = $this->db->prepare($sql);
      $query->execute();
      return $query->fetchAll();

  }

  //gets any listings that has keywords
  public function getListing($search)
  {
    $search = "%$search%";
    $sql = "SELECT * FROM listing WHERE CONCAT_WS('', address_1, address_2, city, zip_code, title, description, room_size, price) LIKE :search";
    $query = $this->db->prepare($sql);
    $query->bindParam(':search', $search);
    $query->execute();
    return $query->fetchAll();
  }

  //Finds a listing by its ID numbers
  public function getListingById($id)
  {
    $sql = "SELECT * FROM listing WHERE id=:id";
    $query = $this->db->prepare($sql);
    $query->bindParam(':id', $id);
    $query->execute();
    return $query->fetchAll();
  }


}
?>
