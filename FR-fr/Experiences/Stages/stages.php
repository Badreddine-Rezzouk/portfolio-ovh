<?php
require "../../../Common-files/redirect.php";
$title = 'Stages - Badreddine Rezzouk';
?>

<!DOCTYPE html>

<html>
<head>
    <?php require '../../../Common-files/header.php'; ?>
</head>
<body>
<?php require "../../../Common-files/navbar.php" ?>
<div class="gradient-box">
    <div class="halfbox"></div>
    <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
        <h2> Mes stages </h2>
    </div>
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 w-60 mx-auto border border-5 shadow-lg">
        <p> Sur cette page, vous trouverez les stages accomplis... J'avoue être à cours de manières différentes d'illustrer ces petites introductions. </p>
    </div>
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 mx-auto text-center w-80 border border-5 shadow-lg">
        <h4> AB Legacy : Gestion locative </h4>
        <span class="badge rounded-pill text-bg-success">Contrat conclu</span>
        <div class="row">
            <div class="halfbox"></div>
            <div class="col-12 col-lg-8 mx-auto">
                <div class="row">
                    <div class="text-start">
                        <table class="table">
                            <tr>
                                <th scope="col"> Type de contrat : </th>
                                <td> Stage en télétravail et présentiel</td>
                            </tr>
                            <tr>
                                <th scope="row"> Exploitant du contrat :</th>
                                <td> AB Legacy </td>
                            </tr>
                            <tr>
                                <th scope="row"> Lieu d'exploitation:</th>
                                <td> 60 Rue de l'Aqueduc, Paris 10e</td>
                            </tr>
                            <tr>
                                <th scope="row"> Durée du contrat:</th>
                                <td> Du 28 Avril 2025 au 27 Juin 2025 </td>
                            </tr>
                            <tr>
                                <th scope="row"> Maitre de stage:</th>
                                <td> Mr. Billal AGHANIM </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="halfbox"></div>
                <p class="text-start">
                    Durant ce stage, j'ai eu l'occasion de travailler sur un projet de gestion locative. Afin de garantir l'intégrité de la sécurité d'AB Legacy, je vais m'abstenir de toute mention des systèmes sensibles.<br>
                    Le cahier des charges du stage originellement proposé se résumait à créer dans l'application en ligne Notion une base de données gérable à distance et d'y connecter un système d'automatisation nommé Make. Cependant, je me suis très rapidement rendu compte de l'infaisabilité du projet tel quel.
                    Après une analyse des choix s'offrant à nous, le projet a été modifier pour devenir un portail web local avec base de données relationelle (MySQL), et une intégration de Make.
                </p>
            </div>
        </div>
    </div>
    <div class="halfbox"></div>
    <?php require "../../../Common-files/footer.php" ?>
</div>
</body>
</html>