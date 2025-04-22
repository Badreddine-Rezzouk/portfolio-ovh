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

$baseURL = rtrim($protocol . $host . '/' . $languageFromURL, '/');
$topURL = rtrim($protocol . $host . '/');

$title = 'Modding - Badreddine Rezzouk';
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
    <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
        <h2> Mes mods de jeux vidéos</h2>
    </div>
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 offset-1 w-50 border border-5 shadow-lg">
        <p>
            Le modding de jeux vidéos est une pratique dont le but est de transformer un jeu vidéo en ajoutant ou modifiant du contenu, avec comme finalité un gameplay qui n'est pas originellement prévu par le développeur.
        </p>
    </div>
    <div class="box"></div>
    <div id="modding_sinder" class="modding_section">
        <div class="box"></div>
        <div class="bg-white p-4 rounded-3 mx-auto text-center w-75 offset-1 border border-5 shadow-lg">
            <h3> Mods Sinder pour Payday 3 </h3>
            <img src="<?php echo $topURL?>Images/pd3-logo.png" class="img-fluid" alt="Logo Payday 3" />
            <div class="halfbox"></div>
            <div class="text-start">
                Une suite de mods figurant la streameuse virtuelle <a href="https://www.twitch.tv/sinder">Sinder</a> pour le jeu vidéo Payday 3.
            </div>
            <details class="text-start">
                <summary>Crédits globaux </summary>
                <p>Concernant Payday 3: <br><a href="https://www.starbreeze.com/">Starbreeze Entertainment</a></p>
                <p>Concernant l'avatar de Sinder et tous les assets liés: Sinder, Nanoless, _epebe</p>
            </details>
            <details class="text-start">
                <summary> Comment installer un mod Payday 3 </summary>
                <p> Etape 1: Trouvez où est installé votre jeu Payday 3 et allez dans <span class="text-muted">{Emplacement}/PAYDAY3/Content/Paks/</span> . </p>
                <p> Etape 2: Créez le dossier "~mods" </p>
                <p> Etape 3: Ouvrez le launcher depuis lequel vous possédez le jeu et allez dans les paramètres de lancement:</p>
                <ul>
                    <li> Dans Steam: Ouvrez la page Payday 3, cliquez sur le boutton paramètres, puis Propriétés, et enfin Général (si Steam ne vous y envoie pas par défaut).</li>
                    <li> Dans Epic Games Store: Trouvez la carte de Payday 3, faites un clique droit et cliquez sur "Gérer", l'option sera en bas de la fenêtre de paramètres.</li>
                </ul>
                <p> Etape 4: Ecrivez dans les options de lancement "-fileopenlog".</p>
                <div class="halfbox"></div>
                <p> Et voilà, votre jeu est prêt à être moddé! Il ne reste plus qu'à mettre vos mods dans le fichier "~mods" précédemment créé et à lancer le jeu.</p>
            </details>
            <div class="halfbox"></div>
            <!-- Zone Sinder Gallerie -->
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4> Galerie des arts (mission "Under the Surphaze") </h4>
                    <p class="text-start"> Ce mod remplace les peintures trouvable dans la mission <a href="https://payday.fandom.com/wiki/Under_The_Surphaze">"Under the Surphaze"</a>
                        avec différents fanarts de Sinder.
                    </p>
                    <details class="text-start">
                        <summary>Crédits</summary>
                        <p>ChillyChonkas, Ashsa689, IbbyChan02, Sinonamon, Tofuubear, maybetori (liste non complète) </p>

                    </details>
                    <a class="btn btn-light" href="<?php echo $topURL ?>Files/Mods/SinderArtGallery_P.pak" download role="button">
                        Télécharger
                    </a>
                </div>
                <div class="col-12 col-lg-6">
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
            <hr class="mx-auto">
            <div class="halfbox"></div>
            <!-- Zone Sinder Distributeur-->
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div id="carouselSinderVendingGG" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderVendingGG/Screenshot_2025-04-07_211825.png" class="d-block img-click" alt="SinderArt Image">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $topURL; ?>Images/mod/SinderVendingGG/Screenshot_2025-04-07_212020.png" class="d-block img-click" alt="SinderArt Image">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSinderVendingGG" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselSinderVendingGG" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <h4> Distributeurs de boissons Gamer Supps </h4>
                    <p class="text-start"> Ce mod remplace toutes les textures des distributeurs par une version promouvant la solution énergétique Gamer Supps - Pyro Power </p>
                    <details class="text-start">
                        <summary>Crédits</summary>
                        <p> Gamer Supps pour les assets GG, Sinder et epebe_ pour le design Pyro Pup</p>
                    </details>
                    <a class="btn btn-light" href="<?php echo $topURL?>Files/Mods/SinderVendingGG.pak" download role="button">
                        Télécharger
                    </a>
                </div>
            </div>
        </div>
        <div class="box"></div>
    </div>
    <div class="box"></div>
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-body p-0">
                    <img src="" id="modalImage" class="img-fluid w-100" alt="Full view" />
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.img-click').forEach(img => {
            img.addEventListener('click', function () {
                const src = this.getAttribute('data-bs-image');
                document.getElementById('modalImage').setAttribute('src', src);
            });
        });
    </script>
</div>
<?php require "../../Common-files/footer.php" ?>
</body>
</html>