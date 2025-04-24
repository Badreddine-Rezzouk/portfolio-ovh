<?php global $language_error_fr;
require "../Common-files/redirect.php";
require "../Common-files/unsupportedlanguage.php";
$title = "Accueil - Badreddine Rezzouk";
?>

<!DOCTYPE html>

<html class="gradient-box">
    <head>
        <?php require "../Common-files/header.php"; ?>
    </head>
    <body>
        <?php require "../Common-files/navbar.php" ?>
        <div class="gradient-box">
            <div id="main_page_cover" class="container-fluid" style='background-image: url("../Images/Home_Page_Banner_Paris_2024_2000.png"); background-size: cover; background-position: center; background-color: rgba(255,255,255,0.6); background-blend-mode: darken;'>
                <div class="halfbox"></div>
                <div class="card mb-3 offset-lg-1 border border-5 col-lg-4">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../Images/bainville.jpg" class="img-fluid rounded-start" alt="Portrait de Jacques Bainville">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <p class="card-text">"L'optimisme est la foi des révolutions"</p>
                                <p class="card-text"><small> - Jacques Bainville </small></p>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <br class="d-md-block d-none">
                <div class="card mb-3 offset-lg-7 border border-5 col col-lg-4">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../Images/einstein-langue-1600-1600.jpg" class="img-fluid rounded-start" alt="Portrait de Albert Einstein">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <p class="card-text">"Hör auf, mich irgendetwas sagen zu lassen"</p>
                                <p class="card-text"><small> - Albert Einstein </small></p>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="box"></div>
            </div>
            <br>
            <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                <h2>Bienvenue sur mon portfolio</h2>
            </div>
            <div id="error-container"></div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    if (!readCookie('fr')) {
                        // Safely insert HTML content
                        const errorContainer = document.getElementById("error-container");
                        const msg = <?php echo json_encode($language_error_fr); ?>;

                        // Create temporary div to parse HTML safely
                        const temp = document.createElement('div');
                        temp.innerHTML = msg;

                        // Sanitize content (basic example - consider using DOMPurify for robust sanitization)
                        const sanitized = sanitizeHTML(temp);

                        errorContainer.appendChild(sanitized);

                        createCookie('fr', 'fr', 1, {
                            secure: true,
                            sameSite: 'Strict'
                        });
                    }
                });

                // Basic HTML sanitization function (consider using DOMPurify library instead)
                function sanitizeHTML(node) {
                    const allowedTags = ['div', 'span', 'p', 'a', 'strong', 'em']; // Add allowed tags
                    const allowedAttributes = ['href', 'class', 'id','data-bs-dismiss','aria-hidden']; // Add allowed attributes

                    // If it's a text node, return as is
                    if (node.nodeType === 3) return node.cloneNode();

                    // Create new element with same tag name
                    const cleanNode = document.createElement(node.tagName.toLowerCase());

                    // Copy allowed attributes
                    for (let i = 0; i < node.attributes.length; i++) {
                        const attr = node.attributes[i];
                        if (allowedAttributes.includes(attr.name)) {
                            cleanNode.setAttribute(attr.name, attr.value);
                        }
                    }

                    // Recursively sanitize child nodes
                    for (let i = 0; i < node.childNodes.length; i++) {
                        const cleanedChild = sanitizeHTML(node.childNodes[i]);
                        if (cleanedChild) cleanNode.appendChild(cleanedChild);
                    }

                    return cleanNode;
                }
            </script>

            <div class="box"></div>
            <div id="main_page_section" class="container-fluid">
                <div class="row">
                    <div class="bg-white p-4 rounded-3 text-center w-60 mx-auto border border-5 shadow-lg">
                        Bonjour, je m'appelle Badreddine et je suis un étudiant d'origine française actuellement à l'université Paris Cité - Rives de Seine. Bienvenue sur ce désordre qu'est mon portfolio!
                    </div>
                </div>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                <h4>Au programme sur ce portfolio:</h4>
            </div>
            <div class="halfbox"></div>
            <div class="container bg-white p-4 rounded-3 text-center w-auto mx-auto border border-5 shadow-lg">
                <div class="row">
                    <a class="col link-underline link-underline-opacity-0" href="<?php echo $baseURL;?>Profile.php">
                    <div class="col">
                        <h6> Mon profil personel</h6>
                        <p> Pour tout savoir de ma personne. </p>
                    </div>
                    </a>
                    <a class="col link-underline link-underline-opacity-0" href="<?php echo $baseURL;?>Academics.php">
                    <div class="col">
                        <h6> Mon profil académique et professionel </h6>
                        <p> Une manière pas piqué des hannetons de juger mes compétences. </p>
                    </div>
                    </a>
                    <a class="col link-underline link-underline-opacity-0" href="<?php echo $baseURL;?>Experiences.php">
                    <div class="col">
                        <h6> Mes emplois et stages </h6>
                        <p> Pour prouver que je ne viens pas de la dernière pluie. (WIP) </p>
                    </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col link-underline link-underline-opacity-0">
                        <h6> </h6>
                    </div>
                    <div class="col link-underline link-underline-opacity-0">

                    </div>
                    <a class="col link-underline link-underline-opacity-0" href="<?php echo $baseURL;?>Passions/modding.php">
                    <div class="col">
                        <h6> Mes projets de mods </h6>
                        <p> Qui sait? Peut-être qu'on a des passions en commun. </p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 text-center w-50 offset-1 border border-5 shadow-lg">
                <script>
                    // Function to update the time
                    function updateTime() {
                        const dt = luxon.DateTime.now().setZone('Europe/Paris').setLocale('fr');

                        const formattedTime = dt.toLocaleString(luxon.DateTime.TIME_WITH_SECONDS);

                        const timeElement = document.getElementById('current-time');
                        if (timeElement) {
                            timeElement.textContent = formattedTime;
                        } else {
                            console.error("Element with ID 'current-time' not found!");
                        }
                    }
                    function updateDate() {
                        const dt = luxon.DateTime.now().setZone('Europe/Paris').setLocale('fr');

                        const formattedDate = dt.toLocaleString(luxon.DateTime.DATE_FULL);

                        const dateElement = document.getElementById('current-date');
                        if (dateElement) {
                            dateElement.textContent = formattedDate;
                        } else {
                            console.error("Element with ID 'current-date' not found!");
                        }
                    }
                    // Ensure the DOM is fully loaded before running the script
                    document.addEventListener("DOMContentLoaded", function () {
                        // Update the time immediately
                        updateTime();
                        updateDate();
                        // Update the time every second (1000 milliseconds)
                        setInterval(updateTime, 1000);
                        setInterval(updateDate, 1000);
                    });
                </script>
                <h4> Il est actuellement <span id="current-time"></span> le <span id="current-date"></span> pour moi.</h4>
            </div>
            <div class="box"></div>

        </div>
        <?php require "../Common-files/footer.php" ?>
    </body>
</html>
