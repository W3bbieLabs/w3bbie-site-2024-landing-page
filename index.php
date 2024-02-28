<!-- index.php -->
<?php 
	$site_title = 'W3BBIE';
	
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'templates/meta.html.php';?>
</head>
<body>	
	<?php include 'templates/fullscreen-bg-image.html.php';?>
	<main>
		<?php include 'templates/aux.html.php';?>
		<?php include 'templates/stats.html.php'?>
		<?php include 'templates/project-table.html.php'?>
		<?php include 'templates/global-navigation.html.php';?>
	</main>
	<!-- <?php //include 'templates/encryption-description.html.php'?> -->
</body>
</html>
<script>
	
	WINDOW_RESIZE: {
        const check_window_width        = (event) => { return window.innerWidth; };
        const restore_default           = (content_area) => { 
            console.log('restoring default')
            content_area.style.opacity  = 1; 
        }
        const identify_fault            = (fault_name) => { console.log(fault_name); }
        const correct_fault             = (correction_type, content_area) => { 
            console.log(correction_type);
            content_area.style.opacity  = 0;
        }
        window.addEventListener('resize', ()=>{
            console.log('window resizing.');
            const aux_player          = document.querySelector('.whos-on-the-aux');
            // const encryption          = document.querySelector('.encryption');
            const width_minimum_thresh  = 620;
            let window_too_narrow       = (window.innerWidth <= width_minimum_thresh);
            if (window_too_narrow){
                identify_fault('window too narrow.');
                correct_fault('allowing for breathing room', aux_player);
                // correct_fault('allowing for breathing room', encryption);
            } 
            else{
                restore_default(aux_player);
                // restore_default(encryption);
            }
        });
    }
</script>