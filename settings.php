<?php
require 'head.php';
require 'functions.php';
$functions = new Functions();
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addUser"])) {
    $functions->addUser();
    echo "<div class='container'>" .
    "<div class='alert alert-success alert-dismissable fade show' role='alert'>" .
    "<button type='button' class='close' data-dismiss='alert'>&times;</button>" .
    "<strong>User added</strong>" .
    "</div></div>";
}
?>

<div class="container">
    <div class="collapse" id="generalNav">
        <div class="bg-dark p-4">
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
    <h3 class="text-white">General</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#generalNav" aria-controls="generalNav" aria-expanded="false" aria-label="ToggleGeneral">
        <span class="navbar-toggler-icon"></span>
    </nav>
</div>

<div class="container">
    <div class="collapse" id="usersNav">
        <div class="bg-dark p-4">
            <div class="container">
                <div class="collapse" id="addUserNav">
                    <div class="bg-dark p-4">
                        <div class="container-fluid">
                            <form method="POST" action="settings.php" name="addUserForm">
                                <div class="container">    
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="screenName" id="screenName" placeholder="Username:">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="email" id="email" placeholder="E-Mail:">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password" id="password" placeholder="Password:">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <input type="hidden" name="addUser">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <h4 class="text-white">
                    <button class="btn btn-light" data-toggle="collapse" data-target="#addUserNav" aria-controls="addUserNav" aria-expanded="false" aria-label="ToggleAddUser">
                    Add User
                    </button>
                </h4>
            </nav>
            <nav class="navbar navbar-dark bg-dark">
                <h4 class="text-white">
                    <button class="btn btn-light">Remove User</button>
                </h4>
            </nav>
        </div>
        <div class="container">
    </div>
    <nav class="navbar navbar-dark bg-dark">
    <h3 class="text-white">Users</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#usersNav" aria-controls="usersNav" aria-expanded="false" aria-label="ToggleUsers">
        <span class="navbar-toggler-icon"></span>
    </nav>
</div>

<?php
require 'foot.php'
?>