<?php
require "functions.php";

// dynamically generate meta based on query strings
generateMeta($page);
require "components/header.php"; 
// formatInput($page);


$exercise = $_GET["exercise"] ?? null;
// formatInput($exercise);
?>

<main class="site-main">
	
	<?php 
	//main page router
	switch($page) {
		case "exercises":
		include "pages/exercises.php";
		break;

		case "exercise-detail";
		include "pages/exercise-detail.php";
		break;

		default:
		include "pages/home.php";
	}
	?>
</main>

<?php require "components/footer.php"; ?>