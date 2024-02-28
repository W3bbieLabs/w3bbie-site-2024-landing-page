<!-- ctas.html.php -->
<?php 
    $ctas = [

            [
                'name'      =>  'go full rabbit hole', 
                'hyperlink' =>  'https://docs.google.com/forms/d/e/1FAIpQLSeBLv3zMEIcqTWDB9qbCUV8FOwV9rWFgfnBa68fovGvxOAVhA/viewform'
            ],

            [
                'name'      =>  'take the first carrot', 
                'hyperlink' =>  'https://docs.google.com/forms/d/e/1FAIpQLSdWNPvSfF8Juvvr9NwFyjEj9ooeA0AHhnGPNfz4hdvOpn35XQ/viewform'
            ],
        ];
?>
<div class='ctas'>
    <?php
        foreach ($ctas as $cta){
            echo "<a class='cta-link' target='_blank' href='" . $cta['hyperlink'] . "'>" . $cta['name'] . "</a>"; 
        } 
    ?>
</div>