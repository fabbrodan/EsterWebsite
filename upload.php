<?php
require 'head.html';

session_start();
if(!isset($_SESSION["user"])) {
	header('Location: index.php');
}

?>
<form action="submit.php" method="POST" enctype="multipart/form-data">
	<div class="container">
		<div class='form-group'>
			<input type="file" value="Browse..." name="images[]" id="images" multiple>
			<button type="submit" class="btn btn-primary">Upload</button>
		</div>
	</div>
</form>

<?php

require 'foot.php';

?>;