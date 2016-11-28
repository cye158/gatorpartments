<?php

//Back End Testing

  foreach($listing as $row){
  
    echo $this->priceFormat($row->price) . " " . $row->address_1 . "<br>";
  
  }


?>