<?php
class Messages extends Controller
{   
    public function contactLandlord($listingId)
    {
	if ($_SESSION['loggedIn']) {
	    $landlordId = $this->messageModel->getLandlordId($listingId);
            $landlordUserName = $this->messageModel->getUserName($landlordId);

	    // load view
     	    require APP . 'view/_templates/header.php';
            require APP . 'view/user/writeMessage.php';
	    require APP . 'view/_templates/footer.php';
	   
	}
    }

    public function addMessage()
    {
	if ($_SESSION['loggedIn']) {
	   if (isset($_POST["submit_add_message"])){ 
 	   // $userId = $this->messageModel->getUserId($_POST["username"]);
	    $userId = $_SESSION['userId'];  // if using session please select this line
	    $toId = $this->messageModel->getUserId($_POST["toname"]);
	    $this->messageModel->addMessage($userId, $toId, $_POST["content"], $_POST["listingId"]);
	}

	header('Location: ' . URL . 'home');
     }
    }

   public function showToMessage()
   {
	if ($_SESSION['loggedIn']) {
	   // if (isset($_POST["submit_show_message"])) {
	//	$userId =  $this->messageModel->getUserId($_POST["username"]);
		
		$userId = $_SESSION['userId'];  // if using session please select this line
	        $messages = $this->messageModel->showToMessage($userId);
		
               // load views
 	       require APP . 'view/_templates/header.php';
	       require APP . 'view/user/showToMessage.php';
               require APP . 'view/_templates/footer.php'; 
	   // }
	}
   }

   public function showFromMessage()
   {
	if ($_SESSION['loggedIn']) {
	    $userId = $_SESSION['userId'];
	    $messages = $this->messageModel->showFromMessage($userId);
            
            // load views
            require APP . 'view/_templates/header.php';
	    require APP .  'view/user/showFromMessage.php';
            require APP . 'view/_templates/footer.php';
	}
   }

  public function showMessageDetail($messageId)
  {
      if ($_SESSION['loggedIn']) {
          $message = $this->messageModel->showMessageDetail($messageId);
          $messageUserName = $this->messageModel->getUsername($message->userId);
          // load views
          require APP . 'view/_templates/header.php';
          require APP . 'view/home/messageDetail.php';
          require APP . 'view/_templates/footer.php';
      }
  }
}
?>
