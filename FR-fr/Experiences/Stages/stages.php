<?php
// Extract the language from the URL (e.g., http://domain.sub/FR-fr/page)
$uri = $_SERVER['REQUEST_URI']; // Get the full URI (e.g., /FR-fr/page)
$uriParts = explode('/', trim($uri, '/')); // Split the URI into parts
$languageFromURL = isset($uriParts[0]) ? $uriParts[0] : null; // First part is the language (e.g., FR-fr)

// Define allowed languages
$allowed_languages = ['FR-fr', 'EN-us', 'CN-zh','Template']; // Example allowed languages

// Validate and set the language
if (in_array($languageFromURL, $allowed_languages)) {
    // If the language in the URL is valid, update the session
    $_SESSION['prev_lang'] = $languageFromURL;
} elseif (isset($_SESSION['prev_lang'])) {
    // If no valid language in the URL, use the session language
    $languageFromURL = $_SESSION['prev_lang'];
} else {
    // Default language if no session or URL language is set
    $languageFromURL = 'FR-fr';
    $_SESSION['prev_lang'] = $languageFromURL;
}
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'; // Fallback to 'localhost' if not set

$baseURL = rtrim($protocol . $host . '/' . $languageFromURL, '/');
$topURL = rtrim($protocol . $host . '/');
?>

<!DOCTYPE html>

<html>
<head>
    <?php require '../../../Common-files/header.php'; ?>
</head>
<body>
<?php require "../../../Common-files/navbar.php" ?>
<div class="gradient-box">
    <div class="halfbox"></div>
    <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
        <h2> Mes stages </h2>
    </div>
    <div class="box"></div>
    <img class="w-60 mx-auto" src="<?php echo $topURL;?>Images/wow-such-empty.png" alt="logo">
    <div class="halfbox"></div>
    <?php require "../../../Common-files/footer.php" ?>
</div>
</body>
</html>