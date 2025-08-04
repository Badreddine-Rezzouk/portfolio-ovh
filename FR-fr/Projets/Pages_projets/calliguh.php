<?php
require "../../../Common-files/redirect.php";
require "../../../Common-files/unsupportedlanguage.php";
$title = "Calliguh - Badreddine Rezzouk";
?>

<!DOCTYPE html>

<html>
    <head>
        <?php require_once "../../../Common-files/header.php"; ?>
    </head>
    <body>
        <?php require_once "../../../Common-files/navbar.php"; ?>
        <div class="gradient-box">
            <div class="halfbox"></div>
            <div class="bg-white p-4 rounded-3 text-center w-60 mx-auto border border-5 shadow-lg">
                <h2>Calliguh</h2>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 w-30 mx-auto border border-5 shadow-lg">
                <blockquote class="text-end">
                    <h6> "Guh" </h6>
                    <cite>- Mori Calliope, 2020 - ???? </cite>
                </blockquote>

            </div>
            <div class="halfbox"></div>
            <div class="bg-white p-4 rounded-3 w-70 mx-auto border border-5 shadow-lg">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div id="carouselCalliguh" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $topURL?>Images/projets/calliguh/calliguh_1.png" class="d-block w-100" alt="Calliguh">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $topURL?>Images/projets/calliguh/calliguh_2.png" class="d-block w-100" alt="Calliguh">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCalliguh" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselCalliguh" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p> Ce projet consiste à présenter un compteur synchronisé avec tout le monde. Ici, on remplace le bouton basique par un GIF de Mori Calliope.</p>
                        <a class="btn btn-primary me-2 mb-2" href="https://calliguh.com/" target="_blank"> Accéder au site </a>
                    </div>
                </div>
            </div>
            <div class="halfbox"></div>
        </div>
        <?php require_once "../../../Common-files/footer.php"; ?>
    </body>
</html>
