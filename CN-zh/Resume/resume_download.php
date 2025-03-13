<?php
$filename = 'CV_Badreddine-Rezzouk_CN_zh.pdf';

if (!file_exists($filename)) {
    http_response_code(404);
    echo 'File not found.';
    exit;
}

header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Type: application/pdf');
readfile($filename);
?>
