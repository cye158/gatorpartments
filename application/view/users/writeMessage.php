<div class="container">
    <h2>You are in the View: application/view/users/writeMessage.php (everything in this box comes from that file)</h2> 
    <!-- add message form -->
    <div class="box">
        <h3>Write message</h3>
        <form action="<?php echo URL; ?>messages/addMessage" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="" required />
            <label>Toname</label>
            <input type="text" name="toname" value="" required />
	    <label>Content</label>
	    <input type="text" name="content" value="" required />
         
            <input type="submit" name="submit_add_message" value="Submit" />
        </form>
    </div>
</div>
