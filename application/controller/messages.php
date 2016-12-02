<?php
class Messages extends Controller
{
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
		

	       require APP . 'view/user/showToMessage.php'; 
	   // }
	}
   }

   public function showFromMessage()
   {
	if ($_SESSION['loggedIn']) {
	    $userId = $_SESSION['userId'];
	    $messages = $this->messageModel->showFromMessage($userId);

	    require APP .  'view/user/showFromMessage.php';
	}
   }
}
?>


