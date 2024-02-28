<!-- project-table.html.php -->
<?php
    $projects = [
        [
            'alias' => 'yolo rabbits',
            'link'  => 'https://w3bbie.xyz/yolo/',
            'desc'  => '',
            'type'  => 'interactive nft with a neural network'
        ],

        [
            'alias' => 'nasty pass',
            'link'  => 'https://nastypass.xyz/',
            'desc'  => '',
            'type'  => 'digital fast pass for nyc/la parties'
        ],

        [
            'alias' => 'found on mars',
            'link'  => 'https://foundonmars.xyz/',
            'desc'  => '',
            'type'  => 'ai generated digital collectibles'
        ],

        [
            'alias' => 'tecknomancers',
            'link'  => 'https://opensea.io/collection/teknomancers',
            'desc'  => '',
            'type'  => 'collaborative digital collectibles'
        ],

        [
            'alias' => 'zora land',
            'link'  => 'https://w3bbie.xyz/ethglobal/',
            'desc'  => '',
            'type'  => 'gamified explorations on zora-minted nfts'
        ],

        [
            'alias' => 'shill farm',
            'link'  => 'https://w3bbie.xyz/ethonline/',
            'desc'  => '',
            'type'  => 'gamified internet exploration'
        ],

        [
            'alias' => 'gmbot',
            'link'  => 'https://github.com/W3bbieLabs/GM',
            'desc'  => '',
            'type'  => 'in-house discord communication agent '
        ],

        [
            'alias' => 'hack or die',
            'link'  => 'https://hack-or-die-frontend.vercel.app/',
            'desc'  => '',
            'type'  => '3rd-person-blaster, built with unity'
        ],

        [
            'alias' => 'bull run',
            'link'  => 'https://w3bbie.xyz/bullrun/',
            'desc'  => '',
            'type'  => 'multiplayer racer, built with unity'
        ],

        [
            'alias' => 'lil painter',
            'link'  => 'https://w3bbie.xyz/artclass/',
            'desc'  => '',
            'type'  => 'speech to image ai application'
        ],

        [
            'alias' => 'goerli branding',
            'link'  => 'https://github.com/W3bbieLabs/GoerliSepoliaProphouseDesign',
            'desc'  => '',
            'type'  => 'design sprint, graphic identity'
        ],

        [
            'alias' => 'the w3bbie show',
            'link'  => 'https://podcasters.spotify.com/pod/show/w3bbie/episodes/EP-1--W3bbie-and-Lil-Nouns-A-Shared-Journey-Toward-Decentralization-e293h38',
            'desc'  => '',
            'type'  => 'web3 focused podcast'
        ],

        [
            'alias' => 'repus',
            'link'  => 'https://repus.us/',
            'desc'  => '',
            'type'  => 'progressive web application (pwa), events engagement'
        ]
    ];
    sort($projects);
?>
<div class='project-table-flex'>
    <table class='project-table'>
        <h3 class='headline-section-heading'>[ projects ]</h3>
        <tr>
            <th class='project-table-heading'>alias</th>
            <th class='project-table-heading'>desc</th>
        </tr>
        <?php
            foreach($projects as $project){
                echo "<tr class='project-table-row'>";
                    $current_link = $project['link'];
                    $open_link = "window.open($current_link)";
                    echo "<td class='project-data' id='project-data' name='this'>" . $project['alias'] . "</td>";
                    echo "<td class='project-data'>" . $project['type'] . "</td>";
                echo "</tr>";
            } 
        ?>
    </table>
</div>
<script>
    const project_links = [
        'https://devpost.com/software/bull-run-h07qwt',
        'https://foundonmars.xyz/',
        'https://github.com/W3bbieLabs/GM',
        'https://github.com/W3bbieLabs/GoerliSepoliaProphouseDesign',
        'https://devpost.com/software/hack-or-die',
        'https://w3bbie.xyz/artclass/',
        'https://nastypass.xyz/',
        'https://repus.us/',
        'https://w3bbie.xyz/ethonline/',
        'https://opensea.io/collection/teknomancers',
        'https://podcasters.spotify.com/pod/show/w3bbie/episodes/EP-1--W3bbie-and-Lil-Nouns-A-Shared-Journey-Toward-Decentralization-e293h38',
        'https://w3bbie.xyz/yolo/',
        'https://w3bbie.xyz/ethglobal/'
    ];
    const projects = document.querySelectorAll('#project-data');
    console.log(projects);
    projects.forEach( (project, index) => {
        project.addEventListener('click', (event)=>{
            let current_link = project_links[index]
            console.log('opening', current_link);
            window.open(current_link);
        });
    });
</script>