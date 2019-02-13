<?php
require 'head.php';

$screenName = $_POST["screenName"];
$password = base64_encode($_POST["password"]);

$json_string = file_get_contents('/var/www/html/config.json');
$json_data = json_decode($json_string);

$server = $json_data->DatabaseConnection->server;
$user = $json_data->DatabaseConnection->login;
$psw = $json_data->DatabaseConnection->password;
$database = $json_data->DatabaseConnection->database;

$conn = new mysqli($server, $user, $psw, $database);

$sql = "SELECT 1 as _1 FROM Users WHERE ((userName = '{$screenName}') OR (userEmail = '{$screenName}')) AND userPassword = '{$password}';";

$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
if ($row['_1'] === '1') {
    session_start();
    $_SESSION["user"] = $screenName;
    header('Location: index.php');
}
else {
    echo "<h1>Ooops that didn't work now, did it?</h1>";
}

require 'foot.php';

?>