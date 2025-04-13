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
    <?php require '../../Common-files/header.php'; ?>

</head>
<body>
<?php require "../../Common-files/navbar.php" ?>
<div class="gradient-box">
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 mx-auto w-50 border border-5 shadow-lg">
        <h2> Mes mods de jeux vidéos</h2>
    </div>
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 offset-1 w-50 border border-5 shadow-lg">
        <p>
            Le modding de jeux vidéos est une pratique dont le but est de transformer
        </p>
    </div>
    <div class="box"></div>
    <div id="modding_sinder" class="modding_section">
        <div class="box"></div>
        <div class="bg-white p-4 rounded-3 mx-auto text-center w-75 offset-1 border border-5 shadow-lg">
            <h3> Mods Sinder pour Payday 3 </h3>
            <div class="halfbox"></div>
            <div class="text-start">
                Une suite de mods figurant la streameuse virtuelle <a href="https://www.twitch.tv/sinder">Sinder</a> pour le jeu vidéo Payday 3.
            </div>
            <div class="halfbox"></div>
            <div class="row">
                <div class="col-6">
                    <h4> Galerie des arts (mission "Under the Surphaze") </h4>
                    <p class="text-start"> Ce mod remplace les peintures trouvable dans la mission <a href="https://payday.fandom.com/wiki/Under_The_Surphaze">"Under the Surphaze"</a>
                        avec différents fanarts de Sinder.
                    </p>
                    <details class="text-start">
                        <summary>Crédits</summary>
                        <p>Concernant Payday 3: <br><a href="https://www.starbreeze.com/">Starbreeze Entertainment</a></p>
                        <p>Concernant les fanarts: <br> ChillyChonkas, Ashsa689, IbbyChan02, Sinonamon, Tofuubear, maybetori (liste non complète) </p>

                    </details>
                    <a class="btn btn-light" href="<?php echo $topURL ?>Files/Mods/SinderArtGallery_P.pak" download role="button" aria-expanded="false">
                        Télécharger
                    </a>

                </div>
                <div class="col-6">
                    <div id="carouselSinderArt" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408110240_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408122900_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408135146_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408135155_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408135219_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408135228_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408135258_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408135309_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408163026_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>

                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250408212347_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250410150156_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250410185303_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250410185722_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250410211431_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250410211441_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250410211518_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250410211717_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250410211755_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderArt/20250410212104_1.jpg" class="d-block " alt="SinderArt Image">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSinderArt" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselSinderArt" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="halfbox"></div>
        </div>
        <div class="box"></div>
    </div>
    <div class="box"></div>
</div>
<?php require "../../Common-files/footer.php"?>
</body>
</html>