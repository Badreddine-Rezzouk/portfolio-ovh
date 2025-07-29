<?php
global $topURL;
require "../../Common-files/redirect.php";
$title = 'Modding - Badreddine Rezzouk';
?>

<!DOCTYPE html>

<html>
<head>
    <?php require '../../Common-files/header.php'; ?>
    <style>
        .mod-card:hover{
            cursor: pointer;
            background: rgba(255,255,255,0.2);
        }
    </style>
</head>
<body>
<?php require "../../Common-files/navbar.php" ?>
<div class="gradient-box">
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
        <h2> Mes mods de jeux vidéos</h2>
    </div>
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 offset-1 w-50 border border-5 shadow-lg">
        <p>
            Le modding de jeux vidéos est une pratique dont le but est de transformer un jeu vidéo en ajoutant ou modifiant du contenu, avec comme finalité un gameplay qui n'est pas originellement prévu par le développeur.
        </p>
    </div>
    <div class="box"></div>
    <div class="row">
    <div class="filters col-3 offset-1 bg-white p-4 rounded-3 border border-5 shadow-lg">
        <label for="gameFilter"> Jeu concerné: </label>
        <select id="gameFilter" class="form-select mb-3">
            <option value="">Tous les jeux</option>
        </select>
        <label for="categoryFilter"> Catégorie: </label>
        <select id="categoryFilter" class="form-select mb-3">
            <option value="">Toutes les Catégories</option>
        </select>
    </div>

    <div id="modList" class="mod-list col-7 mx-auto bg-white p-4 rounded-3 border border-5 shadow-lg"></div>
    <div class="halfbox"></div>
    </div>
    <script>
        let allMods = [], games = [], categories = [];

        document.addEventListener('DOMContentLoaded', () => {
            fetch('<?php echo $topURL?>mods-json/mods.json')
                .then(res => res.json())
                .then(data => {
                    allMods = data.mods;
                    games = data.games;
                    categories = data.categories;

                    populateFilters();
                    renderMods(allMods);
                });

            document.getElementById('gameFilter').addEventListener('change', applyFilters);
            document.getElementById('categoryFilter').addEventListener('change', applyFilters);
        });

        function populateFilters() {
            const gameFilter = document.getElementById('gameFilter');
            games.forEach(g => {
                const opt = document.createElement('option');
                opt.value = g.id;
                opt.textContent = g.name;
                gameFilter.appendChild(opt);
            });

            const categoryFilter = document.getElementById('categoryFilter');
            categories.forEach(c => {
                const opt = document.createElement('option');
                opt.value = c.id;
                opt.textContent = c.name;
                categoryFilter.appendChild(opt);
            });
        }

        function applyFilters() {
            const selectedGame = document.getElementById('gameFilter').value;
            const selectedCategory = document.getElementById('categoryFilter').value;

            const filtered = allMods.filter(mod => {
                const gameMatch = selectedGame ? mod.game === selectedGame : true;
                const categoryMatch = selectedCategory ? mod.categories.includes(selectedCategory) : true;
                return gameMatch && categoryMatch;
            });

            renderMods(filtered);
        }

        function getGameName(gameId) {
            const game = games.find(g => g.id === gameId);
            return game ? game.name : 'Unknown Game';
        }


        function renderMods(mods) {
            const baseURL = "<?php echo $baseURL ?>";
            const topURL = "<?php echo $topURL ?>";
            const list = document.getElementById('modList');
            list.innerHTML = '';
            mods.forEach(mod => {
                const div = document.createElement('div');
                div.className = 'mod-card';
                const gameName = getGameName(mod.game);
                const modThumbnail = topURL + "Images/mod/" + mod.id + "/" + mod.images[0];

                // Set the click handler using a proper function
                div.onclick = function () {
                    window.location.href = baseURL + 'Passions/mod-file/mod-file.php?modId=' + mod.id;
                };

                div.innerHTML = `
                        <div class="row">
                        <div class="col">
                            <img src="${modThumbnail}"></img>
                        </div>
                        <div class="col">
                            <h4>${mod.title} | <small>${gameName}</small></h4>
                            <h6>${mod.date}</h6>
                            <p>${mod.description}</p>
                        </div>
                        </div>

                `;

                list.appendChild(div);
            });
        }
    </script>
</div>
<?php require "../../Common-files/footer.php" ?>
</body>
</html>