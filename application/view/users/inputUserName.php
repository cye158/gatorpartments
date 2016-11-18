<div class="container">
    <h2>You are in the View: application/view/users/inputUserName.php (everything in this box comes from that file)</h2> 
    <!-- add message form -->
    <div class="box">
        <h3>InputUserName</h3>
        <form action="<?php echo URL; ?>messages/showMessage" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="" required />
         
            <input type="submit" name="submit_show_message" value="Submit" />
        </form>
    </div>
</div>
