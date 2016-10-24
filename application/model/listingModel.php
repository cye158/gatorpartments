<?php 

class ListingModel
{

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getAllListing()
    {
        $sql = "SELECT * FROM listing";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }

  public function getListing($search)
  {
	$search = "%$search%";
        $sql = "SELECT * FROM listing WHERE CONCAT_WS('', street_number, street_address, city, zip_code, title, description, size, price) LIKE :search";
        $query = $this->db->prepare($sql);
        $query->bindParam(':search', $search);
        $query->execute();
        return $query->fetchAll();

  }





}
?>
