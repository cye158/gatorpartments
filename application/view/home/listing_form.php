<?php
  //defined variables for gatorpartment post
  $addressErr = $cityErr = $stateErr = $zip_codeErr = $complexErr = $termErr = $priceErr = $square_feetErr = $number_of_bedroomErr = $number_of_bathErr = $utilities_providedErr = $building_accomodationErr = $building_restrictionErr = $availability_dateErr = "";
  $address = $city = $state = $zip_code = $complex = $term = $price = $square_feet = $number_of_bedroom = $number_of_bath = $utilities_provided = $building_accomodation = $building_restriction = $availability_date = "";

  function display()
  {
    //echo "hello".$_POST["studentname"];
    echo $address;
  }
  if(isset($_POST['Post']))
  {
     display();
  }
?>

<h2>Post A Listing</h2>

<form method="post" action="<?php echo URL;?>home/listing_form">

  <input type="text" name="studentname" value="<?php echo $address;?>">

  <!-- button for form submission usage-->
  <input type="submit" name="Post" value="Post">

</form>
