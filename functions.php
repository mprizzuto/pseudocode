<?php function generateHead($title, $description) {?>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?=$description?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
<?php }?>

<?php
$page = $_GET["page"] ?? null;

function formatInput($input) {
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
}

// generate the meta for pages
function generateMeta($page) { 
	switch ($page) {
		case "exercises":
			generateHead("exercises page", "exrcises for programmers");
			break;
		
		default:
			generateHead("homepage", "welcome to the homepage!");
	}
}
// remove foreign characters, whitespace from input
function sanitizeInput($input) {
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);

	return $input;
}


// return false if not a letter
function onlyLetters(string $input):int {

	return preg_match("/\d/", $input);
}
?>


