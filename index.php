<?php
require "functions.php";

// dynamically generate meta based on query strings
generateMeta($page);
require "components/header.php"; 
// formatInput($_GET);
?>

<main class="site-main">
	

	<?php 
	//page router
	switch($page) {
		case "exercises":
		include "pages/exercises.php";
		break;

		default:
		include "pages/home.php";
	}
	?>
</main>

<?php require "components/footer.php"; ?>