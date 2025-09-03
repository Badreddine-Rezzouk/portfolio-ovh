<?php
global $topURL, $baseURL;
require "../../Common-files/redirect.php";
$title = '模组制作 - Badreddine Rezzouk';
?>

<!DOCTYPE html>

<html>
<head>
    <?php require '../../Common-files/header.php'; ?>
    <style>
        .mod-card:hover{
            cursor: pointer;
            background-color: rgba(255,255,255,0.2);
        }
    </style>
</head>
<body>
<?php require "../../Common-files/navbar.php" ?>
<div class="gradient-box">
    <div class="halfbox"></div>
    <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
        <h2> 我的游戏模组 </h2>
    </div>
    <div class="halfbox"></div>
    <div class="bg-white p-4 rounded-3 offset-1 w-50 border border-5 shadow-lg">
        <p>
            游戏模组制作是一种通过添加或修改内容来改变电子游戏的做法，其目的是实现开发者原本未设想的游戏玩法。
        </p>
    </div>
    <div class="box"></div>
    <div class="row">
        <div class="filters col-10 col-md-3 offset-1 mb-2 bg-white p-4 rounded-3 border border-5 shadow-lg" style="max-height:14vw;">
            <label for="gameFilter"> 相关游戏: </label>
            <select id="gameFilter" class="form-select mb-3">
                <option value="">所有游戏</option>
            </select>
            <label for="categoryFilter"> 类别: </label>
            <select id="categoryFilter" class="form-select mb-3">
                <option value="">所有类别</option>
            </select>
        </div>

        <div id="modList" class="mod-list col-10 col-md-7 mx-auto bg-white p-4 rounded-3 border border-5 shadow-lg"></div>
        <div class="halfbox"></div>
    </div>
    <script>
        let allMods = [], games = [], categories = [];

        document.addEventListener('DOMContentLoaded', () => {
            fetch('<?php echo $baseURL?>mods-json/mods.json')
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
            return game ? game.name : '未知游戏';
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

                let statusPill = '';
                if (mod.status === 'released') {
                    statusPill += `<span class="badge rounded-pill text-bg-success"> 已发布 </span>`;
                } else if (mod.status === 'working') {
                    statusPill += `<span class="badge rounded-pill text-bg-warning"> 制作中 </span>`;
                }

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
                            ${statusPill}
                            <p>${mod.shortdescription}</p>
                        </div>
                        </div>
                        <div class="quarterbox"></div>

                `;

                list.appendChild(div);
            });
        }
    </script>
</div>
<?php require "../../Common-files/footer.php" ?>
</body>
</html>