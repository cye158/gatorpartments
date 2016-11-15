
<?php
class Messages extends Controller
{
    public function addMessage()
    {if ($_SESSION['loggedIn'])
	if (isset($_POST["submit_add_message"])) {
	    $userId = $this->messageModel->getUserId($_POST["username"]);
	    $toId = $this->messageModel->getUserId($_POST["toname"]);
	    $this->messageModel->addMessage($userId, $toId, $_POST["content"]);
	}

	header('Location: ' . URL . 'home');
    }
}
?>

