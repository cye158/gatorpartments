<?php
class MessageModel
{
	//Create Db Connection
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

    //creates a message onto message table in DB
    //Takes in user's id, receipient's id, and message content
    public function addMessage($userId, $toId, $content, $listingId)
    {
	$sql = "INSERT INTO messages (userId, toId, content, listingId) VALUES (:userId, :toId, :content, :listingId)";
	$query = $this->db->prepare($sql);
	$parameters = array(':userId' => $userId, ':toId' => $toId, ':content' => $content, ':listingId' => $listingId);

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

   public function showToMessage($userId)
   {
        $sql = "select u.username, m.content, m.listingId from users u, messages m where u.id = m.toId and m.userId = :userId";
	$query = $this->db->prepare($sql);
        $parameters = array(':userId' => $userId);

	$query->execute($parameters);
	return $query->fetchAll(); 
    }

   public function showFromMessage($userId)
   {
	$sql = "select u.username, m.content, m.listingId from users u, messages m where u.id = m.userId and m.toId = :userId";
	$query = $this->db->prepare($sql);
	$parameters =  array(':userId' => $userId);

	$query->execute($parameters);
	return $query->fetchAll();
   }


}
?>



