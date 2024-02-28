<!-- stats.html.php -->
<?php 
// https://podcasters.spotify.com/pod/show/w3bbie/episodes/EP-1--W3bbie-and-Lil-Nouns-A-Shared-Journey-Toward-Decentralization-e293h38
    $stats = [ 

        [
            'name'      => 'citizens', 
            'value'     => 39+166+100+15, 
            'desc'      => 'includes humans and bots.' 
        ],

        [
            'name'      => 'found on mars total value', 
            'value'     => 2.299, 
            'desc'      => 'a free project with eth benefits' 
        ],

        [
            'name'      => 'w3bbie gdp', 
            'value'     => 2.5058086e5, 
            'desc'      => 'gross decentralized product ($)' 
        ],

        [
            'name'      => 'technicians', 
            'value'     => 6, 
            'desc'      => 'rabbit hole maintainers.' 
        ],

        [
            'name'      =>  'admins', 
            'value'     =>  '4', 
            'desc'      =>  'rabbits with vault-level keys.' 
        ],

        [
            'name'      =>  'completed projects', 
            'value'     =>  1+1+1+1+1+1+1+1+1+1+1, 
            'desc'      =>  'cycles through the wonderland.' 
        ],

        [
            'name'      => 'rabbits respawning', 
            'value'     => 5.2244e3, 
            'desc'      => 'bunnies producing within our neural network.' 
        ],

        [
            'name'      => 'cows grazing', 
            'value'     => 4.4444e3, 
            'desc'      => 'the herd will shill for mushrooms.' 
        ],

        [
            'name'      => 'found on mars owners', 
            'value'     => 1.043e3, 
            'desc'      => 'diamond hands fr' 
        ],

        [
            'name'      => 'bear population', 
            'value'     => 2, 
            'desc'      => 'bears: singh, sama' 
        ],


        [
            'name'      =>  'prompts engineered', 
            'value'     =>  1099, 
            'desc'      => 'agent associations' 
        ],

        [
            'name'      => 'avg member rot', 
            'value'     => 4.20, 
            'desc'      =>  'return on time in eth.' 
        ],

    ];
    sort($stats);
?>
<div class='stat-table-flex'>
    <table class='stat-table'>
        <h3 class='headline-section-heading'>[ stats ]</h3>
        <tr>
            <th class='stat-table-heading'>stat</td>
            <th class='stat-table-heading'>context</td>
            <th class='stat-table-heading'>value</td>
        </tr>

        <?php
            foreach($stats as $stat){
                echo "<tr class='stat-row'>";
                    echo "<td class='stat'>" . $stat['name'] . "</td>";
                    echo "<td class='stat'>" . $stat['desc'] . "</td>";
                    echo "<td class='stat'>" . $stat['value'] . "</td>";
                echo "</tr>";
            } 
        ?>
    </table>
</div>