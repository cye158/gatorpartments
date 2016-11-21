<?php
class Users extends Controller
{
   // public function index(){
     // require APP . 'view/users/login.php';
   // }


    public function createUser()
    {
	if (isset($_POST["submit_create_user"])) {
	    $this->userModel->createUser($_POST["username"], MD5($_POST["password"]));
	    $_SESSION['userID'] =  $this->userModel->getUserID($_POST["username"]);
	}

	header('Location: ' . URL . 'home');

    }
}


