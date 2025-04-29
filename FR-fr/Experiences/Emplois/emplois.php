<?php
require "../../../Common-files/redirect.php";
$title = "Emplois - Badreddine Rezzouk";
?>

<!DOCTYPE html>

<html>
    <head>
        <?php require "../../../Common-files/header.php"; ?>
    </head>
    <body>
        <?php require "../../../Common-files/navbar.php" ?>
        <div class="gradient-box">
            <br>
            <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
                <h2> Mes emplois </h2>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 mx-auto text-center w-70 border border-5 shadow-lg">
                <p>Bon, je ne vais pas faire l'affront de vous expliquer ce qu'est un emploi. Ici, vous trouverez la liste de mes emplois passés.</p>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 mx-auto text-center w-80 border border-5 shadow-lg">
                <h4> Amazon warehouse : Agent exploitation logistique et production </h4>
                <span class="badge rounded-pill text-bg-success">Contrat conclu</span>
                <div class="row">
                    <div class="halfbox"></div>
                    <div class="col-12 col-lg-4">
                        <!-- images-->
                        <img class="img-fluid" src="../../../Images/amzn.png" alt="Amazon">
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row">
                            <div class="col-auto text-start">
                                <table class="table">
                                    <tr>
                                        <th scope="col"> Type de contrat : </th>
                                        <td> Mission Intérim </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Exploitant du contrat :</th>
                                        <td> Adecco Onsite Brétigny </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Lieu d'exploitation:</th>
                                        <td> Amazon warehouse, Fulfillment center ORY4, Centre d'essais en vol, Brétigny-sur-Orge </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Durée du contrat:</th>
                                        <td> Du 12 Juillet 2024 au 27 Septembre 2024 </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="halfbox"></div>
                        <p class="text-start">
                            Pendant une durée d'approximativement deux mois, j'ai travaillé sur une mission Amazon. Celle-ci consistait à assurer la livraison de produits au consommmateur à une étape du processus. Lors de cette mission, mes postes étaient le <abbr title="Emballage du produit dans le carton de livraison">packing</abbr> et la <abbr title="Déballage des produits de grossiste pour les injecter dans le FC">receive</abbr>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box"></div>
        </div>
        <?php require "../../../Common-files/footer.php" ?>
</body>
</html>