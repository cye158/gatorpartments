<div class="container">
    <h2>You are in the View: application/view/users/login.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div class="box">
        <h3>Add a user</h3>
        <form action="<?php echo URL; ?>users/createUser" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="" required />
            <label>Password</label>
            <input type="text" name="password" value="" required />
         
            <input type="submit" name="submit_create_user" value="Submit" />
        </form>
    </div>
</div>
