<?php
// Extract the language from the URL (e.g., http://domain.sub/FR-fr/page)
$uri = $_SERVER['REQUEST_URI']; // Get the full URI (e.g., /FR-fr/page)
$uriParts = explode('/', trim($uri, '/')); // Split the URI into parts
$languageFromURL = isset($uriParts[0]) ? $uriParts[0] : null; // First part is the language (e.g., FR-fr)
$rest = $uriParts; unset($rest[0]);
$restOfURL = implode("/", $rest);
// Define allowed languages
$allowed_languages = ['FR-fr', 'US-en', 'CN-zh', 'Template']; // Example allowed languages

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

// Define language-specific texts for the navbar
$texts_footer = [
    'FR-fr' => [
        'Contacts' => 'Me contacter',
        'Email' => 'Adresse mail',
        'Phone' => 'Numéro de Téléphone',

        'Socials' => 'Mes réseaux sociaux',

        'Credits' => 'Crédits',
        'Bootstrap' => 'Bootstrap',


    ],
    'US-en' => [
        'Contacts' => 'Contact me',
        'Email' => 'Email address',
        'Phone' => 'Phone number',

        'Socials' => 'My social media',

        'Credits' => 'Crédits',
        'Bootstrap' => 'Bootstrap',
    ],
    'CN-zh' => [
        'Contacts' => 'Accueil',
        'Email' => 'Adresse mail',
        'Phone' => 'Numéro de Téléphone',

        'Socials' => 'Mes réseaux sociaux',

        'Credits' => 'Crédits',
        'Bootstrap' => 'Bootstrap',
    ],
];

// Get the texts for the current language
$texts = isset($texts_footer[$languageFromURL]) ? $texts_footer[$languageFromURL] : $texts_footer['FR-fr']; // Default to FR-fr if language is not found

// Determine the protocol (http or https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Get the host
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'; // Fallback to 'localhost' if not set

// Construct the base URL with the selected language
$baseURL = rtrim($protocol . $host . '/' . $languageFromURL, '/') . '/';
?>

<div class="footer w-100 mx-auto" style="margin-bottom: -15px;">
    <div class="row bg-black text-white mx-auto">
        <div class="col">
            <?php echo $texts['Contacts']; ?> <br>
            <?php echo $texts['Email']; ?> : badreddinerezzouk@protonmail.com <br>
            <?php echo $texts['Phone']; ?> : (+33) 7 75 82 59 56 <br>
            <div class="box"></div>
        </div>
        <div class="col">
            <?php echo $texts['Socials']; ?> <br>

        </div>
        <div class="col">
            <?php echo $texts['Credits']; ?> <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
                <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377z"/>
                <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3z"/>
            </svg> <?php echo $texts['Bootstrap']; ?>
        </div>
    </div>
    <div class="row bg-dark text-white mx-auto">
        <
    </div>
</div>
