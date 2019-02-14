<?php
require 'head.php';
require 'functions.php';
$functions = new Functions();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $functions->loginFunction();
}

?>
<div class="container-fluid">
<form method="POST" action="login.php">
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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    session_start();
    if (isset($_SESSION["failed"])) {
        echo "<div class='container'>" .
        "<div class='alert alert-danger alert-dismissable fade show'>" .
        "<button type='button' class='close' data-dismiss='alert'>&times;</button>" .
        "<strong style='text-color:red;'>Wrong username/e-mail or password!</strong>" .
        "</div></div>";
    }
    unset($_SESSION["failed"]);
}

require 'foot.php'
?>