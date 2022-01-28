<?php 
$errorMessage = "";
	if (in_array("", $_POST)) {
		$errorMessage = "required";
		$_POST["name"] = "undefined";
	}
?>
<form method="POST" action="?page=exercise-result&result=saying-hello">
	<label for="name">name
		<!-- /pages/exercise-result.php -->
		<input type="text" name="name"><?=$errorMessage?>
	</label>

	<input type="submit">
</form>

