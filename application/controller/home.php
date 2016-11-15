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
        require APP . 'view/home/index.html';
        require APP . 'view/_templates/footer.php';
    }
    public function about()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/about.html';
        require APP . 'view/_templates/footer.php';

    }
    public function compare()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/compare.html';
        require APP . 'view/_templates/footer.php';

    }
    public function contact()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/contact.html';
        require APP . 'view/_templates/footer.php';

    }
    public function home_form()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/home_form.html';
        require APP . 'view/_templates/footer.php';

    }
    public function home_html()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/home.html';
        require APP . 'view/_templates/footer.php';

    }
    public function listings()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/listings.html';
        require APP . 'view/_templates/footer.php';

    }
    public function map_properties()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/map_properties.html';
        require APP . 'view/_templates/footer.php';

    }
    public function property()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/property.html';
        require APP . 'view/_templates/footer.php';

    }
    public function terms()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/terms.html';
        require APP . 'view/_templates/footer.php';

    }
    public function typography()
    {
        if(isset($_POST['submitSearch'])){ 
                $search = $_POST['searchInput'];
            $listing = $this->listingModel->getListing($search);
        }
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/typography.html';
        require APP . 'view/_templates/footer.php';

    }
}

?>
