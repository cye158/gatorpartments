<div class="container">
    <h1> This is the Login Section </h1>

    <form action="<?php echo URL . 'user/authenticateLogin' ?>" method="post">
    Username: <input type="text" name="username"> <br>
    Password: <input type="text" name="password">
    <input type="submit">
    </form>

    <h2> This is the Registration Section </h2>

    <form action="<?php echo URL . 'user/register' ?>" method="post">
    Username: <input type="text" name="username"> <br>
    Password: <input type="text" name="password"> <br>
    Email: <input type="text" name="email">
    <input type="submit">
    </form>

</div>
