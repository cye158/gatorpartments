<?php

class UserModel
{
    function __construct($db)
    {
	try {
            $this->db = $db;
	} catch (PDOException $e) {
	    exit('Database connection could not be established.');
	}
    }

    public function createUser($username, $password)
    {
	
	$_SESSION['userName'] =  $username;
	$_SESSION['loggedIn'] = $password;
	$sql = "INSERT INTO users (username,password) VALUES (:username, :password)";
	$query = $this->db->prepare($sql);
	$parameters = array(':username' => $username, ':password' => $password);

	$query->execute($parameters);
        
    }

   public function getUserID($username)
   {
	$sql = "select id from users where username = :username";
	$query = $this->db->prepare($sql);
	$parameters = array(':username' => $username);
	$query->execute($parameters);

	return $query->fetch()->id;
   }    
}
?>
