<?php
  //defined variables for gatorpartment post
  $addressErr = $cityErr = $stateErr = $zip_codeErr = $complexErr = $termErr = $priceErr = $square_feetErr = $number_of_bedroomErr = $number_of_bathErr = $utilities_providedErr = $building_accomodationErr = $building_restrictionErr = $availability_dateErr = "";
  $address = $city = $state = $zip_code = $complex = $term = $price = $square_feet = $number_of_bedroom = $number_of_bath = $utilities_provided = $building_accomodation = $building_restriction = $availability_date = "";


?>

<h2>Post A Listing</h2>

<form method="post" action="listing_form.php">

  <input type="text" name="studentname">

  <!-- button for form submission usage-->
  <input type="submit" name="Post" value="Post">

</form>

<?php
function display()
{
  echo "hello".$_POST["studentname"];
}
if(isset($_POST['Post']))
{
   display();
}
?>
