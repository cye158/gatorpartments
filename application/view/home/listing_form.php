<?php
  //defined variables for gatorpartment post
  $addressErr = $cityErr = $stateErr = $zip_codeErr = $complexErr = $termErr = $priceErr = $feetErr = $bedroomErr = $bathErr = "";
  $address = $city = $state = $zip_code = $complex = $term = $price = $feet = $bedroom = $bath = $electricity = $water = $gas = $building_accomodation_parking = $building_accomodation_laundry = $building_accomodation_elevator = $building_accomodation_wheelchair = $building_accomodation_outdoor = $building_accomodation_pool = $building_restriction = "";


  if(isset($_POST['Post']))
  {
    // address conditions
    if (empty($_POST["address"]))
    {
    $addressErr = "Address: Address is required\r\n";
    } else {
      $address = $_POST['address'];

      // check if address only contains letters, numbers, and whitespace
      if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address)) {
      $addressErr = "Address: Only letters, numbers, and white space allowed\r\n";
      } else {
        echo nl2br($address."\n");
      }
    }

    // city conditions
    if (empty($_POST["city"]))
    {
      $cityErr = "City: City is required\r\n";
    } else {
      $city = $_POST['city'];

      // check if city only contains letters, whitespace, -, and period.
      if (!preg_match("/^[-a-zA-Z. ]*$/",$city)) {
      $cityErr = "City: Only letters, whitespaces, hyphens, and periods allowed\r\n";
      } else {
        echo nl2br($city."\n");
      }
    }

    // state conditions
    if (empty($_POST["state"]))
    {
      $stateErr = "State: State is required\r\n";
    } else {
      $state = $_POST['state'];
      echo nl2br($state."\n");
    }

    // zip code conditions
    if (empty($_POST["zip_code"]))
    {
      $zip_codeErr = "Zip Code: Zip Code is required\r\n";
    } else {
      $zip_code = $_POST['zip_code'];

      if (!preg_match("/^[-0-9]*$/",$zip_code)) {
        $zip_codeErr = "Zip Code: Only numbers & hyphens\r\n";
      } else {
        echo nl2br($zip_code."\n");
      }
    }

    // complex conditions
    if (empty($_POST["complex"]))
    {
      $complexErr = "Complex: Type of complex is required\r\n";
    } else {
      $complex = $_POST['complex'];
      echo nl2br($complex."\n");
    }

    // term conditions
    if (empty($_POST["term"]))
    {
      $termErr = "Term: Type of term is required\r\n";
    } else {
      $term = $_POST['term'];
      echo nl2br($term."\n");
    }

    // price conditions
    if (empty($_POST["price"]))
    {
      $priceErr = "Price: Price is required\r\n";
    } else {
      $price = $_POST['price'];

      if (!preg_match("/^[0-9]*$/",$price)) {
        $priceErr = "Price: Only numbers\r\n";
      } else {
        echo nl2br($price."\n");
      }
    }

    // square feet conditions
    if (empty($_POST["feet"]))
    {
      $feetErr = "Square Feet: Square feet is required\r\n";
    } else {
      $feet = $_POST['feet'];

      if (!preg_match("/^[0-9]*$/",$feet)) {
        $feetErr = "Square Feet: Only numbers\r\n";
      } else {
        echo nl2br($feet."\n");
      }
    }

    // number of bedroom conditions
    if (empty($_POST["bedroom"]))
    {
      $bedroomErr = "Bedroom: Bedroom is required\r\n";
    } else {
      $bedroom = $_POST['bedroom'];

      if (!preg_match("/^[0-9]*$/",$bedroom)) {
        $bedroomErr = "Bedroom: Only numbers\r\n";
      } else {
        echo nl2br($bedroom."\n");
      }
    }

    // number of bath conditions
    if (empty($_POST["bath"]))
    {
      $bathErr = "Bath: Bath is required\r\n";
    } else {
      $bath = $_POST['bath'];

      if (!preg_match("/^[0-9]*$/",$bath)) {
        $bathErr = "Bath: Only numbers\r\n";
      } else {
        echo nl2br($bath."\n");
      }
    }

    // utiltiies
      // electricity
      if (isset($_POST["electricity"]))
      {
          $electricity = $_POST['electricity'];
          echo $electricity;
      }
      // gas
      if (isset($_POST["gas"]))
      {
          $gas = $_POST['gas'];
          echo $gas;
      }
      // water
      if (isset($_POST["water"]))
      {
          $water = $_POST['water'];
          echo $water;
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

<!-- error messages -->
<?php echo nl2br($addressErr);?>
<?php echo nl2br($cityErr);?>
<?php echo nl2br($stateErr);?>
<?php echo nl2br($zip_codeErr);?>
<?php echo nl2br($complexErr);?>
<?php echo nl2br($termErr);?>
<?php echo nl2br($priceErr);?>
<?php echo nl2br($feetErr);?>
<?php echo nl2br($bedroomErr);?>
<?php echo nl2br($bathErr);?>

<form method="post" action="<?php echo URL;?>home/listing_form">

<!-- address table -->
<table class="lf" border="1">
  <tr>
    <th class="lf">Address *</th>
  </tr>
  <tr>
    <td class="lf">
      <input type="text" name="address"></>
    </td>
  </tr>
</table>

<!-- city state zipcode table -->
<table class="lf" border="1">
  <tr>
    <th class="lf">City *</th>
    <th class="lf">State *</th>
    <th class="lf">Zip Code *</th>
  </tr>
  <tr>
    <td class="lf">
      <input type="text" name="city"></>
    </td>
    <td class="lf">
      <select name="state">
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
    </td>
    <td class="lf">
      <input type="text" name="zip_code"></>
    </td>
  </tr>
</table>

<!-- complex term price table -->
<table class="lf" border="1">
  <tr>
    <th class="lf">Complex *</th>
    <th class="lf">Term *</th>
    <th class="lf">Price *</th>
  </tr>
  <tr>
    <td class="lf">
      <select name="complex">
        <option value=""></option>
        <option value="apartment">apartment</option>
        <option value="condo">condo</option>
        <option value="single home">single home</option>
        <option value="town home">town home</option>
      </select>
    </td>
    <td class="lf">
      <select name="term">
        <option value=""></option>
        <option value="lease">lease</option>
        <option value="month to month">month to month</option>
      </select>
    </td>
    <td class="lf">
      <input type="text" name="price"></>
    </td>
  </tr>
</table>

<!-- square feet bedroom bath -->
<table class="lf" border="1">
  <tr>
    <th class="lf">Square Feet *</th>
    <th class="lf"># Of Bedroom(s) *</th>
    <th class="lf"># Of Bath(s) *</th>
  </tr>
  <tr>
    <td class="lf">
      <input type="text" name="feet"></>
    </td>
    <td class="lf">
      <input type="text" name="bedroom"></>
    </td>
    <td class="lf">
      <input type="text" name="bath"></>
    </td>
  </tr>
</table>

<!-- utilities -->
<table class="lf" border="1">
  <tr>
    <td class="lf">
      <input type="checkbox" name="electricity" value="electricity">Electricity
    </td>
    <td class="lf">
      <input type="checkbox" name="gas" value="gas">Gas
    </td>
    <td class="lf">
      <input type="checkbox" name="water" value="water">Water
    </td>
  </tr>
</table>

<input type="checkbox" name="building_accomodation_parking" value="parking">Parking
<input type="checkbox" name="building_accomodation_laundry" <?php if (isset($building_accomodation_laundry) && $building_accomodation_laundry=="laundry") echo "checked";?> value="laundry">Laundry
<input type="checkbox" name="building_accomodation_elevator" <?php if (isset($building_accomodation_elevator) && $building_accomodation_elevator=="elevator") echo "checked";?> value="elevator">Elevator
<input type="checkbox" name="building_accomodation_wheelchair" <?php if (isset($building_accomodation_wheelchair) && $building_accomodation_wheelchair=="wheelchair_accessibility") echo "checked";?> value="wheelchair_accesibility">Wheelchair Accessibility
<input type="checkbox" name="building_accomodation_outdoor" <?php if (isset($building_accomodation_outdoor) && $building_accomodation_outdoor=="outdoor_space") echo "checked";?> value="outdoor_space">Outdoor Space
<input type="checkbox" name="building_accomodation_pool" <?php if (isset($building_accomodation_pool) && $building_accomodation_pool=="pool") echo "checked";?> value="pool">Pool

<br>
  <!-- button for form submission usage-->
  <input type="submit" name="Post" value="Post">

</form>
