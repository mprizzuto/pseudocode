<?php 
$menuItems = [
	"home" => "index.php",
	"exercises" => "?page=exercises",
]
?>

<nav>
<?php foreach($menuItems as $linkText => $href): ?>
	<a href="<?=$href?>"><?=$linkText?></a>
<?php endforeach; ?>
</nav>
