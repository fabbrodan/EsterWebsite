<?php
session_start();
?>

<link rel="stylesheet" type="text/css" href="style.css">

<div class="container-fluid h-100">
    <div class="row h-100">
        <aside class="col-12 col-md-1 p-0">
            <nav class="navbar navbar-expand flex-md-column flex-row align-items-start p-0">
                <div class="collapse navbar-collapse">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item active">
                            <a class="nav-link sidebar-li-a" href="/index.php">Home</a>
                        </li>
                        <?php
                if (!isset($_SESSION["user"])) {
                echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/login.php'>Login</a></li>";
                }
                if (isset($_SESSION["user"])) {
                    echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/upload.php'>Upload</a></li>";
                    echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/logout.php'>Logout</a></li>";
                    //echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/settings.php'>Settings</a></li>";
                    echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/archive.php'>Archive</a></li>";
                }
                ?>
                    </ul>
                </div>
            </nav>
        </aside>
    </div>
</div>