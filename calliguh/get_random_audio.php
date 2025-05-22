<?php
$folder = 'audio/';
$files = glob($folder . '*.{mp3,wav,ogg}', GLOB_BRACE);

if ($files) {
    $randomFile = $files[array_rand($files)];
    echo $randomFile;
} else {
    echo '';
}
?>
