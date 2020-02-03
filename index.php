<?php 

//require_once('data.php');
$hotels=json_decode(file_get_contents('data.json'), true);

?>
<?php 

$title='All the hotels';
require_once('header.php');
?>
    <div class="container">
	<h1>All the hotels</h1>
		<?php
		for($i=0;$i<count($hotels);$i++){
			echo '<div class="media">
			  <img src="'.$hotels[$i]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
			  <div class="media-body">
				<h5 class="mt-0">'.$hotels[$i]['name'].'</h5>
				<p>Price: '.$hotels[$i]['price'].'</p>
				<p><a href="detail.php?id='.$i.'">Click to see details</a></p>
			  </div>
			</div>';
			echo '<hr>';
		}

		?>
	</div>
<?php 

require_once('footer.php');

?>