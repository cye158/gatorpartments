<table id="table">
  <tr>
    <th id="property">Property</th>
    <th id="messsageFrom">Message from:</th>
    <th id="selectMessage">Click to select message</th>
  </tr>
  <tr>
    <td headers="property"><a onclick="displayMessage(1);">1505 Holloway Avenue</a></td>
    <td headers="messsageFrom" id="message0001"><a onclick="displayMessage(1);">Johnny Appleseed</a></td>
    <td headers="selectMessage" id="message0001"><input type="button" value="Display message" onClick="displayMessage(1)"></td>
  </tr>
  <tr><?php $messageID = 2 ;?>
    <td headers="property"><a onclick="displayMessage(2);">1505 Holloway Avenue</a></td>
    <td headers="messageFrom" id="message0002"><a onclick="displayMessage(2);">Jane Estudiante</a></td>
    <td headers="selectMessage" id="message0001"><a href="<?php echo URL . 'messages/showMessageDetail/' . $messageID ;?>"  class="btn btn-primary">Display Message</a></td>
  </tr>

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
