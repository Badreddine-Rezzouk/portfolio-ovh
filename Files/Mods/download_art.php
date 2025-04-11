<?php
$filename = 'SinderArtGallery_P.pak';

if (!file_exists($filename)) {
    http_response_code(404);
    echo 'File not found.';
    exit;
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));

readfile($filename);
exit;
?>
