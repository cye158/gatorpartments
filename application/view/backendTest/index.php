<?php

//Back End Testing

  foreach($listing as $row){
  
    echo $this->formatPrice($row->price) . " " . $row->street_address . "<br>";
  
  }


?>
