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
  public function register($fullName, $phoneNumber, $email, $username, $password, $isLandlord, $isStudent) {
    $sql = "INSERT INTO user (full_name, phone_number, email, username, password, isLandlord, isStudent) VALUES (:fullName, :phoneNumber, :email, :username, :password, :isLandlord, :isStudent)";
    $query = $this->db->prepare($sql);
    $query->bindParam(':fullName', $fullName);
    $query->bindParam(':phoneNumber', $phoneNumber);
    $query->bindParam(':email', $email);
    $query->bindParam(':username', $username);

    // hash the password and stores into the db
    $password1 = password_hash($password, PASSWORD_DEFAULT);
    $query->bindParam(':password', $password1);

    $query->bindParam(':isLandlord', $isLandlord);
    $query->bindParam(':isStudent', $isStudent);

    $query->execute();

    header("Location:" . URL . "backendTest/success");
    exit();
  }

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
}
  
  //Compares the argument's username and password in DB
  //If matches, we load user info into sessions for persistent data
  public function login($username, $password) {
    $sql = "SELECT * FROM user WHERE username=:username";
    $query = $this->db->prepare($sql);
    $query->bindParam(':username', $username);
    $query->execute();
    $result = $query->fetch();
    $dbPassword = $result->password;

    //If passwords match
    if(password_verify($password, $dbPassword)){
      // Creates a session to store the users ID, and make them always log in upon visiting the site
      $_SESSION['userId'] = $result->id;
      $_SESSION['username'] = $result->username;
      $_SESSION['fullName'] = $result->full_name;
      $_SESSION['email'] = $result->email;
      $_SESSION['isLandlord'] = $result->isLandlord;
      $_SESSION['isStudent'] = $result->isStudent;
      $_SESSION['loggedIn'] = true;


      header("Location:" . URL . "backendTest/success");
      exit();
    } else {
      $_SESSION['loggedIn'] = false;
      header("Location:" . URL . "backendTest/failed");
      exit();
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
