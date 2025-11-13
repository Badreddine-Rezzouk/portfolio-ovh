<?php
require 'redirect.php';
if($_SERVER['HTTP_HOST'] == 'localhost:63342') {
    $languageFromURL = $uriParts[1] ?? null;
    $rest = $uriParts; unset($rest[0]); unset($rest[1]);
} else {
    $languageFromURL = $uriParts[0] ?? null;
    $rest = $uriParts; unset($rest[0]);
}

$restOfURL = implode("/", $rest);

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
        'Calliguh' => 'Calliguh',
        'VA' => 'VirtueAsie',
        'traducode' => 'Traducode',
        'langue' => 'Langues',
        'menu' => 'Menu',
        'passions' => 'Passions',
        'mods' => 'Modding',
        'formula-1' => 'Formule 1'
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
        'Calliguh' => 'Calliguh',
        'VA' => 'VirtueAsie',
        'traducode' => 'Traducode',
        'langue' => 'Languages',
        'menu' => 'Menu',
        'passions' => 'Passions',
        'formula-1' => 'Formula 1'
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
        'mods' => '游戏模组',
        'Calliguh' => 'Calliguh',
        'VA' => 'VirtueAsie',
        'traducode' => 'Traducode',
        'langue' => '语言',
        'menu' => 'Menu',
        'passions' => '爱好',
        'formula-1' => '一级方程式赛车'
    ],
];

$texts = isset($languageTexts[$languageFromURL]) ? $languageTexts[$languageFromURL] : $languageTexts['FR-fr']; // Default to FR-fr if language is not found
?>

<!DOCTYPE html>
<div id="navbar">
    <div class="navbar navbar-expand-lg navbar-custom">
        <!-- Toggler Button for Small Screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="background-image: none!important;background-color: grey!important;">
            <img src="<?php echo $topURL?>Images/logo/navbar_logo.png" style="object-fit: contain; max-width: 20px" class="my-auto" alt="Logo Navbar">
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
                        <img src="<?php echo $topURL?>Images/logo/navbar_logo.png" style="object-fit: contain; max-width: 20px" class="my-auto" alt="Logo Navbar">
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
                        <a id="experiences" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $texts['experiences']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="emplois" class="dropdown-item" href="<?php echo $baseURL; ?>Experiences/Experiences  .php">
                                    <?php echo $texts['experiences']; ?>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
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
                                <a id="Calliguh" class="dropdown-item" href="<?php echo $baseURL?>Projets/Pages_projets/calliguh.php">
                                    <?php echo $texts['Calliguh']; ?>
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
                    <li class="nav-item dropdown">
                        <a id="passions" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $texts['passions'];?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="mods" class="dropdown-item" href="<?php echo $baseURL; ?>Passions/modding.php">
                                    <?php echo $texts['mods']; ?>
                                </a>
                                <a id="formula-1" class="dropdown-item" href="<?php echo $baseURL;?>Passions/formula-1.php">
                                    <?php echo $texts['formula-1']; ?>
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
                            <li><a class="dropdown-item" href="<?php echo $topURL . 'FR-fr/' . $restOfURL; ?>" lang="FR-fr">🇫🇷 Français</a></li>
                            <li><a class="dropdown-item" href="<?php echo $topURL . 'US-en/' . $restOfURL; ?>" lang="US-en">🇺🇸 English (WIP)</a></li>
                            <li><a class="dropdown-item" href="<?php echo $topURL . 'CN-zh/' . $restOfURL; ?>" lang="CN-zh">🇨🇳 中文 (WIP)</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>

