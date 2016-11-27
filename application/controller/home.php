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
    public function listing_form_test()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/listing_form_test.php';
        require APP . 'view/_templates/footer.php';
    }
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.html';
        require APP . 'view/_templates/footer.php';
    }
    public function map_properties()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/map_properties.html';
        require APP . 'view/_templates/footer.php';
    }
    public function property()
    {
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
}

?>
