<?php
$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode('/', trim($uri, '/'));
$languageFromURL = $uriParts[0] ?? null;

$allowed_languages = ['FR-fr', 'EN-us', 'CN-zh'];

if (in_array($languageFromURL, $allowed_languages)) {
    $_SESSION['prev_lang'] = $languageFromURL;
} elseif (isset($_SESSION['prev_lang'])) {
    $languageFromURL = $_SESSION['prev_lang'];
} else {
    $languageFromURL = 'FR-fr';
    $_SESSION['prev_lang'] = $languageFromURL;
}
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$host = $_SERVER['HTTP_HOST'] ?? 'localhost:63342';

if ($host == 'localhost:63342') {
    $baseURL = rtrim($protocol . $host . '/portfolio-ovh/' . $languageFromURL . '/');
    $topURL = rtrim($protocol . $host) . '/portfolio-ovh/' ;
} else {
    $baseURL = rtrim($protocol . $host . '/' . $languageFromURL . '/');
    $topURL = rtrim($protocol . $host) . '/';
}
?>