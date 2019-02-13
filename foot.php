</body>

<?php

session_start();

?>

<footer class="footer">
    <div class="container">
        <nav class="navbar navbar-expand navbar-light bg-light fixed-bottom">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href ="/index.php">Home<span class="sr-only"></span></a>
                    </li>
                    <?php
                    if (!isset($_SESSION["user"])) {
                        echo "<li class='nav-item'><a class='nav-link' href='/login.php'>Login<span class='sr-only></span></a></li>";

                    }
                    if (isset($_SESSION["user"])) {
                        echo "<li class='nav-item'><a class='nav-link' href='/upload.php'>Upload<span class='sr-only'></span></a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='/logout.php'>Logout<span class='sr-only'></span></a></li>";
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</footer>

</html>