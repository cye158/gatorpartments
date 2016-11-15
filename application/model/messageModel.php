<?php
class MessageModel
{
    function __construct($db)
    {
	try {
	    $this->db = $db;
	} catch (PDOEXCEPTION $e) {
	    exit('Database connection could not be established.');
	}
    }

    public function getUserId($username)
    {
	$sql = "SELECT id from users where username =:username";
	$query = $this->db->prepare($sql);
	$parameters = array(':username' => $username);

	$query->execute($parameters);

	return $query->fetch()->id;
    }

    public function addMessage($userId, $toId, $content)
    {
	$sql = "INSERT INTO messages (userId, toId, content) VALUES (:userId, :toId, :content)";
	$query = $this->db->prepare($sql);
	$parameters = array(':userId' => $userId, ':toId' => $toId, ':content' => $content);

	$query->execute($parameters);
    }
	
    public function getUsername($userId)
    {
	$sql =  "select username from users where id = :id";
	$query = $this->db->prepare($sql);
	$parameters = array(':id' => $id);

	$query->execute($parameters);
	return $query->fetch()->username;
    } 

   public function showMessage($userId, $toId, $content)
   {
     }
}
?>


