<section class="exercise-detail">
	<inner-column>

		<exercise-detail>
		<?php 
			// projects router
			switch($exercise) {
				case "saying-hello";
				include "exercises/saying-hello.php";
				break;

				case "counting-characters";
				include "exercises/counting-characters.php";
				break;

				case "printing-quotes":
				include "exercises/printing-quotes.php";
				break;

				case "madlibs":
				include "exercises/madlibs.php";
				break;

				default:
				include "pages/404.php";
			}
		?>

	</exercise-detail>
	</inner-column>
</section>