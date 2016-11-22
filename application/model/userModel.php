<?php

class UserModel {
		function __construct($db) {
			try {
				$this->db = $db;
			} catch (PDOException $e) {
				exit('Database connection could not be established.');
			}
		}

		public function register($username, $password, $email, $name) {
			$sql = "INSERT INTO user (username, password, email, landlord, name) VALUES (:username, :password, :email, 0, :name)";
			$query = $this->db->prepare($sql);

			$query->bindParam(':username', $username);
      			// hash the password using sha256 and stores into the db
      			$password1 = hash('sha256', $password);

			$query->bindParam(':password', $password1);
			$query->bindParam(':email', $email);
			$query->bindParam(':name', $name);

			$query->execute();

		}

    public function login($username, $password) {
			  $sql = "SELECT * FROM user WHERE username=:username AND password=:password ;";
			  $query = $this->db->prepare($sql);
      
			  $query->bindParam(':username', $username);
        // hash the password using sha256 and compares with the hashed pw in db
        $password1 = hash('sha256', $password);
			  $query->bindParam(':password', $password1);

			  $query->execute();
        $result = $query->fetchAll();
	print_r($result);

        // checks if username and password are the same
        if(!$result) {
				    // return false, lets view output error message
            echo "Error, username or password does not match";
        } else {
            // Creates a session to store the users ID, and make them always log in upon visiting the site 
            $_SESSION['userId'] = $result[0]->username;
            $_SESSION['loggedIn'] = true;
	    $_SESSION['landlord'] = $result[0]->landlord;
            echo "Success!";
        }
    }
   
    public function logout() {
        // code obtained from : http://php.net/manual/en/function.session-destroy.php
        // Unset all of the session variables.
        $_SESSION = array();

        // If it's desired to kill the session, also delete the session cookie.
        // Note: This will destroy the session, and not just the session data!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]);
        }

        // Destroy the session.
        session_destroy();
    }

	public function checkStatus($userId) {
		
	}

	public function displayMessage($message) {
		echo $message;
		// return $message;
	}
}

?>
