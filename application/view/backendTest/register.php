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
          <span id="emptyName" class="inputFail alert alert-danger">Full name cannot be empty</span>
          <span id="invalidName" class="inputFail alert alert-danger">Invalid input, only alphabet letters allowed</span>
          <input id="fullName" class="form-control" type="text" name="fullName">
        </div>

	<!-- Phone Number -->
	<div class="form-group">
	  <label>Phone Number (ex. 999-999-9999)</label>
          <span id="phoneNumberSuccess" class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <span id="emptyPhoneNumber" class="inputFail alert alert-danger">Phone number cannot be empty</span>
          <span id="invalidPhoneNumber" class="inputFail alert alert-danger">Invalid Inputs</span> 
	  <input id="phoneNumber" class="form-control" type="tel" name="phoneNumber">
	</div>

	<!-- Email -->
        <div class="form-group">
          <label>Email</label>
          <span class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <input class="form-control" type="email" name="email">
        </div>

	<!-- Username -->
        <div class="form-group">
          <label>Username</label>
          <span class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <input class="form-control" type="text" name="username">
        </div>

	<!-- Password -->
        <div class="form-group">
          <label>Password</label>
          <span class="inputSuccess alert alert-success glyphicon glyphicon-ok"></span>
          <input class="form-control" type="password" name="password">
          <p>Password must be atleast 6 characters</p>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
          <label>Confirm Password</label>
          <input class="form-control" type="password" name="password">
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
          <button class="btn btn-success" type="submit"name="submitRegister">Submit</button>
        </div>

      </div><!-- End Col -->
    </div><!-- End Row -->
  </form>
<div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
  $(function(){

    //Input Error Checking for Full Name Field
    $('#fullName').blur(function(){
      $('#emptyName').hide();
      $('#invalidName').hide();
      $('#nameSuccess').hide();

      //Checks if field is empty
      if(!$(this).val()){
        $('#emptyName').show();
      } else

      //Checks that only alphabet letters are allowed
      if( !($(this).val().match(/[a-z]/i)) ){
        $('#invalidName').show();
      } else

      $('#nameSuccess').show();

    });

    //Input Error Checking for Phone Number Field
    $('#phoneNumber').blur(function(){
      $('#emptyPhoneNumber').hide();
      $('#invalidPhoneNumber').hide();
      $('#phoneNumberSuccess').hide();

      //Checks if field is empty
      if(!$(this).val()){
        $('#emptyPhoneNumber').show();
      } else

      //Checks that only alphabet letters are allowed
      if( !($(this).val().match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)) ){
        $('#invalidPhoneNumber').show();
      } else

      $('#phoneNumberSuccess').show();

    });




  });


</script>
