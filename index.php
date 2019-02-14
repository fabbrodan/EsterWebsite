<?php
require 'head.php';
require 'functions.php';
$functions = new Functions();
?>

<div class="container">

<?php

$result = $functions->getImages();
$i = 0;
while($row = mysqli_fetch_assoc($result)) {

	if ($i%3 == 0) {
		echo "<div class='row'>";
	}
	echo "<div class='col-md-4 pb-3'>" . 
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
