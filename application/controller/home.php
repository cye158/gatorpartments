<?php

class Home extends Controller
{
 
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

}

?>
