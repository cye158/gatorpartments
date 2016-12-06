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
	$sql = "SELECT id from user where username =:username";
	$query = $this->db->prepare($sql);
	$parameters = array(':username' => $username);

	$query->execute($parameters);

	return $query->fetch()->id;
    }

    //creates a message onto message table in DB
    //Takes in user's id, receipient's id, and message content
    public function addMessage($userId, $toId, $conten)
    {	$listingId = $_SESSION['listingId'];
	$sql = "INSERT INTO message (userId, toId, content, listingId, created_date) VALUES (:userId, :toId, :content, :listingId, Now())";
	$query = $this->db->prepare($sql);
	$parameters = array(':userId' => $userId, ':toId' => $toId, ':content' => $content, ':listingId' => $listingId);

	$query->execute($parameters);
    }
	
    public function getUsername($userId)
    {
	$sql =  "select username from user where id = :userId";
	$query = $this->db->prepare($sql);
	$parameters = array(':userId' => $userId);

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

  public function showMessageDetail($messageId)
  {
      $sql = "select * from message where id=:messageId";
      $query = $this->db->prepare($sql);
      $parameters = array(':messageId' => $messageId);

      $query->execute($parameters);
      return $query->fetch();
  }

  public function getLandlordId($listingId)
  {
      $sql = "select landlord_id from listing where id=:listingId";
      $query = $this->db->prepare($sql);
      $parameters = array(':listingId' => $listingId);

      $query->execute($parameters);
      return $query->fetch()->landlord_id;
  }  
}
?>


