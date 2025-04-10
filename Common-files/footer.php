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
        'Contacts' => '联系信息',
        'Email' => '邮箱',
        'Phone' => '电话',

        'Socials' => '我的社交媒体',

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

<div class="footer w-100 mx-auto py-0 my-0" >
    <div class="row bg-black text-white mx-auto">
        <div class="col">
            <?php echo $texts['Contacts']; ?> <br>
            <?php echo $texts['Email']; ?> : badreddinerezzouk@protonmail.com <br>
            <?php echo $texts['Phone']; ?> : (+33) 7 75 82 59 56 <br>
            <div class="box"></div>
        </div>
        <div class="col">
            <div class="row row-cols-3">
                <div class="col">
                    <a href="https://www.linkedin.com/in/badreddine-rezzouk-301873292/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                        </svg>
                    </a>
                </div>
                <div class="col">
                    <a href="https://x.com/BadrRezzouk">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                        </svg>
                    </a>
                </div>
                <div class="col">

                </div>
            </div>
            <?php echo $texts['Socials']; ?> <br>


        </div>
    </div>
    <div class="row bg-dark text-white mx-auto mb-0 shadow-lg">
        <div class="col"><?php echo $texts['Credits']; ?> <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
                <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377z"/>
                <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3z"/>
            </svg> <?php echo $texts['Bootstrap']; ?></div>
    </div>
</div>
