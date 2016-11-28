<?php
  //defined variables for gatorpartment post
  $addressErr = $cityErr = $stateErr = $zip_codeErr = $complexErr = $termErr = $priceErr = $square_feetErr = $number_of_bedroomErr = $number_of_bathErr = $utilities_providedErr = $building_accomodationErr = $building_restrictionErr = $availability_dateErr = "";
  $address = $city = $state = $zip_code = $complex = $term = $price = $square_feet = $number_of_bedroom = $number_of_bath = $utilities_provided = $building_accomodation = $building_restriction = $availability_date = "";


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
  }
?>

<h2>Post A Listing</h2>

<form method="post" action="<?php echo URL;?>home/listing_form">

  <input type="text" name="address"></>* <?php echo $addressErr;?>

  <!-- button for form submission usage-->
  <input type="submit" name="Post" value="Post">

</form>
