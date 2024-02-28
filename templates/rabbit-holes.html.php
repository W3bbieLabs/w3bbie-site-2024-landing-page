<!-- rabbit-holes.html.php -->
<?php
	$rabbit_holes = [ 
		['rabbit_hole_name' => 'wavmp3', 'rabbit_hole_hyperlink' => '/wavmp3.php'],
		['rabbit_hole_name' => 'promptwwworld', 'rabbit_hole_hyperlink' => '/promptwwworld.php'],
		['rabbit_hole_name' => 'botland!', 'rabbit_hole_hyperlink' => '/botland.php' 	],
		['rabbit_hole_name' => 'area205', 'rabbit_hole_hyperlink' => '/area205.php'		],
	]; 
?>
<div class='rabbit-holes'>
	<h3 class='headline-section-heading'>
		[rabbit holes]
		<?php 
			foreach ($rabbit_holes as $rabbit_hole) {
				echo "<a class='portal' href='" . $rabbit_hole['rabbit_hole_hyperlink'] . "'>" . $rabbit_hole['rabbit_hole_name'] . "</a>";

			} 
		?>
		
	</h3>
	<!-- <p class='description'>these are the top links... includes you probably want to check out, explore.</p> -->
</div>