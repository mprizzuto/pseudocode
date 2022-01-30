<?php function generateHead($title, $description) {?>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?=$description?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
<?php }?>

<?php
$page = $_GET["page"] ?? null;

// a more readable var_dump
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


// return false contains a letter
function onlyLetters(string $input):int {
	// $letters = '/^[\w]+$/';
	$letters = '/^[a-zA-Z ]+$/';

	return preg_match($letters, $input);
}

// check for whitespace, returns truthy if found
function checkWhiteSpace(mixed $input):int {
	return ctype_space($input);
}

// count number of characters in string and return number
function countCharacters(string $input):int {
	return strlen($input);
}


function checkForeignChars(mixed $input):int {
    // return truthy if any character below is found in the input string
    $foreignChars = "/^[a-zA-Z]+$/";
   
    return preg_match($foreignChars, $input);
}


//return falsy if not number
function onlyNums(string $input):int {
  $pattern = "/^[0-9]+$/";
  
	return preg_match($pattern, $input);
}



?>


