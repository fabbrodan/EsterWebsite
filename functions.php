<?php

class Functions {

    function loadImgsArchive() {
        $dir = '/var/www/html/images';
        $files = preg_grep('/^([^.])/', scandir($dir));
        $files = array_values($files);

        return $files;
    }

    function loadFilesArchive() {
        $dir = '/var/www/html/documents';
        $files = preg_grep('/^([^.])/', scandir($dir));
        $files = array_values($files);

        return $files;
    }

    function loginFunction() {

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
            session_start();
            $_SESSION["failed"] = true;
            header("Location: login.php");
        }
    }

    function uploadFunction() {

        $json_string = file_get_contents('/var/www/html/config.json');
        $json_data = json_decode($json_string);

        $server = $json_data->DatabaseConnection->server;
        $user = $json_data->DatabaseConnection->login;
        $psw = $json_data->DatabaseConnection->password;
        $database = $json_data->DatabaseConnection->database;

        $conn = new mysqli($server, $user, $psw, $database);

        $target = "/var/www/html/images/";

        if (!empty($_FILES)) {

            $showOnSite = 0;
            if (isset($_POST["showCheck"])) {
                $showOnSite = 1;
            }

            $total = count($_FILES['images']['name']);

            for($i=0; $i < $total; $i++) {
                $tmpPath = $_FILES['images']['tmp_name'][$i];
                $fileName = $_FILES['images']['name'][$i];
                $savePath = $target . $fileName;
                $fileType = $_FILES['images']['type'][$i];
                $now = time();
                $nowDate = date("Y-m-d h:m:s", $now);
                move_uploaded_file($tmpPath, $savePath);

                $sql = "INSERT INTO Images(fileName, fileType, uploaded, showOnSite) VALUES('{$fileName}', '{$fileType}', '{$nowDate}', {$showOnSite});";

                mysqli_query($conn, $sql);
            }
        }
        mysqli_close($conn);
    }

    function getImages() {

        $json_string = file_get_contents('/var/www/html/config.json');
        $json_data = json_decode($json_string);

        $server = $json_data->DatabaseConnection->server;
        $user = $json_data->DatabaseConnection->login;
        $psw = $json_data->DatabaseConnection->password;
        $database = $json_data->DatabaseConnection->database;

        $conn = new mysqli($server, $user, $psw, $database);

        $sql = "SELECT * FROM Images WHERE showOnSite = 1 ORDER BY uploaded DESC;";

        $result = $conn->query($sql);

        return $result;
    }

    function addUser() {
        
        $userName = $_POST["screenName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $pswBase64 = base64_encode($password);

        $json_string = file_get_contents('/var/www/html/config.json');
        $json_data = json_decode($json_string);

        $server= $json_data->DatabaseConnection->server;
        $user = $json_data->DatabaseConnection->login;
        $database = $json_data->DatabaseConnection->database;
        $password = $json_data->DatabaseConnection->password;

        $conn = new mysqli($server, $user, $password, $database);

        $sql = "INSERT INTO Users VALUES('{$userName}', '{$email}', '{$pswBase64}', NULL);";

        $conn->query($sql);
    }
}
?>