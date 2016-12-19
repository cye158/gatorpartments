
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
<div class="panel">
  <div class="panel-body">
    <div class="col-md-3 list-group">Property column<br>
      <?php
      $index = 0;
      foreach($messages as $message){ ?>
        <a onclick="setContentBox( <?php echo '"' . $message->content . '"'; ?>)" class="list-group-item list-group-item-action">
          <?php echo($listings[$index]->title); ?>
        </a>
        <?php } ?>



      </div>
      <div class="col-md-3 list-group">Message from column<br>
        <?php
        $index = 0;
        foreach($messages as $message){ ?>
          <a onclick="setContentBox(<?php echo "'" . $message->content . "'"; ?>)" class="list-group-item list-group-item-action">
            <?php echo $messageUserNames[$index];
            $index++; ?>
          </a>
          <?php } ?>

        </div>
        <div class="col-md-4 panel">Message content column
          <br />
          <div class="panel-body" id="messageContentBox">
            <?php
            echo('Message content goes here.');
            ?>
          </div>
        </div>
      </div>
    </div>
    <br>

    <script type="text/javascript">
    function setContentBox(messageText){
      document.getElementById("messageContentBox").innerHTML = messageText;
    }
    </script>
