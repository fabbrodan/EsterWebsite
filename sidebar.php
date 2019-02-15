<?php
session_start();
?>
<!--
<link rel="stylesheet" type="text/css" href="/style.css">
<div class="sidebar">
    <nav class="navbar">
        <ul class="nav flex-column" style="width:10%;">
            <li class="nav-item active">
                <a class="nav-link sidebar-li-a" href="/index.php">Home</a>
            </li>
            /* <?php
                if (!isset($_SESSION["user"])) {
                echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/login.php'>Login</a></li>";
                }
                if (isset($_SESSION["user"])) {
                    echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/upload.php'>Upload</a></li>";
                    echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/logout.php'>Logout</a></li>";
                    //echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/settings.php'>Settings</a></li>"
                    echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/archive.php'>Archive</a></li>";
                }
            ?> */
        </ul>
    </nav>
</div>
-->

<div class="container-fluid h-100">
    <div class="row h-100">
        <aside class="col-12 col-md-2 p-0 bg-dark fixed-top">
            <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start">
                <div class="collapse navbar-collapse">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link active" href="/index.php">Home</a>
                        </li>
                        <?php
                if (!isset($_SESSION["user"])) {
                echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/login.php'>Login</a></li>";
                }
                if (isset($_SESSION["user"])) {
                    echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/upload.php'>Upload</a></li>";
                    echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/logout.php'>Logout</a></li>";
                    //echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/settings.php'>Settings</a></li>"
                    echo "<li class='nav-item active'><a class='nav-link sidebar-li-a' href='/archive.php'>Archive</a></li>";
                }
                ?>
                    </ul>
                </div>
            </nav>
        </aside>
    </div>
</div>