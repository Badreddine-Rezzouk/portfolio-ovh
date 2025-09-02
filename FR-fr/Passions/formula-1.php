<?php
require "../../Common-files/redirect.php";
$title = "Formule 1 - Badreddine Rezzouk";
?>

    <!DOCTYPE html>

    <html class="gradient-box">
    <head>
        <?php require '../../Common-files/header.php'; ?>
    </head>
    <body>
        <?php require "../../Common-files/navbar.php" ?>
        <div class="gradient-box">
            <div class="halfbox"></div>
            <div class="bg-white p-4 text-center rounded-3 w-50 mx-auto border border-5 shadow-lg">
                <h2> La Formule 1 </h2>
            </div>
            <div class="halfbox"></div>
            <div class="bg-white p-4 text-center rounded-3 w-75 mx-auto">
                <h4> La Formule 1 en résumé </h4>
                <p class="text-start"> La Formule 1 est une compétition automobile <abbr title="la performance de la voiture varie selon l'écurie">polytype</abbr> régie par la Fédération Internationale de l'Automobile (ou FIA) qui se tient annuellement depuis 1950. </p>
            </div>
            <div class="halfbox"></div>
            <div id="gasly" class="bg-white p-4 rounded-3 w-50 offset-1">
                <div class="row">
                    <div id="info" class="col offset-1">
                        <h2 class='text-center'>Mon pilote favori</h2><ul>
                        <li><strong>Nom:</strong> Pierre Gasly </li>
                        <li><strong>Numéro:</strong> 10 </li>
                        <li><strong>Pays:</strong> France </li>
                        <li><strong>Ecurie:</strong> BWT Alpine F1 Team</li>
                        </ul>

                    </div>
                    <div id="photo" class="col offset-1 border border-5 rounded square" style="background: var(--gradient)">
                        <img src="<?php echo $topURL?>Images/thumbnail/formula-1_gasly-face_thumbnail.png" alt="Pierre Gasly">
                    </div>
                </div>
                <p> Un bon français de chez nous, cocorico!<br><br>
                    Né le 7 février 1996, il rejoint une famille de passionnés de l'automobile, avec un grand-père qui faisait du karting en 1961, une grand-mère championne Normande et un père ayant concouru en endurance pour Peugeot.
                    Pierre et deux de ses frères ont eux-mêmes assisté à du karting à un <strong>très</strong> jeune âge (2 ans tabarnak, je mangeais encore mes pieds à cet âge).<br><br>
                    Après des débuts avec un kart d'occasion, il réussit à devenir champion de Normandie en 2006, puis une 3e place en compétition nationale et un championnat l'année suivante.<br><br>
                    Pierre Gasly rejoint la F4 en 2011 sous la tutelle de <u>Auto Sport Academy</u>, avec qui il se classera 3e à nouveau.
                </p>
            </div>
            <div class="halfbox"></div>
        </div>
        <?php require "../../Common-files/footer.php" ?>
    </body>
</html>
