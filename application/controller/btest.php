<?php
//Use to test Back End functions
//It will have good examples for front-end on how to use these functions
class Btest extends Controller{

  public function index(){
      $listing = $this->listingModel->getListingByMinPrice(2000);
      require APP . "view/btest/index.php";
  }



}



?>