<?php

    class User extends Controller {
        public function index() {
			      require APP . 'view/_templates/header.php';
			      require APP . 'view/user/index.php';
			      require APP . 'view/_templates/footer.php';
		    }

		    public function authenticateLogin() {
			      $username = trim($_POST['username'], ' ');
			      $password = $_POST['password'];

			      $this->userModel->login($username, $password);
		    }

        public function register() {
		$username = trim($_POST['username'], ' ');
		$password = $_POST['password'];
		$email = $_POST['email'];
		$name = $_POST['name'];

		return $this->userModel->register($username, $password, $email, $name);
        }

	public function authenticateMessage() {
		$message = $_POST['message'];
		$this->userModel->displayMessage($message);
	}
    }
    
?>
