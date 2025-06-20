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
            <div class="bg-white p-4 rounded-3 w-70 mx-auto border border-5 shadow-lg">
                <blockquote class="text-end">
                    <h6> "Guh" </h6>
                    <cite>- Mori Calliope, 2020 - ???? </cite>
                </blockquote>
                <p> Ce projet consiste à présenter un compteur synchronisé avec tout le monde. Ici, on remplace le bouton basique par un GIF de Mori Calliope.</p>
            </div>
            <div class="halfbox"></div>
            <div class="bg-white p-4 rounded-3 w-70 mx-auto border border-5 shadow-lg">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div id="carouselCalliguh" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img>
                                </div>
                                <div class="carousel-item">
                                    <img>
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
                </div>
            </div>
            <div class="halfbox"></div>
        </div>
        <?php require_once "../../../Common-files/footer.php"; ?>
    </body>
</html>
