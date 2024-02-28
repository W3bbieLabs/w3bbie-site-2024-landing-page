<!-- headlines.html.php -->
<?php 
    $projects = [
        
        [
            'name'      => '',
            'hyperlink' => '',
            'desc'      => ''
        ],

        [
            'name'      => '',
            'hyperlink' => '',
            'desc'      => ''
        ],
    ];
?>
<div class='headlines'>
    <h3 class='headline-section-heading'>
        [ projects ] 
        <?php 
            foreach ($projects as $project){
                echo "<a class='headline'>" . $project['name'] . "</a>";
            }
        ?>
    </h3>
</div>