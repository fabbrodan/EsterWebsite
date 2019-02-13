<?php
require 'head.php';
?>
<div class="container-fluid">
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
</div>

<?php
require 'foot.php'
?>