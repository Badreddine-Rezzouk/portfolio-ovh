<?php
// Extract the language from the URL (e.g., http://domain.sub/FR-fr/page)
$uri = $_SERVER['REQUEST_URI']; // Get the full URI (e.g., /FR-fr/page)
$uriParts = explode('/', trim($uri, '/')); // Split the URI into parts
$languageFromURL = isset($uriParts[0]) ? $uriParts[0] : null; // First part is the language (e.g., FR-fr)

// Define allowed languages
$allowed_languages = ['FR-fr', 'EN-us', 'CN-zh']; // Example allowed languages

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

$baseURL = rtrim($protocol . $host . '/' . $languageFromURL, '/') . 'emplois.php/';
$title = "Emplois - Badreddine Rezzouk";
?>

<!DOCTYPE html>

<html>
    <head>
        <?php require "../../../Common-files/header.php"; ?>
    </head>
    <body>
        <?php require "../../../Common-files/navbar.php" ?>
        <div class="gradient-box">
            <br>
            <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
                <h2> Mes emplois </h2>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 mx-auto text-center w-70 border border-5 shadow-lg">
                <p>Bon, je ne vais pas faire l'affront de vous expliquer ce qu'est un emploi. Ici, vous trouverez la liste de mes emplois passés.</p>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 mx-auto text-center w-80 border border-5 shadow-lg">
                <h4> Amazon warehouse : Agent exploitation logistique et production </h4>
                <span class="badge rounded-pill text-bg-success">Contrat conclu</span>
                <div class="row">
                    <div class="halfbox"></div>
                    <div class="col-12 col-lg-4">
                        <!-- images-->
                        <img class="img-fluid" src="../../../Images/amzn.png" alt="Amazon">
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row">
                            <div class="col-auto text-start">
                                <table class="table">
                                    <tr>
                                        <th scope="col"> Type de contrat : </th>
                                        <td> Mission Intérim </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Exploitant du contrat :</th>
                                        <td> Adecco Onsite Brétigny </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Lieu d'exploitation:</th>
                                        <td> Amazon warehouse, Fulfillment center ORY4, Centre d'essais en vol, Brétigny-sur-Orge </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Durée du contrat:</th>
                                        <td> Du 12 Juillet 2024 au 27 Septembre 2024 </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="halfbox"></div>
                        <p class="text-start">
                            Pendant une durée d'approximativement deux mois, j'ai travaillé sur une mission Amazon. Celle-ci consistait à assurer la livraison de produits au consommmateur à une étape du processus. Lors de cette mission, mes postes étaient le <abbr title="Emballage du produit dans le carton de livraison">packing</abbr> et la <abbr title="Déballage des produits de grossiste pour les injecter dans le FC">receive</abbr>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box"></div>
        </div>
        <?php require "../../../Common-files/footer.php" ?>
</body>
</html>