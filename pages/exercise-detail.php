<section class="exercise-detail">
	<inner-column>

		<exercise-detail>
		<?php 

			// projects router
			switch($exercise) {
				case "saying-hello";
				include "exercises/saying-hello.php";
				break;

				default:
				include "pages/404.php";
			}
		?>
	</exercise-detail>
	</inner-column>
</section>