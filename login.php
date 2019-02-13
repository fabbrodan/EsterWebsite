<?php
require 'head.html';
?>
<<<<<<< HEAD
<form type="submit" method="POST" action="loginFunc.php">
    <input type="text" name="screenName">
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>
=======

<form method="POST" action="loginFunc.php">
    <div class="container">    
        <div class="form-group">
            <label for="screenName">Username/E-Mail:</label>
            <input class="form-control" type="text" name="screenName" id="screenName">
        </div>
        <div class="form-group">
            <label for="psw">Password:</label>
            <input class="form-control" type="password" name="password" id="psw">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

>>>>>>> ff2c2ebc3ad688b528eabc4f4634212506cb8df9
<?php
require 'foot.php'
?>