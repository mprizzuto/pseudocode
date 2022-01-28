<?php 
require_once "./functions.php";
// var_dump($_POST["name"]);
?>


<?php if (in_array("saying-hello", $_GET)) {?>
<section class="saying-hello-results">
	<inner-column>
		<h1>saying hello</h1>

		<?php foreach($_POST as $value): ?>
			
		<?php 
		if (in_array("", $_POST) || ctype_space($_POST["name"])) {
			echo "<p>you entered NOTHING! try again, or remain unnamed</p>";
		} elseif (onlyLetters($_POST["name"]) !== 0) {
			echo "<p>letters only</p>";
		}
		else {
			echo "<p>hello <mark>$value</mark> how are you?</p>";
		}
		?>

		<?php endforeach; ?>
	</inner-column>
</section>
<?php }?>

