<?php
/*
* Plugin Name: WordPress ShortCode
* Description: My First shortcode.
* Version: 1.0
* Author: Sjaak Nijland
*/
function radio_func() {
echo '<button type="button" onclick="aud_play_pause()">Play/Pause</button>';
?>
    <script src="howler.core.js"></script>
    <script>
        var playing = false;
        var sound;

        function aud_play_pause() {
            playing = !playing;
            if (playing) {
                var station = {
                    src: ['http://icecast.streamone.nl/jM45nMkqZt'],
                    howl: null
                };

                var data = station;

                // If we already loaded this track, use the current one.
                // Otherwise, setup and load a new Howl.
                if (data.howl) {
                    sound = data.howl;
                } else {
                    sound = data.howl = new Howl({
                        src: data.src,
                        html5: true, // A live stream can only be played through HTML5 Audio.
                        format: ['mp3', 'aac']
                    });
                }

                // Begin playing the sound.
                sound.play();
            } else {
                sound.stop();

            }
        }
    </script>
<?php
}
add_shortcode('radio', 'radio_func');