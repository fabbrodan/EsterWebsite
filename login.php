<?php
require 'head.html';
?>
<form type="submit" method="POST" action="loginFunc.php">
    <input type="text" name="screenName">
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>
<?php
require 'foot.php'
?>