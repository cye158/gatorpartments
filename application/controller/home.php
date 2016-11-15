<?php

class Home extends Controller
{
 
    public function index()
    {   

    	if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
    	    $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

}

?>
