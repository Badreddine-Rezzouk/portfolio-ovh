<?php
// Extract the language from the URL (e.g., http://domain.sub/FR-fr/page)
$uri = $_SERVER['REQUEST_URI']; // Get the full URI (e.g., /FR-fr/page)
$uriParts = explode('/', trim($uri, '/')); // Split the URI into parts
$languageFromURL = isset($uriParts[0]) ? $uriParts[0] : null; // First part is the language (e.g., FR-fr)
$rest = $uriParts; unset($rest[0]);
$restOfURL = implode("/", $rest);
// Define allowed languages
$allowed_languages = ['FR-fr', 'US-en', 'CN-zh']; // Example allowed languages

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
$languageTexts = [
    'FR-fr' => [
        'home' => 'Accueil',
        'resume' => 'CV',
        'academie' => 'Académique',
        'profile' => 'Profil',
        'experiences' => 'Expériences',
        'emplois' => 'Emplois',
        'stages' => 'Stages',
        'projects' => 'Projets',
        'mods' => 'Modding',
        'VA' => 'VirtueAsie',
        'traducode' => 'Traducode',
        'langue' => 'Langues',
        'menu' => 'Menu',
    ],
    'US-en' => [
        'home' => 'Home',
        'resume' => 'Resume',
        'academie' => 'Academics',
        'profile' => 'Profile',
        'experiences' => 'Experiences',
        'emplois' => 'Jobs',
        'stages' => 'Internships',
        'projects' => 'Projects',
        'mods' => 'Modding',
        'VA' => 'VirtueAsie',
        'traducode' => 'Traducode',
        'langue' => 'Languages',
        'menu' => 'Menu',
    ],
    'CN-zh' => [
        'home' => '首页',
        'resume' => '简历',
        'academie' => '学术',
        'profile' => '个人资料',
        'experiences' => '经历',
        'emplois' => '工作',
        'stages' => '实习',
        'projects' => '项目',
        'mods' => 'Modding',
        'VA' => 'VirtueAsie',
        'traducode' => 'Traducode',
        'langue' => '语言',
        'menu' => 'Menu',
    ],
];

// Get the texts for the current language
$texts = isset($languageTexts[$languageFromURL]) ? $languageTexts[$languageFromURL] : $languageTexts['FR-fr']; // Default to FR-fr if language is not found

// Determine the protocol (http or https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Get the host
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'; // Fallback to 'localhost' if not set

// Construct the base URL with the selected language
$baseURL = rtrim($protocol . $host . '/' . $languageFromURL, '/') . '/';
?>

<!DOCTYPE html>
<div id="navbar">
    <div class="navbar navbar-expand-lg navbar-custom">
        <!-- Toggler Button for Small Screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="background-image: none!important;background-color: white!important;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Off-Canvas Sidebar -->
        <div class="offcanvas offcanvas-start bg-black text-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php echo $texts['menu']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <nav class="navbar-nav">
                    <a id="home" class="nav-link" href="<?php echo $baseURL; ?>index.php">
                        <?php echo $texts['home']; ?>
                    </a>
                    <a id="resume" class="nav-link" href="<?php echo $baseURL; ?>Resume/resume_download.php ">
                        <?php echo $texts['resume']; ?>
                    </a>
                    <a id="Academie" class="nav-link" href="<?php echo $baseURL; ?>Academics.php">
                        <?php echo $texts['academie']; ?>
                    </a>
                    <a id="Profile" class="nav-link" href="<?php echo $baseURL; ?>Profile.php">
                        <?php echo $texts['profile']; ?>
                    </a>
                    <li class="nav-item dropdown">
                        <a id="experiences" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $texts['experiences']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="emplois" class="dropdown-item" href="<?php echo $baseURL; ?>Experiences/Emplois/emplois.php">
                                    <?php echo $texts['emplois']; ?>
                                </a>
                            </li>
                            <li>
                                <a id="stages" class="dropdown-item" href="<?php echo $baseURL; ?>Experiences/Stages/stages.php">
                                    <?php echo $texts['stages']; ?>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="projects" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $texts['projects']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="mods" class="dropdown-item" href="<?php echo $baseURL; ?>Projets/modding.php">
                                    <?php echo $texts['mods']; ?>
                                </a>
                            </li>
                            <li>
                                <a id="VA" class="dropdown-item" href="<?php echo $baseURL; ?>Projets/Pages_projets/VirtueAsie.php">
                                    <?php echo $texts['VA']; ?>
                                </a>
                            </li>
                            <li>
                                <a id="traducode" class="dropdown-item" href="<?php echo $baseURL; ?>Projets/Pages_projets/traducode.php">
                                    <?php echo $texts['traducode']; ?>
                                </a>
                            </li>
                        </ul>
                    </li>
                </nav>

                <!-- Language Dropdown positioned to the right -->
                <div class="navbar-nav ms-auto">
                    <li class="nav-item dropdown" id="langchange">
                        <a id="langue" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $texts['langue']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?php echo $protocol . $host . '/FR-fr/' . $restOfURL; ?>" lang="FR-fr">🇫🇷 Français (WIP)</a></li>
                            <li><a class="dropdown-item" href="<?php echo $protocol . $host . '/US-en/' . $restOfURL; ?>" lang="US-en">🇺🇸 English (WIP)</a></li>
                            <li><a class="dropdown-item" href="<?php echo $protocol . $host . '/CN-zh/' . $restOfURL; ?>" lang="CN-zh">🇨🇳 中文 (WIP)</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('mouseenter', function() {
                this.classList.add('show');
                this.querySelector('.dropdown-menu').classList.add('show');
            });

            dropdown.addEventListener('mouseleave', function() {
                this.classList.remove('show');
                this.querySelector('.dropdown-menu').classList.remove('show');
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');

            // Handle hover for desktop and offcanvas modes
            dropdown.addEventListener('mouseenter', function () {
                menu.classList.add('show');
            });

            dropdown.addEventListener('mouseleave', function () {
                menu.classList.remove('show');
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function (e) {
            if (!e.target.matches('.dropdown-toggle')) {
                const openDropdowns = document.querySelectorAll('.dropdown-menu.show');
                openDropdowns.forEach(dropdown => {
                    dropdown.classList.remove('show');
                });
            }
        });
    });
</script>