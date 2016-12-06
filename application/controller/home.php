<?php

class Home extends Controller
{

    public function about()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/about.html';
        require APP . 'view/_templates/footer.php';
    }
    public function compare()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/compare.html';
        require APP . 'view/_templates/footer.php';
    }
    public function contact()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/contact.html';
        require APP . 'view/_templates/footer.php';
    }
    public function listings()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/listings.html';
        require APP . 'view/_templates/footer.php';
    }
    public function listing_form()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/listing_form.php';
        require APP . 'view/_templates/footer.php';
    }
    //Home page
    public function index()
    {
      	if(isset($_POST['submitSearch'])){
      	    $keyword = $_POST['searchBarInput'];
      	    $listing = $this->listingModel->getListingBySearch($keyword);
      	} else {
      	    $listing = $this->listingModel->getAllListing();
      	}
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/test.html';
        require APP . 'view/_templates/footer.php';
    }


    public function messaging(){
      require APP . 'view/_templates/header.php';
      require APP . 'view/home/messaging.html';
      require APP . 'view/_templates/footer.php';
    }
    //Individual Listing Page
    public function property(){
    	if(isset($id)){
    	   $listing = $this->listingModel->getListingById($id);

    	   $images = $this->listingModel->getImagesArray($listing->images);
            }
	// load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/property.html';
        require APP . 'view/_templates/footer.php';
    }
    public function terms()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/terms.html';
        require APP . 'view/_templates/footer.php';
    }
    public function typography()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/typography.html';
        require APP . 'view/_templates/footer.php';
    }

    public function addMessage()
    {
	// load views
	      require APP . 'view/user/writeMessage.php';
    }
}

?>
