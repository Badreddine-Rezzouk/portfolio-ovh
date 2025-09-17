<?php
require "../Common-files/redirect.php";
$title = "Profil - Badreddine Rezzouk";
?>

<!DOCTYPE html>

<html class="gradient-box">
    <head>
        <?php require '../Common-files/header.php'; ?>
    </head>
    <body>
    <?php require "../Common-files/navbar.php" ?>
    <div class="gradient-box">
        <div class="box"></div>
        <section id="identifier">
            <div class="row w-75 mx-auto">
                <div class="col-auto">
                    <div class="bg-white p-4 rounded-3 px-1 border border-5 shadow-lg h-100">
                        <figure>
                            <img src="<?php echo $topURL?>Images/Profile/badreddine-thumbnail.png" class="img-fluid rounded" alt="Moi">
                            <figcaption class="text-center"> C'est moi :D </figcaption>
                        </figure>
                    </div>

                </div>
                <div class="col bg-white p-4 rounded-3 mx-auto px-1 border border-5 shadow-lg">
                    <div class="row ms-2">
                        <h4> Informations identifiantes </h4>
                        <div class="col text-start">
                            <p> Nom:</p>
                            <p> Age:</p>
                            <p> Status professionnel:</p>
                            <p> Région:</p>
                        </div>
                        <div class="col text-center">
                            <p> Badreddine REZZOUK </p>
                            <p> 20 ans </p>
                            <p> Etudiant - En recherche d'entreprise </p>
                            <p> Ile de France </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="box"></div>
        <section id="linguistic_proficiency">
            <div class="bg-white p-4 rounded-3 w-75 mx-auto border border-5 shadow-lg">
                <h4> Mes langues </h4>
                <p>Français</p>
                <div class="container_langues">
                    <div class="skills french"><p class="ms-3">Langue maternelle</p></div>
                </div>

                <p>Anglais</p>
                <div class="container_langues">
                    <div class="skills english"><p class="ms-3">Courant</p></div>
                </div>

                <p>Espagnol</p>
                <div class="container_langues">
                    <div class="skills spanish"><p class="ms-3">Conversationel</p></div>
                </div>

                <p>Chinois (mandarin)</p>
                <div class="container_langues mb-2">
                    <div class="skills chinese"><p class="ms-3">En apprentissage</p></div>
                </div>
            </div>
        </section>
        <div class="halfbox"></div>
        <div class="bg-white p-4 rounded-3 w-75 mx-auto border border-5 shadow-lg">
            <h4> Mes passions </h4>
            <div class="row rows-cols-3">
                <div class="col-3 card mb-2 mx-auto" style="width: 18rem;" onclick="window.location.href='<?php echo $baseURL?>Passions/formula-1.php'">
                    <figure class="figure mt-2">
                        <img src="<?php echo $topURL?>Images/thumbnail/formula-1_gasly_thumbnail.png" class="card-img-top" alt="Alpine A524 de Gasly">
                        <figcaption class="figure-caption text-end"> Alpine A524 de Pierre Gasly au GP d'Autriche 2024 </figcaption>
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">La Formule 1</h5>
                        <p class="card-text">La formule 1, sport automobile mythique faisant ressentir frissons (et dépression si vous êtes un fan de Ferrari).</p>
                    </div>

                </div>
                <div class="col-3 card mb-2 mx-auto" style="width: 18rem;" onclick="window.location.href='<?php echo $baseURL?>Passions/modding.php'">
                    <figure class="figure mt-2">
                        <img src="<?php echo $topURL?>Images/thumbnail/modding_thumbnail.png" class="card-img-top" alt="Mod Skyrim Fallguysfollower par m150">
                        <figcaption class="figure-caption text-end"> Mod Skyrim Fallguysfollower par m150 </figcaption>
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">Le modding de jeux videos</h5>
                        <p> Le modding, prendre une expérience construite de manière précise, et la transformer en une expérience wtf. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="halfbox"></div>
    </div>
    <?php require "../Common-files/footer.php" ?>
</body>
</html>