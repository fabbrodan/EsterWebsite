<?php
session_start();
?>


<div style="width:10%;left:0px;position:fixed;">
<nav class="navbar bg-dark">
    <ul class="nav flex-column" style="width:10%;">
        <li class="nav-item active">
            <a class="nav-link" href="/index.php">Home</a>
        </li>
        <?php
            if (!isset($_SESSION["user"])) {
            echo "<li class='nav-item active'><a class='nav-link' href='/login.php'>Login</a></li>";
            }
            if (isset($_SESSION["user"])) {
                echo "<li class='nav-item active'><a class='nav-link' href='/upload.php'>Upload</a></li>";
                echo "<li class='nav-item active'><a class='nav-link' href='/logout.php'>Logout</a></li>";
                echo "<li class='nav-item active'><a class='nav-link' href='/settings.php'>Settings</a></li>";
                echo "<li class='nav-item active'><a class='nav-link' href='/archive.php'>Archive</a></li>";
            }
        ?>
    </ul>
</nav>
</div>