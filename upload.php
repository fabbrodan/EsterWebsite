<?php
require 'head.php';
require 'functions.php';

$functions = new Functions();

session_start();
if(!isset($_SESSION["user"])) {
	header('Location: index.php');
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$functions->uploadFunction();
}

?>
<div class="container">
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<div class="container">
		<div class='form-group'>
			<input class="form-control-file" type="file" value="Browse..." name="images[]" id="images" multiple>
		</div>
		<div class="form-group">
			<input type="checkbox" id="showCheck" name="showCheck">
			<label class="form-check-label" for="showCheck">Upload to portfolio</label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Upload</button>
		</div>
	</div>
</form>
</div>

<?php

require 'foot.php';

?>;