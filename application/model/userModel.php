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
	$sql = "INSERT INTO users (username,password) VALUES (:username, :password)";
	$query = $this->db->prepare($sql);
	$parameters = array(':username' => $username, ':password' => $password);

	$query->execute($parameters);

        
    }
}
?>
