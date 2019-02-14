</body>

<?php

session_start();

?>

<footer class="footer fixed-bottom">
    <div class="container-fluid">
        <nav class="navbar sticky-bottom navbar-expand-md navbar-expand-lg navbar-expand-xl navbar-dark bg-dark">
            <div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href ="/index.php">Home<span class="sr-only"></span></a>
                    </li>
                        <?php
                            if (!isset($_SESSION["user"])) {
                                echo "<li class='nav-item active'><a class='nav-link' href='/login.php'>Login<span class='sr-only></span></a></li>";
                            }
                            if (isset($_SESSION["user"])) {
                                echo "<li class='nav-item active'><a class='nav-link' href='/upload.php'>Upload<span class='sr-only'></span></a></li>";
                                echo "<li class='nav-item active'><a class='nav-link' href='/logout.php'>Logout<span class='sr-only'></span></a></li>";
                                echo "<li class='nav-item active'><a class='nav-link' href='/settings.php'>Settings<span class='sr-only'></span></a></li>";
                            }
                        ?>
                </ul>
            </div>
        </nav>
    </div>
</footer>

</html>