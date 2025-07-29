<?php
global $topURL;
require "../../../Common-files/redirect.php";
$modId = $_GET['modId'] ?? '';
$title = 'Mod - Badreddine Rezzouk';
?>

<!DOCTYPE html>
<html>
<head>
    <?php require '../../../Common-files/header.php'; ?>
    <style>
        .mod-detail {
            max-width: 800px;
        }
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
    <div class="box"></div>

    <div class="bg-white p-4 rounded-3 mx-auto mod-detail border border-5 shadow-lg" id="modContent">
        <!-- Content will be filled by JS -->
    </div>
    <div class="box"></div>
</div>

<script>
    let allMods = [], games = [], categories = [];
    const modId = "<?php echo $modId ?>";

    document.addEventListener('DOMContentLoaded', () => {
        fetch('<?php echo $topURL ?>mods-json/mods.json')
            .then(res => res.json())
            .then(data => {
                const allMods = data.mods;
                const games = data.games;
                const categories = data.categories;

                const mod = allMods.find(m => m.id === modId);
                if (!mod) {
                    document.getElementById('modTitle').innerText = "Mod introuvable.";
                    return;
                }

                const game = games.find(g => g.id === mod.game)?.name || 'Jeu inconnu';
                const modCategories = mod.categories.map(cid => {
                    const cat = categories.find(c => c.id === cid);
                    return cat ? cat.name : cid;
                }).join(', ');
                const imageHTML = (mod.images || []).map(filename =>
                    `<img class="mod-screenshot" src="<?php echo $topURL ?>Images/mod/${modId}/${filename}" alt="Screenshot du mod">`
                ).join('');


                document.getElementById('modTitle').innerText = mod.title;

                const contentHTML = `
                    <h4><strong>Jeu :</strong> ${game}</h4>
                    <h5><strong>Date :</strong> ${mod.date}</h5>
                    <p><strong>Catégories :</strong> ${modCategories}</p>
                    <p>${mod.description}</p>
                    ${imageHTML}
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


