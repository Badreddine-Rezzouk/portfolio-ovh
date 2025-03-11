<?php
session_start();

// Get the first two characters of the browser's accepted language
$languageFromBrowser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Define allowed languages (short codes)
$allowed_languages = ['fr', 'en', 'cn', 'Template']; // Example allowed languages

// Map short codes to full language codes
$language_website = [
    'fr' => 'FR-fr',
    'en' => 'US-en',
    'cn' => 'CN-zh',
    'Template' => 'Template', // Add Template if needed
];

// Validate and set the language
if (in_array($languageFromBrowser, $allowed_languages)) {
    // If the language from the browser is valid, update the session
    $_SESSION['prev_lang'] = $languageFromBrowser;
    $lang = $languageFromBrowser;
} elseif (isset($_SESSION['prev_lang']) && in_array($_SESSION['prev_lang'], $allowed_languages)) {
    // If no valid language from the browser, use the session language if it's valid
    $lang = $_SESSION['prev_lang'];
} else {
    // Default language if no valid language is found
    $lang = 'fr'; // Use short code for consistency
    $_SESSION['prev_lang'] = $lang;
}

// Get the full language code for the website
$full_lang = isset($language_website[$lang]) ? $language_website[$lang] : 'FR-fr'; // Default to 'FR-fr' if not found

// Determine the protocol (http or https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Get the host
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'; // Fallback to 'localhost' if not set

// Construct the base URL with the selected language
$baseURL = rtrim($protocol . $host . '/' . $full_lang, '/') . 'index.php/';
?>

<html>
    <head>
        <meta http-equiv="refresh" content="3; URL='<?php echo $baseURL; ?>index.php'"/>
        <?php require "Common-files/header.php"; ?>
    </head>
    <body class="text-center w-50 mx-auto">
        <h3><b>
            Vous allez être redirigé dans quelques instants.<br>
            You will be redirected soon.<br>
            您将很快被重定向
        </b></h3>
    </body>
</html>
