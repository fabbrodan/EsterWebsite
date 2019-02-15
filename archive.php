<?php
include 'head.php';
include 'functions.php';

session_start();

if(!isset($_SESSION["user"])) {
    header("Location: index.php");
}

?>

<div class="container">
    <nav class="navbar nav-fill navbar-dark bg-dark">
        <ul class="nav bg-dark nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Item 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Item 2</a>
            </li>
        </ul>
    </nav>
</div>