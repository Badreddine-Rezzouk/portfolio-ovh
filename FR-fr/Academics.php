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
                <h2 class="text-center"> Baccalauréat Technologique <abbr title="Sciences Technologiques de l'Industrie et du Développement Durable">STI2D</abbr></h2>
                <p class="text-start"> Etudié au <a href="https://lyc-brassens-courcouronnes.ac-versailles.fr/">Lycée polyvalent Georges Brassens</a>, à Evry-Courcouronnes. </p>
                <div class="row">
                    <div class="col-6">
                        <img src="../Images/diplome_bac.jpg" class="img-fluid rounded-3 border border-5 shadow-lg">
                    </div>
                    <div class="col text-center mx-auto my-auto">
                        <p> Spécialité <abbr title="Sciences informatiques du numérique">SIN</abbr>, reçu avec mention "Très bien".</p>
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
                        <p>
                            Matières:
                            <ul>
                                <li> Développement applications (C, C++, Java)</li>
                                <li> Développement mobile </li>
                                <li> Développement WEB </li>
                                <li> Base de données </li>
                                <li> Réseaux informatiques </li>
                                <li> Management Systèmes Informatiques - Agile / Ethique</li>
                            </ul>

                        </p>
                    </div>
                </div>
            </div>
            <div class="halfbox"></div>
            <hr class="mx-auto rounded-2">
            <div class="halfbox"></div>
            <div class="row">
                    <div class="bg-white p-4 rounded-3 col-10 col-md-4 text-center offset-1 border border-5 shadow-lg">
                        <div class="row">
                            <h4> Mes langues de programmation </h4>
                            <div class="col">
                                <p class="text-start">
                                    Langues WEB:
                                <ul>
                                    <li> HTML5 </li>
                                    <li> CSS3 </li>
                                    <li> JavaScript </li>
                                    <li> PHP (8.3) </li>

                                </ul>
                                </p>
                            </div>
                            <div class="col">
                                <p class="text-start">
                                    Frameworks:
                                <ul>
                                    <li> Bootstrap </li>
                                    <li> React </li>
                                    <li> Symfony </li>
                                    <li> .NET </li>
                                </ul>
                                </p>

                            </div>
                        </div>
                    </div>
            </div>

            <div class="box"></div>
        </div>


        <?php require "../Common-files/footer.php" ?>
    </body>
</html>