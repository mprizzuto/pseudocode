<?php 
require_once "./functions.php";
// var_dump($_POST);
?>

<?php if (in_array("saying-hello", $_GET)) {?>
<section class="saying-hello-results">
	<inner-column>
		<h1>saying hello</h1>

		<?php foreach($_POST as $value): ?>
			
		<?php 
		if (in_array("", $_POST) || ctype_space($_POST["name"])) {
			echo "<p>you entered NOTHING! try again, or remain unnamed</p>";
		} 
		elseif (onlyLetters($_POST["name"])) {
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


<?php if (in_array("counting-characters", $_GET)) {?>
<section class="counting-characters-results">
	<inner-column>
		<h1>counting characters</h1>

		<?php foreach($_POST as $value): ?>
			
		<?php 
		if (in_array("", $_POST) || checkWhiteSpace($_POST["input-string"])) {
			echo "<p>you entered NOTHING! try again, or you'll never get your word and it's length</p>";
		} 
		else {
			echo "<p>your input is " . "<mark>".sanitizeInput($_POST["input-string"]) . "</mark>". " it has  " . "<strong>" . countCharacters($_POST["input-string"]) . "</strong>" . " characters</p>";
		}
		?>

		<?php endforeach; ?>

	</inner-column>
</section>
<?php }?>


<?php if (in_array("printing-quotes", $_GET)) {?>
<section class="printing-quotes-results">
	<inner-column>
		<h1>printing-quotes</h1>

		<?php 
		if (in_array("", $_POST) || checkWhiteSpace($_POST["quote"])) {
			echo "<p>you must enter a value</p>";
		} 
		elseif( onlyNums($_POST["quote"]) || onlyNums($_POST["author"])) {
			echo "<p><mark>letters only!</mark></p>";
		}
		else {
			echo "<p>your quote is " . "<mark>".sanitizeInput($_POST["quote"]) . "</mark>". " the author is " . "<strong>" . sanitizeInput($_POST["quote"]) . "</strong></p>";
			}
		?>

<?php } ?>

<?php if (in_array("madlibs", $_GET)) {?>
	<section class="madlibs-results">
		<inner-column>
			<h1>mad libs</h1>

			<?php 
			if (in_array("", $_POST) || checkWhiteSpace($_POST["noun"])) {
				echo "<p>you must enter all values to continue</p>";
			} 

			elseif (
				checkForeignChars($_POST["noun"])  !== 1 || 
				checkForeignChars($_POST["verb"])  !== 1 || 
				checkForeignChars($_POST["adverb"])  !== 1 ||
				checkForeignChars($_POST["adjective"])  !== 1  

			) {
				echo "<p>only enter letters</p>";	
			}

			else {
				$noun = $_POST["noun"] ?? null;
				$verb = sanitizeInput($_POST["verb"]);
				$adverb = sanitizeInput($_POST["adverb"]);
				$adjective = sanitizeInput($_POST["adjective"]);

				$madlib = "do you " . sanitizeInput($noun) . " while you " . sanitizeInput($verb) . " doing your " . sanitizeInput($adverb) . " you are " . sanitizeInput($adjective);

				echo sanitizeInput($madlib);
			}
			?>


		</inner-column>
	</section>
<?php }?>

