<?php
$db = Database::getInstance();
$mysqli = $db->getConnection();

$mysqli->connect('localhost', 'root', '', 'counter');
$file = 'counter.txt';

// Lock the file while reading/writing
$fp = fopen($file, 'c+');
if (flock($fp, LOCK_EX)) {
    $count = (int)fread($fp, filesize($file));
    rewind($fp);
    $count++;
    ftruncate($fp, 0); // clear previous content
    fwrite($fp, $count);
    fflush($fp);
    flock($fp, LOCK_UN);
    echo $count;
} else {
    echo "Error";
}
fclose($fp);
?>
