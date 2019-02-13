<?php

require 'head.php';

$json_string = file_get_contents('/var/www/html/config.json');
$json_data = json_decode($json_string);

$server = $json_data->DatabaseConnection->server;
$user = $json_data->DatabaseConnection->login;
$psw = $json_data->DatabaseConnection->password;
$database = $json_data->DatabaseConnection->database;

$conn = new mysqli($server, $user, $psw, $database);

$target = "/var/www/html/images/";

if (strtolower($_SERVER['REQUEST_METHOD']) == 'post' && !empty($_FILES)) {

    $total = count($_FILES['images']['name']);

    for($i=0; $i < $total; $i++) {
        $tmpPath = $_FILES['images']['tmp_name'][$i];
        $fileName = $_FILES['images']['name'][$i];
        $savePath = $target . $fileName;
        $fileType = $_FILES['images']['type'][$i];

        move_uploaded_file($tmpPath, $savePath);

        $sql = "INSERT INTO Images(fileName, fileType) VALUES('{$fileName}', '{$fileType}');";

        mysqli_query($conn, $sql);
    }
}

mysqli_close($conn);


echo "<h1>Uploaded!</h1>";
sleep(3);

require 'foot.php';

?>