<div class="container">
  <h2>You are in the View: application/view/users/writeMessage.php (everything in this box comes from that file)</h2>
  <!-- add message form -->
  <div class="box">
    <h3>Write message</h3>
    <div class="panel">
      <div class="panel-body">
        <form action="<?php echo URL; ?>messages/addMessage" method="POST">
          <div class="panel-group">
            <div class="col-md-3">
              <label>Send a message to:</label><br>
              <input type="text" name="toname" value=<?php echo $landlordUserName ; ?> required readonly/>
            </div>
            <div class="col-md-3">
              <label>Listing ID:</label><br>
              <input type="text" name="listingId" value =<?php echo $listingId ; ?> required readonly/>
            </div>
          </div>
          <br>
          <div class="panel-group">
          <div class="col-md-6">
            <label>Message:</label><br>
            <textarea type="text" name="content" value="" required /></textarea>
<br>
            <input type="submit" name="submit_add_message" value="Send message" style="float:right;"/>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
