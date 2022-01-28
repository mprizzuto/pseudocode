<?php 
$errorMessage = "";
	if (in_array("", $_POST)) {
		$errorMessage = "required";
		$_POST["name"] = "undefined";
	}
?>
<h1>saying hello</h1>

<p>type your name and get a greeting!</p>
<form method="POST" action="?page=exercise-result&result=saying-hello">
	<label for="name">name
		<!-- /pages/exercise-result.php -->
		<input type="text" name="name"><?=$errorMessage?>
	</label>

	<input type="submit">
</form>

