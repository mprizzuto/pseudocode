<?php 
require "data/exercise-data.php";
?>

<section class="exercise-data">
	<inner-column>
		<h1 class="main-title">this is the <span class="page-purpose">exercises page</span></h1>

		<section class="exercises">
			
			<?php foreach($exerciseList as $exercise): ?>
				<exercise>
					<h2 class="exercise-title"><?=$exercise["name"]?></h2>
					<p><?=$exercise["goal"]?></p>
					<p>technologies: <?=$exercise["technologies"]?></p>
						<a href="<?=$exercise["link"]?>"><?=$exercise["name"]?></a>
				</exercise>
			<?php endforeach; ?>
		</section>
	</inner-column>
</section>