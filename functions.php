<?php
$exercise = $_GET["exercise"] ?? null; //is this weird? using the same variable name twice? see generateMeta function

function formatInput($input) {
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
}

// TODO- write 

function generateMeta() {
	$exercise = $_GET["exercise"] ?? null; 
	switch ($exercise) {
		case "saying-hello":
		echo "saying hello meta";
			break;
		
		default:
			echo "default meta";
			break;
	}
}
?>