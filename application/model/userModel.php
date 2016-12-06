<?php
/*
*  This model is used for anything related to Users
*
*
*/
class UserModel {
  function __construct($db) {
    try {
      $this->db = $db;
    } catch (PDOException $e) {
      exit('Database connection could not be established.');
    }
  }

  //Creates a new User account
  //Inserts the arguments into user table in DB
  //The password is hashed and then stored in DB
  public function register($username, $password, $email, $fullName, $isLandlord, $isStudent) {
    $sql = "INSERT INTO user (username, password, email, full_name) VALUES (:username, :password, :email, :full_name)";
    $query = $this->db->prepare($sql);
    $query->bindParam(':username', $username);
    
    // hash the password using sha256 and stores into the db
    $password1 = hash('sha256', $password);
    $query->bindParam(':password', $password1);
    $query->bindParam(':email', $email);
    $query->bindParam(':full_name', $fullName);

    if($isLandlord == '1'){
      $sql = "INSERT INTO user (isLandlord) VALUES (1)";
      $quickQuery = $this->db->prepare($sql);
    }
    $query->execute();
  }
/*

    //Checks if the username and hashed password matches
    //If yes, it will store user's information into Sessions
    public function login($username, $password) {
        $sql = "SELECT * FROM user WHERE username=:username AND password=:password ;";
        $query = $this->db->prepare($sql); 
        $query->bindParam(':username', $username);
        // hash the password using sha256 and compares with the hashed pw in db
       $password1 = hash('sha256', $password);
        $query->bindParam(':password', $password1);
        $query->execute();

        $result = $query->fetch();
        // print_r($result);

        // checks if username and password are the same
        if(!$result) {
	    // return false, outputs error message
	    echo "<meta http-equiv=\"refresh\" content=\"5;url=".$_SERVER['HTTP_REFERER']."\"/>";
             echo "Error, username or password does not match";
 */
  //Compares the argument's username and password in DB
  //If matches, we load user info into sessions for persistent data
  public function login($username, $password) {
    $sql = "SELECT * FROM user WHERE username=:username AND password=:password ;";
    $query = $this->db->prepare($sql); 
    $query->bindParam(':username', $username);
    // hash the password using sha256 and compares with the hashed pw in db
    $password1 = hash('sha256', $password);
    $query->bindParam(':password', $password1);
    $query->execute();
    $result = $query->fetch();

    //If the username's and password match, result will have an item.
    //If result is blank, then no match is found.
    if(!$result) {
      //If login fails, we redirect to home and exit() so php does not keep executing.
      $_SESSION['loggedIn'] = false;
      header("Location:" . URL . "home/index", true, 401);
      exit();

    } else {
      // Creates a session to store the users ID, and make them always log in upon visiting the site 
      $_SESSION['userId'] = $result->id;
      $_SESSION['username'] = $result->username;
      $_SESSION['loggedIn'] = true;
      //$_SESSION['landlord'] = $result->landlord;

      // start redirect to page user was at previously
      echo "<meta http-equiv=\"refresh\" content=\"5;url=".$_SERVER['HTTP_REFERER']."\"/>";
      echo "Successfully logged in! Please wait 5s before redirect......";
      }
    }


  //Logs user out of site, killing session cookies
  public function logout() {
    // code obtained from : http://php.net/manual/en/function.session-destroy.php
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]);
    }

    // Destroy the session.
    session_destroy();
  }

  public function checkStatus($userId) {
  }

  public function displayMessage($message) {
    echo $message;
    // return $message;
  }

  public function checkLoginStatus() {
    if(!isset($_SESSION) || $_SESSION['loggedIn'] == false || !$_SESSION['isLandlord']) {
      header("Location: " . URL . "backendTest/register");
      exit();
    }
  }

  //Return user's id
  public function getUserId(){
    if(isset($_SESSION['userId'])){
      return $_SESSION['userId'];
    }

    return null;
  }

  public function getUserName(){
    if(isset($_SESSION['userName'])){
      return $_SESSION['userName'];
    }

    return null;
  }

}
?>
