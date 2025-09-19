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
                            <p> Ile de France, France </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="halfbox"></div>
            <div class="w-75 mx-auto">
                <details class="bg-white border border-5 rounded-3">
                    <summary> Une petite biographie</summary>
                    <p class="p-3">
                        Né à Evry en 2005, j'ai vécu une enfance assez banale, celle que la plupart des enfants ont en France. Bébé, bambin, petit garçon, j'avais la réputation d'être absurdement façile à gérer.
                        <br><br>
                        Mon éducation se passait de manière relativement normale, jusqu'à mon année de 6e où j'ai fait la découverte du concept "dents + lavabo + vélocité = dégâts". Je me suis fait aggressé dans les toilettes de mon collège sans réelle logique de la part du taré qui m'a pris pour une balle de tennis.
                        Cette expérience m'a beaucoup impacté au niveau psychologique (et physique, ma machoire ne s'en est toujours pas entièrement remi à ce jour), ayant conséquement affecté ma confiance envers les autres.
                        <br><br>
                        Autour de mes 13 ans, j'ai commencé à développer une certaine passion pour les ordinateurs. À l'époque, le vieil <abbr title="Un Acer Aspire sous Windows Vista" >ordinateur fixe familial</abbr> avait été abandonné au profit de plusieurs ordinateurs portables.
                        J'ai donc eu la belle idée de l'ouvrir, pour voir ce qui s'y tramait (spoiler: c'était très poussiéreux). Après un bon petit nettoyage, j'ai pu l'allumer et constaté qu'il avait repris du poil de la bête.
                        <br>
                        Cette réussite m'a ammené à chercher plus d'informations sur les ordinateurs et leur fonctionnement, ce qui m'a conduit éventuellement à la chaîne Youtube Canadienne de <a href="https://www.youtube.com/user/LinusTechTips" class="text-decoration-none">Linus Tech Tips</a>.
                        J'y ai appris ce qu'est un processeur, une carte graphique, commment monter un ordinateur, etc.
                        <br><br>
                        En parallèle, j'ai aussi découvert ce doux langage de programmation qu'est le HTML (déjà en version 5.2). J'y ai pris goût et ai commencé à développer des petits sites sans trop refléchir aux principes de web design, web architecture et autres composants aussi avancé que le <i>CSS</i> (Oui, ce n'était pas beau à voir).
                        D'ailleurs, vous devriez tapper "anisdoggo" sur la page d'accueil si vous lisez ceci.
                        <br><br>
                        Arrivé au lycée, je décide de prendre la voie de la <abbr title="Sciences Technologiques de l'Industrie et du Développement Durable">STI2D</abbr>, encore divisé sûr si je souhaitais me diriger vers de l'ingénierie ou vers de l'informatique.
                        <br>
                        <span class="font-monospace fs-3"> AND THEN ALONG CAME <strike>ZEUS</strike> LE COVID-19</span>
                        <br>
                        Les médias parlaient déjà des répercussions sur la décennie à venir, mentionnant de potentielles grosses perturbations dans le recrutement d'ingénieurs notamment chez Airbus, et j'ai choisi en panique la voie du clavier.
                    </p>
                </details>
            </div>
        </section>
        <div class="halfbox"></div>
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
                <div class="col-3 card mb-2 mx-auto" style="width: 18rem;cursor: pointer;" onclick="window.location.href='<?php echo $baseURL?>Passions/formula-1.php'">
                    <figure class="figure mt-2">
                        <img src="<?php echo $topURL?>Images/thumbnail/formula-1_gasly_thumbnail.png" class="card-img-top" alt="Alpine A524 de Gasly">
                        <figcaption class="figure-caption text-end"> Alpine A524 de Pierre Gasly au GP d'Autriche 2024 </figcaption>
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">La Formule 1</h5>
                        <p class="card-text">La formule 1, sport automobile mythique faisant ressentir frissons (et dépression si vous êtes un fan de Ferrari).</p>
                    </div>

                </div>
                <div class="col-3 card mb-2 mx-auto" style="width: 18rem;cursor: pointer;" onclick="window.location.href='<?php echo $baseURL?>Passions/modding.php'">
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