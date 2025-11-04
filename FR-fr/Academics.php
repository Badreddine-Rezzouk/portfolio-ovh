<?php
require "../Common-files/redirect.php";
$title = "Proficiences - Badreddine Rezzouk"
?>

<!DOCTYPE html>

<html class="gradient-box">
    <head>
        <?php require '../Common-files/header.php'; ?>
    </head>
    <body>
        <?php require "../Common-files/navbar.php" ?>
        <div class="gradient-box">
        <br>
        <div class="bg-white p-4 text-center rounded-3 w-50 mx-auto border border-5 shadow-lg">
            <h2> Mes études, diplômes et certifications </h2>
        </div>
        <div class="box"></div>
        <div class="bg-white p-4 rounded-3 w-60 mx-auto border border-5 shadow-lg">
            <p> Sur cette page, vous trouverez toutes les informations relatives à mes études, incluant où j'ai étudié, quel diplômes j'ai validé et les certifications que je possède. </p>
        </div>
        <div class="halfbox"></div>
        <hr class="mx-auto rounded-2">
            <div class="halfbox"></div>
            <div class="bg-white p-4 rounded-3 w-75 offset-1 border border-5 shadow-lg">
                <h2 class="text-center"> Baccalauréat Technologique <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Sciences Technologiques de l'Industrie et du Développement Durable">STI2D</span></h2>
                <p class="text-start"> Etudié au <a href="https://lyc-brassens-courcouronnes.ac-versailles.fr/">Lycée polyvalent Georges Brassens</a>, à Evry-Courcouronnes. </p>
                <div class="row">
                    <div class="col-6">
                        <img src="../Images/diplome_bac.jpg" class="img-fluid rounded-3 border border-5 shadow-lg">
                    </div>
                    <div class="col text-center mx-auto my-auto">
                        <p> Spécialité <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Sciences Technologiques de l'Industrie et du Développement Durable">SIN</span>, reçu avec mention "Très bien".</p>
                        <div class="halfbox"></div>
                        <p class="text-start">
                            Matières (outre tronc commun):
                            <ul class="text-start">
                                <li>
                                    Mathématiques
                                </li>
                                <li>
                                    Physique-Chimie
                                </li>
                                <li>
                                    Ingénierie, innovation et développement durable - Systèmes d'information et numérique
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
                <p> Diplôme national de niveau IV </p>
            </div>
            <div class="halfbox"></div>
            <hr class="mx-auto rounded-2">
            <div class="halfbox"></div>
            <div class="bg-white p-4 rounded-3 text-center w-80 mx-auto border border-5 shadow-lg">
                <h4> BUT Informatique </h4>
                <p class="text-start"> Etudié à l'<a href="https://iutparis-seine.u-paris.fr/">Institut Universitaire Technologique Paris Cité - Rives de Seine (Descartes)</a>.</p>
                <div class="row">
                    <div class="col">
                        <div id="carouselIUT" class="carousel slide rounded-3 border border-5" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $topURL; ?>Images/Academie/IUT/img.png" class="d-block " alt="IUT Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $topURL; ?>Images/Academie/IUT/img_1.png" class="d-block " alt="IUT Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $topURL; ?>Images/Academie/IUT/img_2.png" class="d-block " alt="IUT Image">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIUT" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselIUT" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col text-start">
                        <div class="col text-start">
                            <p>Matières:</p>
                            <div class="accordion" id="accordionMatières">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDevApp" aria-expanded="false" aria-controls="collapseDevApp">
                                            Développement applications (C, C++, Java)
                                        </button>
                                    </h2>
                                    <div id="collapseDevApp" class="accordion-collapse collapse" data-bs-parent="#accordionMatières">
                                        <div class="accordion-body">
                                            <p>Contenu à venir...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDevMobile" aria-expanded="false" aria-controls="collapseDevMobile">
                                            Développement mobile
                                        </button>
                                    </h2>
                                    <div id="collapseDevMobile" class="accordion-collapse collapse" data-bs-parent="#accordionMatières">
                                        <div class="accordion-body">
                                            <p>Contenu à venir...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDevWeb" aria-expanded="false" aria-controls="collapseDevWeb">
                                            Développement WEB
                                        </button>
                                    </h2>
                                    <div id="collapseDevWeb" class="accordion-collapse collapse" data-bs-parent="#accordionMatières">
                                        <div class="accordion-body">
                                            <p>Contenu à venir...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBDD" aria-expanded="false" aria-controls="collapseBDD">
                                            Base de données
                                        </button>
                                    </h2>
                                    <div id="collapseBDD" class="accordion-collapse collapse" data-bs-parent="#accordionMatières">
                                        <div class="accordion-body">
                                            <p>Contenu à venir...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReseaux" aria-expanded="false" aria-controls="collapseReseaux">
                                            Réseaux informatiques
                                        </button>
                                    </h2>
                                    <div id="collapseReseaux" class="accordion-collapse collapse" data-bs-parent="#accordionMatières">
                                        <div class="accordion-body">
                                            <p>Contenu à venir...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseManagement" aria-expanded="false" aria-controls="collapseManagement">
                                            Management Systèmes Informatiques - Agile / Ethique
                                        </button>
                                    </h2>
                                    <div id="collapseManagement" class="accordion-collapse collapse" data-bs-parent="#accordionMatières">
                                        <div class="accordion-body">
                                            <p>Contenu à venir...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="halfbox"></div>
            <hr class="mx-auto rounded-2">
            <div class="halfbox"></div>
            <div class="row">
                    <div class="bg-white p-4 rounded-3 col-10 col-md-8 text-center offset-1 border border-5 shadow-lg">
                        <div class="row">
                            <h4> Mes langues de programmation </h4>
                            <div class="col">
                                <p class="text-start">
                                    Langues WEB:
                                <ul class="list-group list-group-flush list-group-horizontal">
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/html5-logo.png" class="img-logo" alt="Logo HTML 5">
                                            <figcaption> HTML 5 </figcaption>
                                        </figure>
                                    </li>
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/css3-logo.png" class="img-logo" alt="Logo CSS 3">
                                            <figcaption> CSS 3 </figcaption>
                                        </figure>
                                    </li>
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/javascript-logo.png" class="img-logo" alt="Logo JavaScript">
                                            <figcaption> JavaScript </figcaption>
                                        </figure>
                                    </li>
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/php-logo.png" class="img-logo" alt="Logo PHP">
                                            <figcaption> PHP 8.3 </figcaption>
                                        </figure>
                                    </li>

                                </ul>
                                </p>
                            </div>
                            <div class="col">
                                <p class="text-start">
                                    Frameworks:
                                <ul class="list-group list-group-flush list-group-horizontal">
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/bootstrap-logo.png" class="img-logo" alt="Logo Bootstrap">
                                            <figcaption> Bootstrap </figcaption>
                                        </figure>
                                    </li>
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/react-logo.png" class="img-logo" alt="Logo React">
                                            <figcaption> React JS </figcaption>
                                        </figure>
                                    </li>
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/symfony-logo.png" class="img-logo" alt="Logo Symfony">
                                            <figcaption> Symfony </figcaption>
                                        </figure>
                                    </li>
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/mariadb-logo.png" class="img-logo" alt="Logo .NET">
                                            <figcaption> .NET </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                                </p>

                            </div>
                            <div class="col">
                                <p class="text-start">
                                    Systèmes BDD:
                                </p>
                                <ul class="list-group list-group-flush list-group-horizontal">
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/mariadb-logo.png" class="img-logo" alt="Logo MariaDB">
                                            <figcaption> MariaDB </figcaption>
                                        </figure>
                                    </li>
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/mysql5-logo.png" class="img-logo" alt="Logo MariaDB">
                                            <figcaption> MySQL </figcaption>
                                        </figure>
                                    </li>
                                    <li class="list-group-item">
                                        <figure>
                                            <img src="<?php echo $topURL?>Images/logo/sqlite-logo.png" class="img-logo"  alt="Logo MariaDB">
                                            <figcaption> SQLite </figcaption>
                                        </figure>
                                    </li>
                                </ul>

                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
            </div>
            <div class="halfbox"></div>
            <div class="row flex-column-reverse">
                <div class="col-10 col-md-8 text-center offset-1 flex-column-reverse bg-white p-4 rounded-3 border border-5 shadow-lg">
                    <div class="row">
                        <h4> Mes logiciels de prédilection </h4>
                        <div class="col">
                            <ul class="list-group list-group-flush list-group-horizontal">
                                <li class="list-group-item">
                                    <figure>
                                        <img src="<?php echo $topURL?>Images/logo/adobe-logo.png" class="img-logo" alt="Logo Adobe Creative Cloud">
                                        <figcaption> Suite Adobe</figcaption>
                                    </figure>
                                </li>
                                <li class="list-group-item">
                                    <figure>
                                        <img src="<?php echo $topURL ?>Images/logo/davinci-logo.png" class="img-logo"
                                             alt="Logo Davinci Resolve">
                                        <figcaption> Davinci Resolve</figcaption>
                                    </figure>
                                </li>
                                <li class="list-group-item">
                                    <figure>
                                        <img src="<?php echo $topURL ?>Images/logo/krita-logo.png" class="img-logo"
                                             alt="Logo Krita">
                                        <figcaption> Krita</figcaption>
                                    </figure>
                                </li>
                                <li class="list-group-item">
                                    <figure>
                                        <img src="<?php echo $topURL ?>Images/logo/unreal-logo.png" class="img-logo"
                                             alt="Logo Unreal Engine">
                                        <figcaption> Unreal Engine</figcaption>
                                    </figure>
                                </li>
                                <li class="list-group-item">
                                    <figure>
                                        <img src="<?php echo $topURL ?>Images/logo/blender-logo.png" class="img-logo"
                                             alt="Logo Blender">
                                        <figcaption> Blender</figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>

            <div class="box"></div>
        </div>


        <?php require "../Common-files/footer.php" ?>
    </body>
</html>