<?php
require "functions.php";

// dynamically generate meta based on query strings
generateMeta($page);
require "components/header.php"; 
// formatInput($_GET);


$exercise = $_GET["exercise"] ?? null;
// formatInput($exercise);

if (in_array("exercise-result", $_GET)) {
	$displayContent = "home-page-hidden";
}
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

	<?php 
	/*
		programming exercise router. 
		only runs if exercise-result query string is in $_GET superglobal array
	*/
	if ( in_array("exercise-result", $_GET) ) {
		//main page router
		switch($page) {
			case "exercise-result";
				include "pages/exercise-result.php";
				break;

			default:
		include "pages/404.php";
				echo "wrong page, go home!";
		}
	}

	?>
	
</main>

<?php require "components/footer.php"; ?>