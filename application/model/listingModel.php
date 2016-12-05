<?php

/*
*  Example to use listings
*
*  $listing = getAllListing();
*
*  foreach($listing as $row){
*   echo $row->address_1
*      . $row->state
*      . $row->zip_code ;
*  }
*
*  $listing data field,
*    id, title, room_size, price, description, address_1, address_2, city, state, zip_code, landlord_id,
*    phone, image_main, images.
*
*  Make sure to use $this->priceFormat($row->price); to display formatted value to look like currency.
*
*/

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
  public function getListingBySearch($search)
  {
    $search = "%$search%";
    $sql = "SELECT * FROM listing WHERE CONCAT_WS('', street_address, city, zip_code, title, room_size, price) LIKE :search";
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
  public function getListingByRandom()
  {
    $sql = "SELECT * FROM listing ORDER BY RAND()";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  //Get all listing by Lowest Price first
  public function getListingByLowestPrice()
  {
    $sql = "SELECT * FROM listing ORDER BY price";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  //Get all listing by Highest Price first
  public function getListingByHighestPrice()
  {
    $sql = "SELECT * FROM listing ORDER BY price DESC";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  //Gets listings given a minimum price
  public function getListingByMinPrice($minPrice)
  {
    $sql = "SELECT * FROM listing WHERE price > :minPrice";
    $query = $this->db->prepare($sql);
    $query->bindParam(':minPrice',$minPrice);
    $query->execute();
    return $query->fetchAll();
  }

  //Gets listing given max price
  public function getListingByMaxPrice($maxPrice)
  {
    $sql = "SELECT * FROM listing WHERE price < :maxPrice";
    $query = $this->db->prepare($sql);
    $query->bindParam(':maxPrice', $maxPrice);
    $query->execute();
    return $query->fetchAll();
  }

  public function uploadImage() {
    define('SITE_ROOT', realpath(dirname(__FILE__)));
    // $fileSize is the max file size of an image, measured in bytes
    $fileSize = 500000;
    $target_dir = "/images/" . $_SESSION['username'];
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // if mkdir gives permission error, user must chmod folder path to 777
    // chmod -R 777 SITE_ROOT
    // The chmod provided above doesn't allow me to delete the folder created, have not found a workaround for it yet
    if(!file_exists(SITE_ROOT.'/images')) {
      echo "Attempting to create folder at: " . SITE_ROOT.'/images';
      mkdir(SITE_ROOT.'/images', 0777, true);
      echo "If mkdir returns permission error, read the comments in the code on how to workaround it in the function";
    }

    // Check if image file is a actual iamge or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // if file exists, append a number, such as (1), to the end to workaround existing file error
    if(file_exists($target_file)) {
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]) . "(1)";
    }

    // Check file size
    if($_FILES["fileToUpload"]["size"] > $fileSize) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow only certain file formats pertaining to images
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
      echo "Sorry, only JPG, JPEG,PNG, & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if image is okay and meets all the criterias before uploading
    if($uploadOk == 0) {
      echo "Sorry, your file was no uploaded.";
    } else {
      if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], SITE_ROOT.$target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }
}
?>
