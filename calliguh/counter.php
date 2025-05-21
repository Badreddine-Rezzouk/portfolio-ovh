<?php
$counterFile = 'counter.txt';

// Lock the file during update to avoid race conditions
$fp = fopen($counterFile, 'c+');
if (flock($fp, LOCK_EX)) {
    $count = (int)fread($fp, filesize($counterFile) ?: 1);
    $count++;
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, $count);
    fflush($fp);
    flock($fp, LOCK_UN);
    fclose($fp);
    echo $count;
} else {
    http_response_code(500);
    echo "Could not lock file";
}
?>
