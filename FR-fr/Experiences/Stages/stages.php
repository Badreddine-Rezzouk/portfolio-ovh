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

$title = 'Stages - Badreddine Rezzouk';
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
    <div class="bg-white p-4 rounded-3 w-60 mx-auto border border-5 shadow-lg">
        <p> Sur cette page, vous trouverez les stages accomplis... J'avoue être à cours de manières différentes d'illustrer ces petites introductions. </p>
    </div>
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 mx-auto text-center w-80 border border-5 shadow-lg">
        <h4> AB Legacy : Gestion locative </h4>
        <span class="badge rounded-pill text-bg-primary">Contrat en cours</span>
        <div class="row">
            <div class="halfbox"></div>
            <div class="col-12 col-lg-8 mx-auto">
                <div class="row">
                    <div class="text-start">
                        <table class="table">
                            <tr>
                                <th scope="col"> Type de contrat : </th>
                                <td> Stage en télétravail </td>
                            </tr>
                            <tr>
                                <th scope="row"> Exploitant du contrat :</th>
                                <td> AB Legacy </td>
                            </tr>
                            <tr>
                                <th scope="row"> Lieu d'exploitation:</th>
                                <td> 60 Rue de l'Aqueduc, Paris 10e</td>
                            </tr>
                            <tr>
                                <th scope="row"> Durée du contrat:</th>
                                <td> Du 28 Avril 2025 au 27 Juin 2025 </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="halfbox"></div>
                <p class="text-start">
                    En attendant d'avoir l'expérience pour commenter ce stage, voici un paragraphe de lorem ipsum pour combler: <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus at magna eget volutpat. Fusce vestibulum nibh a lacus auctor, id posuere dolor mollis. Ut iaculis commodo justo, quis consectetur arcu. Etiam hendrerit justo vitae eros condimentum, at finibus dui vulputate. Integer consectetur orci quis pulvinar consequat. Sed sollicitudin sapien velit. Quisque tortor nulla, ultricies at erat ut, viverra cursus nisl.
                </p>
            </div>
        </div>
    </div>
    <div class="halfbox"></div>
    <?php require "../../../Common-files/footer.php" ?>
</div>
</body>
</html>