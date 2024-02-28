<!-- aux.html.php -->
<?php 
    $channel_name   = 'aux';
    $songs          =
        [
            [   
                'title'     => 'oj the longway', 
                'artist'    => 'wav screw', 
                'hyperlink' => './public/OJTHELONGWAY.mp3' 
            ],

            [   
                'title'     => 'magix', 
                'artist'    => 'nyrabeats',
                'hyperlink' => './public/11-MAGIX-final.wav',
            ] 
        ];
    $random_key     = array_rand($songs);
    $current_song   = $songs[$random_key];
?>
<div class='whos-on-the-aux'>
    <section class='aux-details'>
        <section class='now-playing'>
            <p class='aux-title'><?=$current_song['title']?></p>
            <p class='aux-artist'><?=$current_song['artist']?></p>
        </section>
        <section class='controls'>
                <button 
                    class   =   'aux-control' 
                    id      =   'play-button'>
                    &#9654; play
                </button>
                <button 
                    class   =   'aux-control' 
                    id      =   'pause-button'>
                    &#9208; pause
                </button>
        </section>
    </section>
    <section class='aux-waveform'>
        <div 
            class   =   'waveform' 
            id      =   'waveform'>
            <audio 
                id      =   'current-mix'
                src     =   "<?=$current_song['hyperlink']?>"
                preload =   'metadata' 
                muted 
                loop>
            </audio>
        </div>
    </section>
</div>

<script>
    AUX_MUSIC_PLAYER :{
        const aux_player    = document.querySelector('.whos-on-the-aux');
        const channel_name  = document.querySelector('.channel-name');
        const track_details = document.querySelector('.now-playing');
        const play_button   = document.querySelector('#play-button');
        const pause_button  = document.querySelector('#pause-button');
        const wave_surfer   = WaveSurfer.create({ 
            container:      '#waveform', 
            height:         28,
            // width:           12,
            mediaControls:  false,
            fillParent:     true,
            interact:       true,
            splitChannels:  false,
            cursorWidth:    4,
            barWidth:       2,
            // waveColor:       'rgba(255,255,255,0.6)',
            // progressColor:   'rgba(255,12,12,0.2)',
            url:            '<?=$current_song['hyperlink']?>' 
        });
        const song = { 
            artist:document.querySelector('.aux-artist').innerText,
            title: document.querySelector('.aux-title').innerText 
        };
        let state           =  { playing: false, paused: false };
        let volume_level    = 0.72;


        play_button.addEventListener('click', ()=>{
            wave_surfer.play();
            wave_surfer.setVolume(volume_level);
            console.log(`🚀 playing ${song.title} by ${song.artist}.`);
            state.playing                   = true; 
            state.pause                     = false;
            aux_player.style.zIndex         = 1;
            // aux_player.style.rotate      = `180deg`;
            channel_name.style.animation    = 'scroll-alt 3.324s infinite alternate';
            track_details.style.animation   = 'flicker 4.44s infinite alternate';
            
            setInterval(
                ()=>{
                    if (state.playing)
                        console.log(`🔥 ${song.title} is still playing`);
                        wave_surfer.setVolume(volume_level + 0.19);
                }, 5400);
        });

        pause_button.addEventListener('click', ()=>{
            wave_surfer.pause();
            state.paused                    = true; 
            state.playing                   = false;
            aux_player.style.zIndex         = 5;
            // aux_player.style.rotate      = '450deg';
            channel_name.style.animation    = 'none';
            track_details.style.animation   = 'none';
        });

        wave_surfer.on('finish', ()=>{
            console.log('finished playing.');
            console.log('loading next song..');
        });
    }
   

</script>