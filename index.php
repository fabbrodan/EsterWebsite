<?php

require 'head.html';

$json_string = file_get_contents('/var/www/html/config.json');
$json_data = json_decode($json_string);

$server = $json_data->DatabaseConnection->server;
$user = $json_data->DatabaseConnection->login;
$psw = $json_data->DatabaseConnection->password;
$database = $json_data->DatabaseConnection->database;

$conn = new mysqli($server, $user, $psw, $database);

if ($conn->connect_error) {
	echo "<h1>CONNECTION ERROR</h1>";
		die();
}
?>
<div class="container">
<?php

$sql = "SELECT * FROM Images;";
$result = $conn->query($sql);
$i = 0;
while($row = mysqli_fetch_assoc($result)) {
	
	if ($i%3 == 0) {
		echo "<div class='row'>";
	}
	echo "<div class='col-md-4'>" . 
	"<div class='card bg-dark'>" . 
	"<img class='rounded card-img-top' src='images/{$row[fileName]}' alt='{$row[fileName]}'>" .
	"<div class='card-body'>" .
	"<button class='btn btn-primary'>A Button</button>" .
	"</div>" .
	"</div>". 
	"</div>";
	
	if ($i%3 == 2) {
		echo "</div>";
	}
	$i++;
}

?>
</div>

<?php
require 'foot.php';
?>
