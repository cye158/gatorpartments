<?php
  //defined variables for gatorpartment post
  $address1Err = $address2Err = $cityErr = $stateErr = $zip_codeErr = $complexErr = $termErr = $priceErr = $feetErr = $bedroomErr = $bathErr = "";
  $address1 = $address2 = $city = $state = $zip_code = $complex = $term = $price = $feet = $bedroom = $bath = $electricity = $water = $gas = $parking = $laundry = $elevator = $wheelchair = $outdoor = $pool = $smoking = $dogs = $cats = $comment = "";


  if(isset($_POST['Post']))
  {
    // address conditions
    if (empty($_POST["address1"]))
    {
    $address1Err = "Address 1: Address is required\r\n";
    } else {
      $address1 = $_POST['address1'];

      // check if address only contains letters, numbers, and whitespace
      if (!preg_match("/^[a-zA-Z0-9. ]*$/",$address1)) {
      $address1Err = "Address 1: Only letters, numbers, periods and white space allowed\r\n";
      } else {
        echo nl2br($address1."\n");
      }
    }

    if (empty($_POST["address2"]))
    {
    $address2Err = "Address 2: Address is required\r\n";
    } else {
      $address2 = $_POST['address2'];

      // check if address only contains letters, numbers, and whitespace
      if (!preg_match("/^[a-zA-Z0-9. ]*$/",$address2)) {
      $address2Err = "Address 2: Only letters, numbers, periods and white space allowed\r\n";
      } else {
        echo nl2br($address2."\n");
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
      } else if ($feet > 20000) {
        $feetErr = "Square Feet: Only complexes smaller than 20,000 feet";
      }
      else {
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

      if (!preg_match('/[0-9]+\.([5]+)/',$bath)) {
        $bathErr = "Bath: Only numbers in whole or half increments\r\n";
      } else {
        echo nl2br($bath."\n");
      }
    }

    // utiltiies
      // electricity
      if (isset($_POST["electricity"]))
      {
          $electricity = $_POST['electricity'];
          echo nl2br($electricity."\n");
      }
      // gas
      if (isset($_POST["gas"]))
      {
          $gas = $_POST['gas'];
          echo nl2br($gas."\n");
      }
      // water
      if (isset($_POST["water"]))
      {
          $water = $_POST['water'];
          echo nl2br($water."\n");
      }

    // accomodation
      //elevator
      if (isset($_POST["elevator"]))
      {
          $elevator = $_POST['elevator'];
          echo nl2br($elevator."\n");
      }
      //laundry
      if (isset($_POST["laundry"]))
      {
          $laundry = $_POST['laundry'];
          echo nl2br($laundry."\n");
      }
      //outdoor
      if (isset($_POST["outdoor"]))
      {
          $outdoor = $_POST['outdoor'];
          echo nl2br($outdoor."\n");
      }
      //parking
      if (isset($_POST["parking"]))
      {
          $parking = $_POST['parking'];
          echo nl2br($parking."\n");
      }
      //pool
      if (isset($_POST["pool"]))
      {
          $pool = $_POST['pool'];
          echo nl2br($pool."\n");
      }
      //wheelchair
      if (isset($_POST["wheelchair"]))
      {
          $wheelchair = $_POST['wheelchair'];
          echo nl2br($wheelchair."\n");
      }

    //registriction
      //cats
      if (isset($_POST["cats"]))
      {
          $cats = $_POST['cats'];
          echo nl2br($cats."\n");
      }
      //dogs
      if (isset($_POST["dogs"]))
      {
          $dogs = $_POST['dogs'];
          echo nl2br($dogs."\n");
      }
      //smoking
      if (isset($_POST["smoking"]))
      {
          $smoking = $_POST['smoking'];
          echo nl2br($smoking."\n");
      }

    //comment
    if (isset($_POST["comment"]))
    {
        $comment = $_POST['comment'];
        echo nl2br($comment."\n");
    }
  }
?>

<h2>Post A Listing</h2>

<!-- error messages -->
<?php echo nl2br($address1Err);?>
<?php echo nl2br($address2Err);?>
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

  <div>
        <!-- address -->
        <label class="listinglabel">Address 1 *</label><input class="listingtext" type="text" name="address1"></>
        <label class="listinglabel">Address 2 *</label><input class="listingtext" type="text" name="address2"></>
        <!-- city state zipcode table -->
        <label class="listinglabel">City *</label><input class="listingtext" type="text" name="city"></>
  </div>
  <div>
        <label class="listinglabel">State *</label>&nbsp;<select class="listingform" name="state">
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
  </div>
  <div>
        <label class="listinglabel">Zip Code *</label><input class="listingtext" type="text" name="zip_code"></>
        <br><hr class="listingruler">
  </div>


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
    <th class="lf">Utilities Provided</th>
  </tr>
</table>
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

<!-- accomodations -->
<table class="lf" border="1">
<tr>
  <th class="lf">Building Accomodations</th>
</tr>
</table>
<table class="lf" border="1">
<tr>
  <td class="lf"><input type="checkbox" name="elevator" value="elevator">Elevator</td>
  <td class="lf"><input type="checkbox" name="laundry" value="laundry room">Laundry Room</td>
  <td class="lf"><input type="checkbox" name="outdoor" value="outdoor space">Outdoor Space</td>
  <td class="lf"><input type="checkbox" name="parking" value="parking">Parking</td>
  <td class="lf"><input type="checkbox" name="pool" value="pool">Pool</td>
  <td class="lf"><input type="checkbox" name="wheelchair" value="wheelchair accesibility">Wheelchair Accessibility</td>
</tr>
</table>

<!-- restrictions -->
<table class="lf" border="1">
<tr>
  <th class="lf">Building Restrictions</th>
</tr>
</table>
<table class="lf" border="1">
  <td class="lf"><input type="checkbox" name="cats" value="cats">Cats</td>
  <td class="lf"><input type="checkbox" name="dogs" value="dogs">Dogs</td>
  <td class="lf"><input type="checkbox" name="smoking" value="smoking">Smoking</td>
</table>

<!-- comment -->
<table class="lf" border="1">
  <tr>
    <th class="lf">Comment</th>
  </tr>
</table>
<table class="lf" border="1">
  <tr>
    <td class="lf">
      <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    </td>
  </tr>
</table>

<br>
  <!-- button for form submission usage-->
  <input type="submit" name="Post" value="Post">

</form>
