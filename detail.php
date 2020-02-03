<?php
if(!isset($_GET['id']))
{
	die('No id: go back to the <a href="index.php">Hotels page</a>');
}

//require_once('data.php');
$hotels=json_decode(file_get_contents('data.json'), true);

if(!is_numeric($_GET['id']) || $_GET['id']<0 || $_GET['id']>=count($hotels)){
	die('Invalid: go back to the <a href="index.php">Hotels page</a>');
	
}

?>
<?php 


$title=$hotels[$_GET['id']]['name'];
require_once('header.php');


?>
    <div class="container">
		<h1><?= $hotels[$_GET['id']]['name'] ?></h1>
		<img src="<?= $hotels[$_GET['id']]['picture'] ?>" style="max-width:500px" />
		<p>Address: <?= $hotels[$_GET['id']]['address'] ?></p>
		<p>Price per night: <?= $hotels[$_GET['id']]['price'] ?></p>
		<p>Rating: <span class="badge badge-secondary"><?= $hotels[$_GET['id']]['rating'] ?></span></p>
	</div>
<?php 

require_once('footer.php');

?>