<!-- Registration Form -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4 ">
      <form class="form-horizontal" action="<?php echo URL . 'user/register';?>" method="post">
        <div class="page-header">
          <h1>Create an Account</h1>
        </div>
	<!-- Full Name -->
        <div class="form-group">
          <label>Full Name</label>
          <input class="form-control" type="text" name="fullName">
        </div>

	<!-- Phone Number -->
	<div class="form-group">
	  <label>Phone Number</label>
	  <input class="form-control" type="tel" name="phoneNumber">
	</div>

	<!-- Email -->
        <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="email" name="email">
        </div>

	<!-- Username -->
        <div class="form-group">
          <label>Username</label>
          <input class="form-control" type="text" name="username">
        </div>

	<!-- Password -->
        <div class="form-group">
          <label>Password</label>
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
