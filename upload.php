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
	<div class="container" id="formContainer">
		<div class='form-group'>
			<input class="form-control-file" type="file" value="Browse..." name="images[]" id="images" multiple>
		</div>
		<div class="form-group">
			<input type="checkbox" id="showCheck" name="showCheck">
			<label class="form-check-label" for="showCheck">Upload to portfolio</label>
		</div>
		<div class="form-group" id="btnSubmit">
			<button type="submit" class="btn btn-primary">Upload</button>
		</div>
	</div>
</form>
</div>

<div class="container">
	<form action="upload.php" method="GET">
		<div class="container">
			<div class="form-group">
				<button type="submit" class="btn btn-warning">Clear</button>
			</div>
		</div>
	</form>
</div>	

<script type="text/javascript">

document.getElementById('images').onchange = function() {
	
	var files = document.getElementById('images').files;
	var formDiv = document.getElementById('formContainer');

	var classAtt = document.createAttribute("class");
	classAtt.value = "form-group";

	for (i = 0; i < files.length; i++) {
		
		var div = document.createElement("DIV");
		var par = document.createElement("P")
		var t = document.createTextNode(files[i].name);

		div.setAttributeNode(classAtt);
		
		formDiv.insertBefore(div, formDiv.childNodes[2]);
		par.appendChild(t);
		div.appendChild(par);
	}
}
</script>