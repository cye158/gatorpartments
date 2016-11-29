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
	$sql = "SELECT id from user where username =:username";
	$query = $this->db->prepare($sql);
	$parameters = array(':username' => $username);

	$query->execute($parameters);

	return $query->fetch()->id;
    }

    public function addMessage($userId, $toId, $content, $listingId)
    {	
	$sql = "INSERT INTO message (userId, toId, content, listingId, created_date) VALUES (:userId, :toId, :content, :listingId, Now())";
	$query = $this->db->prepare($sql);
	$parameters = array(':userId' => $userId, ':toId' => $toId, ':content' => $content, ':listingId' => $listingId);

	$query->execute($parameters);
    }
	
    public function getUsername($userId)
    {
	$sql =  "select username from user where id = :id";
	$query = $this->db->prepare($sql);
	$parameters = array(':id' => $id);

	$query->execute($parameters);
   	return $query->fetch()->username;
    } 

   public function showToMessage($userId)
   {
        $sql = "select u.username, m.content, m.listingId from user u, message m where u.id = m.toId and m.userId = :userId";
	$query = $this->db->prepare($sql);
        $parameters = array(':userId' => $userId);

	$query->execute($parameters);
	return $query->fetchAll(); 
    }

   public function showFromMessage($userId)
   {
	$sql = "select u.username, m.content, m.listingId from user u, message m where u.id = m.userId and m.toId = :userId";
	$query = $this->db->prepare($sql);
	$parameters =  array(':userId' => $userId);

	$query->execute($parameters);
	return $query->fetchAll();
   }


}
?>


