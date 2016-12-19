<?php
class Listing extends Controller
{
  //If user is landlord, user can access post a listing page
  public function postListing(){
    if($this->userModel->isLandlord()){
    // load views
      require APP . 'view/_templates/header.php';
      require APP . 'view/listing/postListing.php';
      require APP . 'view/_templates/footer.php';
    }  else {
       require APP . 'view/_templates/header.php';
       require APP . 'view/home/index.php';
       require APP . 'view/_templates/footer.php';
    }
  }

} //End Class
?>
