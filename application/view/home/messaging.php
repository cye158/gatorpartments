<?php
  if(isset($_SESSION['isLandlord'])){
    $inboxType = 'landlord';
    echo("Landlord inbox.");
  }
  elseif (isset($_SESSION['isStudent'])) {
    $inboxType = 'student';
    echo("Student inbox.");
  }
  else{
    echo("No user type is defined.");
  }
 ?>

 <div class="col-md-3">Property column</div>
 <div class="col-md-3">Message from column</div>
 <div class="col-md-4">Message content column</div>
<table id="table">
  <tr>
    <th id="property">Property</th>
    <th id="messsageFrom">Message from:</th>
    <th id="selectMessage">Click to select message</th>
  </tr>
  <?php $index = 0; ?>
  <?php foreach ($messages as $message) { ?>

  <tr>
    <td headers="property"><a onclick="displayMessage(2);"><?php echo $listings[$index]->title; ?></a></td>
    <td headers="messageFrom" id="message0002"><a onclick="displayMessage(2);"><?php echo $messageUserNames[$index]; $index++; ?></a></td>
    <td headers="selectMessage" id="message0001"><a href="<?php echo URL . 'messages/showMessageDetail/' . $message->id ;?>"  class="btn btn-primary">Display Message</a></td>
  </tr>
  <?php  } ?>

</table>
<table>
  <tr>
    <td id="messageContent">
    </td>
  </tr>
</table>

<script>
 function displayMessage(messageID){
   if(messageID==1){
     document.getElementById("messageContent").innerHTML = "Content of message 1";
   }
   elseif(messageID==2){
     document.getElementById("messageContent").innerHTML = "Conent of message 2";
   }

 };
</script>
