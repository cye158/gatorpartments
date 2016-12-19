<?php
class User extends Controller {

  public function register(){
    //If the submitRegister button is clicked
    if(isset($_POST['submitRegister'])){
      $fullName = $_POST['fullName'];
      $error = 0;
      $errors = [];
$phoneNumber = $_POST['phoneNumber'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $prePassword = $_POST['prepassword'];

      if(isset($_POST['checkboxLandlord'])){
        $checkboxLandlord = 1;
      } else {
        $checkboxLandlord = 0;
      }

      if(isset($_POST['checkboxStudent'])){
        $checkboxStudent = 1;
      } else {
        $checkboxStudent = 0;
      }

      if(empty($fullName)) {
        $error = 1;
        array_push($errors, "your full name is empty! <br>");
      } elseif(!ctype_alpha(trim($fullName))) {
        $error = 1;
        array_push($errors, "your name does not consist of only alphabets! <br>");
      }

      if(empty($phoneNumber)) {
        $error = 1;
        array_push($errors, "your phone number is empty! <br>");
      } elseif(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phoneNumber)) {
        $error = 1;
        array_push($errors, "your phone number is invalid! <br>");
      }

      if(empty($email)) {
        $error = 1;
        array_push($errors, "your email is empty! <br>");
      } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 1;
        array_push($erorrs, "your email is invalid! <br>");
      }

      if(empty($username)) {
        $error = 1;
        array_push($errors, "your username is empty! <br>");
      } elseif($this->userModel->checkUsernameExist($username)) {
        $error = 1;
        array_push($errors, "your username already exists! <br>");
      } elseif(!preg_match("/^[A-Za-z0-9]{3,100}$/", $username)) {
        $error = 1;
        array_push($errors, "your username is invalid! <br>");
      }

      if(empty($password)) {
        $error = 1;
        array_push($errors, "your password is empty! <br>");
      } elseif(strlen($password) < 6) {
        $error = 1;
        array_push($errors, "your password is less than 6 characters! <br");
      } elseif($prePassword != $password) {
        $error = 1;
        array_push($errors, "your passwords do not match! <br>");
      }

      if($error) {
        require APP . "view/_templates/header.php";
        require APP . "view/backendTest/register.php";
        require APP . "view/_mteplates/footer.php";
        exit();
      } else {
        $this->userModel->register($fullName, $phoneNumber, $email, $username, $password, $checkboxLandlord, $checkboxStudent);
        exit();
      }
    }

    require APP . "view/_templates/header.php";
    require APP . "view/user/register.php";
    require APP . "view/_templates/footer.php";
  }

  public function login(){

    if(isset($_POST['submitLogin'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      if(!($this->userModel->login($username, $password))) {
        $errors = [];
        array_push($errors, "invalid username and/or password");

        require APP . "view/_templates/header.php";
        require APP . "view/user/login.php";
        require APP . "view/_templates/footer.php";
      }
    }

    require APP . "view/_templates/header.php";
    require APP . "view/user/login.php";
    require APP . "view/_templates/footer.php";
  }

  public function logout(){
    $this->userModel->logout();
  }

  public function checkLoginStatus() {
    $this->userModel->checkLoginStatus();
  }

  public function checkUsernameExist($username){
    echo $this->userModel->checkUsernameExist($username);
  }

}
?>
