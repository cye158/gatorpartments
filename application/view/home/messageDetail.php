<div class="container">
    <h2>You are in the View: application/view/home/messageDetail.php (everything in this box comes from that file)</h2>
    
        <h3>Message</h3>
         <h3>From: <?php echo "	".$messageUserName; ?></h3>
         <h3>Listing Id: <?php echo "	" . $message->listingId; ?></h3>
         <h3>Content</h3>
         <p><?php echo $message->content; ?></p>

<form action="<?php echo URL . 'messages/contactBack/' . $messageUserName .'/'. $message->listingId ;?>" method = "POST" id="form1">
 </form> 
<button class="b b0 navbar-right msg-btn" style="background-color: #609b62;" type="submit" form="form1" name="submit_contact_back"><h4>Contact Back</h4></button>
    
</div>
