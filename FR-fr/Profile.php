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

$baseURL = rtrim($protocol . $host . '/' . $languageFromURL, '/') . 'Profile.php/';

$title = "Profil - Badreddine Rezzouk";
?>

<!DOCTYPE html>

<html class="gradient-box">
    <head>
        <?php require '../Common-files/header.php'; ?>
    </head>
    <body>
    <?php require "../Common-files/navbar.php" ?>
    <div class="gradient-box">
        <div class="box"></div>
        <section id="identifier">
            <div class="bg-white p-4 rounded-3 w-75 mx-auto px-1 border border-5 shadow-lg">
                <div class="row">
                    <h4> Informations identifiantes </h4>
                    <div class="col text-start">
                        <p> Nom:</p>
                        <p> Anniversaire:</p>
                        <p> Status professionnel:</p>
                    </div>
                    <div class="col text-center">
                        <p> Badreddine REZZOUK </p>
                        <p> 28 Juin 2005 </p>
                        <p> Etudiant </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="box"></div>
        <section id="linguistic_proficiency">
            <div class="bg-white p-4 rounded-3 w-75 mx-auto border border-5 shadow-lg">
                <h4> Mes langues </h4>
                <p>Français</p>
                <div class="container_langues">
                    <div class="skills french">Langue maternelle</div>
                </div>

                <p>Anglais</p>
                <div class="container_langues">
                    <div class="skills english">Courant</div>
                </div>

                <p>Espagnol</p>
                <div class="container_langues">
                    <div class="skills spanish">Conversationel</div>
                </div>

                <p>Chinois (mandarin)</p>
                <div class="container_langues">
                    <div class="skills chinese">En apprentissage</div>
                </div>
            </div>
        </section>
        <div class="halfbox"></div>
    </div>
    <?php require "../Common-files/footer.php" ?>
</body>
</html>