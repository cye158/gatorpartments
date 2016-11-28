<?php
/*
*	This model is used to send and receive messages
*
*
*
*/
class MessageModel
{   
    //Create Db Connection
    function __construct($db)
    {
        try{
            $this->db = $db;
        }  catch (PDOEXCEPTION $e){
           exit('Database connection could not be established.'');
        }
    }
    
    //creates a message onto message table in DB
    //Takes in user's id, receipient's id, and message content
    public function addMessage($userId, $toId, $content)
    {
        $sql = "INSERT INTO message (userId, toId, content) VALUES (:userId, :toId, :content)";
        $query = $this->db->prepare($sql);
        $parameters = array(':userId' => $userId, ':toId' => $toId, ':content' => $content);
        $query->execute($parameters);

    }


}
?>

