<!-- Registration Form -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 ">
      <form class="form-horizontal" action="<?php echo URL . 'user/register';?>" method="post">
        <div class="page-header">
          <h1 class="text-center">Create an Account</h1>
        </div>

	<!-- Full Name -->
        <div class="form-group">
          <label>Full Name</label>
          <span id="nameSuccess" class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <span id="nameEmpty" class="inputFail alert alert-danger">Full name cannot be empty</span>
          <span id="nameInvalid" class="inputFail alert alert-danger">Only alphabet characters allowed</span>
          <input id="fullName" class="form-control" type="text" name="fullName">
        </div>

	<!-- Phone Number -->
	<div class="form-group">
	  <label>Phone Number (ex. 999-999-9999)</label>
          <span id="phoneNumberSuccess" class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <span id="phoneNumberEmpty" class="inputFail alert alert-danger">Phone number cannot be empty</span>
          <span id="phoneNumberInvalid" class="inputFail alert alert-danger">Invalid Inputs</span> 
	  <input id="phoneNumber" class="form-control" type="tel" name="phoneNumber">
	</div>

	<!-- Email -->
        <div class="form-group">
          <label>Email</label>
          <span id="emailSuccess" class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <span id="emailEmpty" class="inputFail alert alert-danger">Email cannot be empty</span>
          <span id="emailInvalid" class="inputFail alert alert-danger">Invalid Email</span>
          <input id="email" class="form-control" type="email" name="email">
        </div>
        <hr>
	<!-- Username -->
        <div class="form-group">
          <label>Username</label>
          <span id="usernameSuccess" class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <span id="usernameEmpty" class="inputFail alert alert-danger">Username cannot be empty</span>
          <span id="usernameInvalid" class="inputFail alert alert-danger">Invalid Username</span>
          <span id="usernameInvalidLength" class="inputFail alert alert-danger">Username must be atleast 6 characters</span>
          <span id="usernameTaken" class="inputFail alert alert-danger">Username is already taken</span>
          <input id="username" class="form-control" type="text" name="username">
          <p>Username must only contain alphanumeric characters, minimum of 4 characters</p>
        </div>

	<!-- Password -->
        <div class="form-group">
          <label>Password</label>
          <span id="prePasswordSuccess" class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <span id="prePasswordEmpty" class="inputFail alert alert-danger">Password cannot be empty</span>
          <span id="prePasswordInvalidLength" class="inputFail alert alert-danger">Password must be atleast 6 characters</span>
          <input id="prePassword" class="form-control" type="password" name="prepassword">
          <p>Password must be atleast 6 characters</p>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
          <label>Confirm Password</label>
          <span id="passwordSuccess" class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <span id="passwordInvalid" class="inputFail alert alert-danger">Password does not match</span>
          <input id="password" class="form-control" type="password" name="password">
        </div>

	<!-- Landlord / Student Checkbox -->
        <div class="form-group">
          <h3>I am registering as</h3>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="checkboxLandlord" value="1">
              Landlord
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox" name="checkboxStudent" value="1">
              Renter(Must be a SFSU Student)
            </label>
          </div>
        </div>

	<!--  Submit Button -->
        <div class="form-group pull-right">
          <button id="submitRegister" class="btn btn-success" type="submit"name="submitRegister">Submit</button>
        </div>

      </div><!-- End Col -->
    </div><!-- End Row -->
  </form>
<div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
  $(function(){

    var formError = 0;
    //Full Name Validation
    $('#fullName').blur(function(){
      $('#nameEmpty').hide();
      $('#nameInvalid').hide();
      $('#nameSuccess').hide();

      //Checks if field is empty
      if(!$(this).val()){
        $('#nameEmpty').show();
      } else

      //Checks that only alphabet letters are allowed
      if( !($(this).val().match( /^[a-zA-Z ]*$/ )) ){
        $('#nameInvalid').show();
      } else {

      formError++;
      $('#nameSuccess').show();

      }

    });

    //Phone Number Validation
    $('#phoneNumber').blur(function(){
      $('#phoneNumberEmpty').hide();
      $('#phoneNumberInvalid').hide();
      $('#phoneNumberSuccess').hide();

      //Checks if field is empty
      if(!$(this).val()){
        $('#phoneNumberEmpty').show();
      } else

      //Checks that only alphabet letters are allowed
      if( !($(this).val().match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)) ){
        $('#phoneNumberInvalid').show();
      } else {
      
      formError++;
      $('#phoneNumberSuccess').show();

      }
    });

    //Email Validation
    $('#email').blur(function(){
      $('#emailSuccess').hide();
      $('#emailEmpty').hide();
      $('#emailInvalid').hide();

      //If field is empty, display "Email cannot be empty"
      if( !$(this).val() ){
        $('#emailEmpty').show();
      } else 

      //If field is not a valid Email string
      if( !$(this).val().match( /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ ) ){
        $('#emailInvalid').show();
      } else {

      formError++;
      $('#emailSuccess').show();

      }
    });

    //Username Validation
    $('#username').blur(function(){
      $('#usernameSuccess').hide();
      $('#usernameEmpty').hide();
      $('#usernameInvalid').hide();
      $('#usernameTaken').hide();
      $('#usernameInvalidLength').hide();

      //Check if username already exists in database
      var username = $(this).val();
      var usernameExistUrl = "<?php echo URL . 'user/checkUsernameExist/' ;?>" + username ;

      function getData(){
        return $.ajax({
          url:usernameExistUrl,
          type: 'GET'
        });
      }

      function handleData(data){
        console.log(data);
        if(data == 1){
          $('#usernameTaken').show();
        }
      }

      getData().done(handleData);


      //If username is empty, display error
      if( !$(this).val() ){
        $('#usernameEmpty').show();
      } else

      //If username contains invalid characters, non alphanumeric characters, display error
      if( !$(this).val().match(/^[a-z0-9]+$/i) ){
        $('#usernameInvalid').show();
      } else

      //If username contains less than 6 characters, display errors
      if( $(this).val().length < 4 ){
        $('#usernameInvalidLength').show();
      } else {

      formError++;
      $('#usernameSuccess').show();

      }

      //Check if username already exists in database
      var username = $(this).val();
      var usernameExistUrl = "<?php echo URL . 'user/checkUsernameExist/' ;?>" + username ;

      function getData(){
        return $.ajax({
          url:usernameExistUrl,
          type: 'GET'
        });
      }

      function handleData(data){
        console.log(data);
        if(data == 1){
          $('#usernameSuccess').hide();
          $('#usernameTaken').show();
        }
      }

      getData().done(handleData);


    });

    //PrePassword Validation
    $('#prePassword').blur(function(){
      $('#prePasswordEmpty').hide();
      $('#prePasswordInvalidLength').hide();
      $('#prePasswordSuccess').hide();

      if( !$(this).val() ){
        $('#prePasswordEmpty').show();
      } else

      if($(this).val().length < 6) {
        $('#prePasswordInvalidLength').show();
      } else {

      formError++; 
      $('#prePasswordSuccess').show();

      }
    });

    //Password Validation
    $('#password').blur(function(){
      $('#passwordSuccess').hide();
      $('#passwordInvalid').hide();

      if(!($(this).val() == $('#prePassword').val())){
        $('#passwordInvalid').show();
      } else {

      formError++;
      $('#passwordSuccess').show();

      }
    });


  });


</script>
