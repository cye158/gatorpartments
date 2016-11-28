<?php
  //defined variables for gatorpartment post
  $addressErr = $cityErr = $stateErr = $zip_codeErr = $complexErr = $termErr = $priceErr = $square_feetErr = $number_of_bedroomErr = $number_of_bathErr = $utilities_providedErr = $building_accomodationErr = $building_restrictionErr = $availability_dateErr = "";
  $address = $city = $state = $zip_code = $complex = $term = $price = $square_feet = $number_of_bedroom = $number_of_bath = $utilities_provided = $building_accomodation_parking = $building_accomodation_laundry = $building_accomodation_elevator = $building_accomodation_wheelchair = $building_accomodation_outdoor = $building_accomodation_pool = $building_restriction = $availability_date = "";


  if(isset($_POST['Post']))
  {

    if (empty($_POST["address"]))
    {
    $addressErr = "address is required";
    } else {
      $address = $_POST['address'];

      // check if address only contains letters, numbers, and whitespace
      if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address)) {
      $addressErr = "Only letters, numbers, and white space allowed";
      } else {
        echo $address;
      }
    }

    if (empty($_POST["state"]))
    {
      $stateErr = "state is required";
    } else {
      $state = $_POST['state'];

      if (!preg_match("/^[A-Z]*$/",$state)) {
      $stateErr = "State has not been selected";
      } else {
        echo $state;
      }
    }

    // accomodation
      //parking
      if (isset($_POST["building_accomodation_parking"]))
      {
          $building_accomodation_parking = $_POST['building_accomodation_parking'];
          echo $building_accomodation_parking;
      }
      //laundry


  }
?>

<h2>Post A Listing</h2>

<form method="post" action="<?php echo URL;?>home/listing_form">

  <input type="text" name="address"></>* <?php echo $addressErr;?>
  <br>
  <select name="state">
      <option value=" "></option>
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
    </select></>* <?php echo $stateErr;?>
<br>

<input type="checkbox" name="building_accomodation_parking" <?php if (isset($building_accomodation_parking) && $building_accomodation_parking=="parking") echo "checked";?> value="parking">Parking
<input type="checkbox" name="building_accomodation_laundry" <?php if (isset($building_accomodation_laundry) && $building_accomodation_laundry=="laundry") echo "checked";?> value="laundry">Laundry
<input type="checkbox" name="building_accomodation_elevator" <?php if (isset($building_accomodation_elevator) && $building_accomodation_elevator=="elevator") echo "checked";?> value="elevator">Elevator
<input type="checkbox" name="building_accomodation_wheelchair" <?php if (isset($building_accomodation_wheelchair) && $building_accomodation_wheelchair=="wheelchair_accessibility") echo "checked";?> value="wheelchair_accesibility">Wheelchair Accessibility
<input type="checkbox" name="building_accomodation_outdoor" <?php if (isset($building_accomodation_outdoor) && $building_accomodation_outdoor=="outdoor_space") echo "checked";?> value="outdoor_space">Outdoor Space
<input type="checkbox" name="building_accomodation_pool" <?php if (isset($building_accomodation_pool) && $building_accomodation_pool=="pool") echo "checked";?> value="pool">Pool


  <!-- button for form submission usage-->
  <input type="submit" name="Post" value="Post">

</form>
