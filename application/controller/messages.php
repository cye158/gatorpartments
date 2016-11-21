
<?php
class Messages extends Controller
{
    public function addMessage()
    {
	if ($_SESSION['loggedIn']) {
	   if (isset($_POST["submit_add_message"])){ 
 	   // $userId = $this->messageModel->getUserId($_POST["username"]);
	    $userId = $_SESSION['userID'];  // if using session please select this line
	    $toId = $this->messageModel->getUserId($_POST["toname"]);
	    $this->messageModel->addMessage($userId, $toId, $_POST["content"]);
	}

	header('Location: ' . URL . 'home');
     }
    }

   public function showToMessage()
   {
	if ($_SESSION['loggedIn']) {
	   // if (isset($_POST["submit_show_message"])) {
	//	$userId =  $this->messageModel->getUserId($_POST["username"]);
		
		$userId = $_SESSION['userID'];  // if using session please select this line
	        $messages = $this->messageModel->showToMessage($userId);
		

	       require APP . 'view/users/showToMessage.php'; 
	   // }
	}
   }

   public function showFromMessage()
   {
	if ($_SESSION['loggedIn']) {
	    $userId = $_SESSION['userID'];
	    $messages = $this->messageModel->showFromMessage($userId);

	    require APP .  'view/users/showFromMessage.php';
	}
   }
}
?>

