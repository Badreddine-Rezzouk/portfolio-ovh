<?php
global $topURL, $baseURL;
require "../../../Common-files/redirect.php";
$modId = $_GET['modId'] ?? '';
$title = 'Mod - Badreddine Rezzouk';
?>

<!DOCTYPE html>
<html>
<head>
    <?php require '../../../Common-files/header.php'; ?>
    <style>
        .mod-screenshot {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
<?php require "../../../Common-files/navbar.php" ?>
<div class="gradient-box">
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
        <h2 id="modTitle">Chargement du mod...</h2>
    </div>
    <div class="halfbox"></div>

    <div class="bg-white p-4 rounded-3 mx-auto w-75 border border-5 shadow-lg" id="modContent">
        <!-- Content will be filled by JS -->
    </div>
    <div class="box"></div>
</div>

<script>
    let allMods = [], games = [], categories = [];
    const modId = "<?php echo $modId ?>";

    document.addEventListener('DOMContentLoaded', () => {
        fetch('<?php echo $baseURL?>mods-json/mods.json')
            .then(res => res.json())
            .then(data => {
                const allMods = data.mods;
                const games = data.games;
                const categories = data.categories;

                const mod = allMods.find(m => m.id === modId);
                if (!mod) {
                    document.getElementById('modTitle').innerText = "Mod introuvable.";
                    return;
                } else {
                    document.getElementById('modTitle').innerText = mod.title;
                }

                const gameData = games.find(g => g.id === mod.game);
                const gameName = gameData?.name || 'Jeu inconnu';

                const modCategories = mod.categories.map(cid => {
                    const cat = categories.find(c => c.id === cid);
                    return cat ? cat.name : cid;
                }).join(', ');

                // Build the image section (carousel or single image)
                let imageHTML = '';
                const images = mod.images || [];

                if (images.length > 1) {
                    const indicators = images.map((_, i) => `
                        <button type="button" data-bs-target="#carouselMod" data-bs-slide-to="${i}" ${i === 0 ? 'class="active"' : ''} aria-label="Slide ${i + 1}"></button>
                    `).join('');

                    const items = images.map((filename, i) => `
                        <div class="carousel-item ${i === 0 ? 'active' : ''}">
                            <img src="<?php echo $topURL ?>Images/mod/${modId}/${filename}" class="d-block w-100 mod-screenshot" alt="Screenshot ${i + 1}">
                        </div>
                    `).join('');

                    imageHTML = `
                        <div id="carouselMod" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                ${indicators}
                            </div>
                            <div class="carousel-inner">
                                ${items}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMod" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Précédent</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselMod" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Suivant</span>
                            </button>
                        </div>
                    `;
                } else if (images.length === 1) {
                    imageHTML = `<img class="mod-screenshot" src="<?php echo $topURL ?>Images/mod/${modId}/${images[0]}" alt="Screenshot du mod">`;
                }

                // Build download buttons if any
                let downloadButtons = '';
                if (mod.download) {
                    if (mod.download.direct) {
                        downloadButtons += `<a class="btn btn-primary me-2 mb-2" href="<?php echo $topURL?>Files/Mods/${mod.download.direct}" target="_blank">⬇️ Téléchargement direct</a>`;
                    }
                    if (mod.download.nexus) {
                        downloadButtons += `<a class="btn btn-outline-dark me-2 mb-2" href="${mod.download.nexus}" target="_blank">Nexus Mods</a>`;
                    }
                    if (mod.download.modworkshop) {
                        downloadButtons += `<a class="btn btn-outline-success me-2 mb-2" href="${mod.download.modworkshop}" target="_blank">ModWorkshop</a>`;
                    }
                    if (mod.download.steam) {
                        downloadButtons += `<a class="btn btn-outline-success me-2 mb-2" href="${mod.download.modworkshop}" target="_blank">Steam Workshop</a>`;
                    }
                }

                const contentHTML = `
                    <div class="row">
                        <div class="col-md-6 text-start">
                            <h4><strong>Jeu :</strong> ${gameName}</h4>
                            <h5><strong>Date :</strong> ${mod.date}</h5>
                            <p><strong>Catégories :</strong> ${modCategories}</p>
                            <p>${mod.description}</p>
                            <div class="mt-3">
                                ${downloadButtons}
                            </div>
                        </div>
                        <div class="col-md-6">
                            ${imageHTML}
                        </div>
                    </div>
                `;

                document.getElementById('modContent').innerHTML = contentHTML;
            })
            .catch(err => {
                console.error("Erreur lors du chargement du mod:", err);
                document.getElementById('modTitle').innerText = "Erreur lors du chargement.";
            });
    });
</script>


<?php require "../../../Common-files/footer.php" ?>
</body>
</html>


