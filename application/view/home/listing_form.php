<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

//for gatorpartment
$addressErr = $cityErr = $stateErr = $zip_codeErr = $complexErr = $termErr = $priceErr = $square_feetErr = $number_of_bedroomErr = $number_of_bathErr = $utilities_providedErr = $building_accomodationErr = $building_restrictionErr = $availability_dateErr = "";
$address = $city = $state = $zip_code = $complex = $term = $price = $square_feet = $number_of_bedroom = $number_of_bath = $utilities_provided = $building_accomodation = $building_restriction = $availability_date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
    // check if address only contains letters, numbers, and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address)) {
      $addressErr = "Only letters, numbers, and white space allowed";
    }
  }

  if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = test_input($_POST["city"]);
    // check if city only contains letters, numbers, and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$city)) {
      $cityErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["state"])) {
    $stateErr = "state is required";
  } else {
    $state = test_input($_POST["state"]);
    // check if state is selected
    if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
      $stateErr = "State has not been selected";
    }
  }

  if (empty($_POST["zip_code"])) {
    $zip_codeErr = "zip code is required";
  } else {
    $zip_code = test_input($_POST["zip_code"]);
    // check if zip code only contains numbers
    if (!preg_match("/^[0-9]*$/",$zip_code)) {
      $zip_codeErr = "Only numbers allowed";
    }
  }
/*
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  */
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Post A Listing</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<!--
  <h3>Location</h3>

    <listinglabel>Address: </listinglabel><input type="text" name="address" value="<?php echo $address;?>"></>
    <span class="error">* <?php echo $addressErr;?></span>
    <br><br>

    <listinglabel>City: </listinglabel><input type="text" name="city" value="<?php echo $city;?>"></>
    <span class="error">* <?php echo $cityErr;?></span>

    <listinglabel>State: </listinglabel><select name="state">
      <option value=""></option>
      <option value="AL">AL</option>
      <option value="AK">AK</option>
      <option value="AZ">AZ</option>
      <option value="AR">AR</option>
      <option value="CA">CA</option>
      <option value="CO">CO</option>
      <option value="CT">CT</option>
      <option value="DE">DE</option>
      <option value="FL">FL</option>
      <option value="GA">GA</option>
      <option value="HI">HI</option>
      <option value="ID">ID</option>
      <option value="IL">IL</option>
      <option value="IN">IN</option>
      <option value="IA">IA</option>
      <option value="KS">KS</option>
      <option value="KY">KY</option>
      <option value="LA">LA</option>
      <option value="ME">ME</option>
      <option value="MD">MD</option>
      <option value="MA">MA</option>
      <option value="MI">MI</option>
      <option value="MN">MN</option>
      <option value="MS">MS</option>
      <option value="MO">MO</option>
      <option value="MT">MT</option>
      <option value="NE">NE</option>
      <option value="NV">NV</option>
      <option value="NH">NH</option>
      <option value="NJ">NJ</option>
      <option value="NM">NM</option>
      <option value="NY">NY</option>
      <option value="NC">NC</option>
      <option value="ND">ND</option>
      <option value="OH">OH</option>
      <option value="OK">OK</option>
      <option value="OR">OR</option>
      <option value="PA">PA</option>
      <option value="RI">RI</option>
      <option value="SC">SC</option>
      <option value="SD">SD</option>
      <option value="TN">TN</option>
      <option value="TX">TX</option>
      <option value="UT">UT</option>
      <option value="VT">VT</option>
      <option value="VA">VA</option>
      <option value="WA">WA</option>
      <option value="WV">WV</option>
      <option value="WI">WI</option>
      <option value="WY">WY</option>
    </select></>
    <span class="error">* <?php echo $stateErr;?></span>

    <listinglabel>Zip Code: </listinglabel><input type="text" name="zip_code" value="<?php echo $zip_code;?>"></>
    <span class="error">* <?php echo $zip_codeErr;?></span>
    <br></br>

  <h3>Space</h3>

    Complex: <select name="term">
      <option value=""></option>
      <option value="condo">condo</option>
      <option value="apartment">apartment</option>
      <option value="singlehome">single home</option>
      <option value="townhome">town home</option>
    </select>
    <span class="error">* <?php echo $complexErr;?></span>

    Term: <select name="term">
      <option value=""></option>
      <option value="lease">lease</option>
      <option value="monthtomonth">month to month</option>
    </select>
    <span class="error">* <?php echo $termErr;?></span>

    Price: <input type="text" name="price" value="<?php echo $price;?>">
    <span class="error">* <?php echo $priceErr;?></span>
    <br></br>

    Square Feet: <input type="text" name="price" value="<?php echo $price;?>">
    <span class="error">* <?php echo $square_feetErr;?></span>
    # Of Bedroom(s): <input type="text" name="number_of_bedroom" value="<?php echo $number_of_bedroom;?>">
    <span class="error">* <?php echo $number_of_bedroomErr;?></span>
    # Of Bath(s): <input type="text" name="number_of_bath" value="<?php echo $number_of_bath;?>">
    <span class="error">* <?php echo $number_of_bathErr;?></span>
    <br></br>

  <h3>Building Info</h3>
    <br>

    <h4>Utilities Provided:</h4>
    <input type="checkbox" name="utilities_provided" <?php if (isset($utilities_provided) && $utilities_provided=="electricity") echo "checked";?> value="electricity"><listinglabel>Electricity</listinglabel>
    <input type="checkbox" name="utilities_provided" <?php if (isset($utilities_provided) && $utilities_provided=="water") echo "checked";?> value="water"><listinglabel>Water</listinglabel>
    <input type="checkbox" name="utilities_provided" <?php if (isset($utilities_provided) && $utilities_provided=="gas") echo "checked";?> value="gas"><listinglabel>Gas</listinglabel>
    <br><br>

    <h4>Buidling Accomodations</h4>
    <input type="checkbox" name="building_accomodation" <?php if (isset($building_accomodation) && $building_accomodation=="parking") echo "checked";?> value="parking">Parking
    <input type="checkbox" name="building_accomodation" <?php if (isset($building_accomodation) && $building_accomodation=="laundry") echo "checked";?> value="laundry">Laundry
    <input type="checkbox" name="building_accomodation" <?php if (isset($building_accomodation) && $building_accomodation=="elevator") echo "checked";?> value="elevator">Elevator
    <input type="checkbox" name="building_accomodation" <?php if (isset($building_accomodation) && $building_accomodation=="wheelchair_accessibility") echo "checked";?> value="wheelchair_accesibility">Wheelchair Accessibility
    <input type="checkbox" name="building_accomodation" <?php if (isset($building_accomodation) && $building_accomodation=="outdoor_space") echo "checked";?> value="outdoor_space">Outdoor Space
    <input type="checkbox" name="building_accomodation" <?php if (isset($building_accomodation) && $building_accomodation=="pool") echo "checked";?> value="pool">Pool
    <br><br>

    <h4>Building Restrictions</h4>
    <input type="checkbox" name="building_restriction" <?php if (isset($building_restriction) && $building_restriction=="smoking") echo "checked";?> value="smoking">Smoking
    <input type="checkbox" name="building_restriction" <?php if (isset($building_restriction) && $building_restriction=="dogs") echo "checked";?> value="dogs">Dogs
    <input type="checkbox" name="building_restriction" <?php if (isset($building_restriction) && $building_restriction=="cats") echo "checked";?> value="cats">Cats
    <input type="checkbox" name="building_restriction" <?php if (isset($building_restriction) && $building_restriction=="other") echo "checked";?> value="other">Other
      <input type="text" name="building_restriction" value="<?php echo $building_restriction;?>">
    <br><br>

    <listinglabel>Comment: </listinglabel><br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
-->
<h3>Location</h3>
<table class="lf" border="1">
  <tr>
    <th class="lf">Address</th>
  </tr>
  <tr>
    <td class="lf"><input type="text" name="address" value="<?php echo $address;?>"></><span class="error">* <?php echo $addressErr;?></span></td>
  </tr>
</table>

<table class="lf" border="1">
  <tr>
    <th class="lf">City</th>
    <th class="lf">State</th>
    <th class="lf">Zip Code</th>
  </tr>
  <tr>
    <td class="lf"><input type="text" name="city" value="<?php echo $city;?>"></><span class="error">* <?php echo $cityErr;?></span></td>
    <td class="lf"><select name="state">
      <option value=""></option>
      <option value="AL">AL</option>
      <option value="AK">AK</option>
      <option value="AZ">AZ</option>
      <option value="AR">AR</option>
      <option value="CA">CA</option>
      <option value="CO">CO</option>
      <option value="CT">CT</option>
      <option value="DE">DE</option>
      <option value="FL">FL</option>
      <option value="GA">GA</option>
      <option value="HI">HI</option>
      <option value="ID">ID</option>
      <option value="IL">IL</option>
      <option value="IN">IN</option>
      <option value="IA">IA</option>
      <option value="KS">KS</option>
      <option value="KY">KY</option>
      <option value="LA">LA</option>
      <option value="ME">ME</option>
      <option value="MD">MD</option>
      <option value="MA">MA</option>
      <option value="MI">MI</option>
      <option value="MN">MN</option>
      <option value="MS">MS</option>
      <option value="MO">MO</option>
      <option value="MT">MT</option>
      <option value="NE">NE</option>
      <option value="NV">NV</option>
      <option value="NH">NH</option>
      <option value="NJ">NJ</option>
      <option value="NM">NM</option>
      <option value="NY">NY</option>
      <option value="NC">NC</option>
      <option value="ND">ND</option>
      <option value="OH">OH</option>
      <option value="OK">OK</option>
      <option value="OR">OR</option>
      <option value="PA">PA</option>
      <option value="RI">RI</option>
      <option value="SC">SC</option>
      <option value="SD">SD</option>
      <option value="TN">TN</option>
      <option value="TX">TX</option>
      <option value="UT">UT</option>
      <option value="VT">VT</option>
      <option value="VA">VA</option>
      <option value="WA">WA</option>
      <option value="WV">WV</option>
      <option value="WI">WI</option>
      <option value="WY">WY</option>
    </select></>
    <span class="error">* <?php echo $stateErr;?></span></td>
    <td class="lf"><input type="text" name="zip_code" value="<?php echo $zip_code;?>"></><span class="error">* <?php echo $zip_codeErr;?></span></td>
  </tr>
</table>

<h3>Space</h3>
<!--row 1 -->
<table class="lf" border="1">
  <tr>
    <th class="lf">Complex</th>
    <th class="lf">Term</th>
    <th class="lf">Price</th>
  </tr>
  <tr>
    <td class="lf">
      <select name="term">
        <option value=""></option>
        <option value="condo">condo</option>
        <option value="apartment">apartment</option>
        <option value="singlehome">single home</option>
        <option value="townhome">town home</option>
      </select>
      <span class="error">* <?php echo $complexErr;?></span>
    </td>
    <td class="lf">
      <select name="term">
        <option value=""></option>
        <option value="lease">lease</option>
        <option value="monthtomonth">month to month</option>
      </select>
      <span class="error">* <?php echo $termErr;?></span>
    </td>
    <td class="lf">
      <input type="text" name="price" value="<?php echo $price;?>">
      <span class="error">* <?php echo $priceErr;?></span>
    </td>
  </tr>
</table>
<!-- row 2 -->
<table class="lf" border="1">
  <tr>
    <th class="lf">Square Feet</th>
    <th class="lf"># Of Bedroom(s)</th>
    <th class="lf"># Of Bath(s)</th>
  </tr>
  <tr>
    <td class="lf">
      <input type="text" name="square_feet" value="<?php echo $square_feet;?>">
      <span class="error">* <?php echo $square_feetErr;?></span>
    </td>
    <td class="lf">
      <input type="text" name="number_of_bedroom" value="<?php echo $number_of_bedroom;?>">
      <span class="error">* <?php echo $number_of_bedroomErr;?></span>
    </td>
    <td class="lf">
      <input type="text" name="number_of_bath" value="<?php echo $number_of_bath;?>">
      <span class="error">* <?php echo $number_of_bathErr;?></span>
    </td>
  </tr>
</table>

  <!-- button for form submission usage-->
  <input type="submit" name="submit" value="Submit">

</form>

<!-- echo user input -->
<h2>PHP Form Validation Example</h2>
<h3>currently only showing address, city, state, & zip code</h3>
<?php
echo "<h2>Your Input:</h2>";
echo $address;
echo "<br>";
echo $city;
echo "<br>";
echo $state;
echo "<br>";
echo $zip_code;
echo "<br>";
?>

<!-- footer below -->
<div>
  <footer>
  	<hr />
  	<p class="pull-right"><a href="#">Back to top</a></p>
  	<p>
  		<a href="<?php echo URL;?>home/index">Home</a> |
  		<a href="<?php echo URL;?>home/about">About</a> |
  		<a href="<?php echo URL;?>home/typography">Typography</a> |
  		<a href="<?php echo URL;?>home/terms">Terms and Conditions</a> |
  		<a href="<?php echo URL;?>home/contact">Contact Us</a><br />
  		All content &copy; 2014 | <a href="<?php echo URL;?>home/about">Built with Twitter Bootstrap</a> | <a href="https://wrapbootstrap.com/">WrapBootstrap</a>.
  	</p>
  </footer>
</div>
